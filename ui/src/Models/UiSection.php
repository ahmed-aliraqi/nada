<?php

namespace AhmedAliraqi\Ui\Models;

use AhmedAliraqi\LaravelMediaUploader\Entities\Concerns\HasUploader;
use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

use function config;

class UiSection extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    use HasUploader;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'layout',
        'section',
        'name',
        'fields',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'fields' => 'array',
    ];

    /**
     * Determine whither the section has many values.
     *
     * @return bool
     */
    public function hasManyValues(): bool
    {
        return !! config("ui.layouts.{$this->layout}.sections.has_many_values");
    }

    public function field($field)
    {
        $fieldType = config("ui.layouts.{$this->layout}.sections.{$this->section}.fields.{$field}");

        if (! $fieldType || ! class_exists($fieldType)) {
            throw new Exception(
                sprintf(
                    "The field '%s' is not configured in section '%s' of layout '%s'",
                    $fieldType,
                    $this->section,
                    $this->layout
                )
            );
        }

        $getter = new $fieldType;

        return $getter->setFrontendSection($this)->get($field);
    }

    /**
     * Perform any actions required after the model boots.
     *
     * @return void
     */
    protected static function booted()
    {
        static::addGlobalScope(fn($query) => $query->where('layout', config('ui.layout')));
    }
}
