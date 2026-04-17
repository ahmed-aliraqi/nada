<?php

namespace App\Models;

use AhmedAliraqi\LaravelFilterable\Filterable;
use AhmedAliraqi\LaravelMediaUploader\Entities\Concerns\HasUploader;
use App\Excel\Exportable;
use App\Excel\Importable;
use App\Http\Filters\ProductFilter;
use App\Models\Concerns\HasMediaConversions;
use App\Models\Translations\CategoryTranslation;
use App\Support\Traits\Selectable;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Collection;
use Illuminate\Validation\Rule;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Product extends Model implements Exportable, Importable, TranslatableContract, HasMedia
{
    use Filterable;
    use HasFactory;
    use Selectable;
    use SoftDeletes;
    use Translatable;
    use InteractsWithMedia;
    use HasUploader;
    use HasMediaConversions;

    /**
     * The filter class used for querying this model.
     *
     * @var class-string<ProductFilter>
     */
    protected string $filter = ProductFilter::class;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'category_id',
        'price',
        'active',
    ];

    /**
     * The translated attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    public $translatedAttributes = ['name', 'description'];

    /**
     * The relations to eager load on every query.
     *
     * @var array<int, string>
     */
    protected $with = [
        'translations',
    ];

    public function toSelect2(): array
    {
        return [
            'id' => $this->id,
            'text' => $this->getPrice(),
        ];
    }

    public function getPriceWithCurrency(): string
    {
        return sprintf('%s %.2f', '$', number_format($this->price, 2));
    }

    /**
     * Get the entity unit price.
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * Transform models into Excel rows.
     */
    public static function toExcelRows(Collection $models): Collection
    {
        return $models->map(function (self $model) {
            return [
                'name_en' => $model->{'name:en'},
                'name_ar' => $model->{'name:ar'},
                'description_en' => $model->{'description:en'},
                'description_ar' => $model->{'description:ar'},
                'category_en' => $model->category->{'name:en'},
                'category_ar' => $model->category->{'name:ar'},
                'price' => $model->price,
                'active' => $model->active ? 'Yes' : 'No',
            ];
        });
    }

    /**
     * Create model instance from Excel row.
     *
     * @return static|static[]|null
     */
    public static function makeFromExcel(array $row): static|array|null
    {
        $categoryId = Category::whereTranslation('name', $row['category_en'])
            ->orWhereTranslation('name', $row['category_ar'])
            ->first()
            ?->id;
        return new static([
            'category_id' => $categoryId,
            'name:en' => data_get($row, 'name_en'),
            'name:ar' => data_get($row, 'name_ar'),
            'description:en' => data_get($row, 'description_en'),
            'description:ar' => data_get($row, 'description_ar'),
            'price' => data_get($row, 'price'),
            'active' => filter_var(data_get($row, 'active'), FILTER_VALIDATE_BOOLEAN),
        ]);
    }

    /**
     * Get the validation rules that apply to the import.
     */
    public static function validationRules(): array
    {
        return [
            'category_en' => ['required', Rule::exists(CategoryTranslation::class, 'name')],
            'category_ar' => ['required', Rule::exists(CategoryTranslation::class, 'name')],
            'name_en' => ['required', 'string'],
            'name_ar' => ['required', 'string'],
            'description_en' => ['nullable', 'string'],
            'description_ar' => ['nullable', 'string'],
            'price' => ['required', 'numeric'],
        ];
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Define the media collections.
     */
    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('default')
            ->registerMediaConversions(fn () => $this->registerConversions(model: $this));
    }
}
