<?php

namespace App\Models;

use AhmedAliraqi\LaravelFilterable\Filterable;
use App\Http\Filters\CategoryFilter;
use App\Models\Concerns\HasMediaConversions;
use App\Support\Traits\Selectable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use AhmedAliraqi\LaravelMediaUploader\Entities\Concerns\HasUploader;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Category extends Model implements TranslatableContract, HasMedia
{
    use Filterable;
    use HasFactory;
    use Selectable;
    use Translatable;
    use InteractsWithMedia;
    use HasUploader;
    use HasMediaConversions;

    /**
     * The filter class used for querying this model.
     *
     * @var class-string<CategoryFilter>
     */
    protected string $filter = CategoryFilter::class;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
    ];

    /**
     * The translated attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    public $translatedAttributes = ['name'];

    /**
     * The relations to eager load on every query.
     *
     * @var array<int, string>
     */
    protected $with = [
        'translations',
        'media',
    ];

    /**
     * Define the media collections.
     */
    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('default')
            ->useFallbackUrl(url('images/placeholder/600x800.webp'))
            ->singleFile()
            ->registerMediaConversions(fn () => $this->registerConversions(model: $this));

    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
