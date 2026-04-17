<?php

namespace App\Models\Concerns;

use Spatie\Image\Enums\Fit;
use Spatie\MediaLibrary\HasMedia;

trait HasMediaConversions
{
    public function registerConversions(HasMedia $model): void
    {
        $model
            ->addMediaConversion('large')
            ->format('webp')
            ->quality(60);

        $model
            ->addMediaConversion('medium')
            ->fit(Fit::Max, 800, 800)
            ->format('webp')
            ->quality(60);

        $model
            ->addMediaConversion('small')
            ->fit(Fit::Max, 400, 400)
            ->format('webp')
            ->quality(60);

        $model
            ->addMediaConversion('thumb')
            ->fit(Fit::Max, 150, 150)
            ->format('webp')
            ->quality(60);
    }
}
