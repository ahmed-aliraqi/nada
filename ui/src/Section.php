<?php

namespace AhmedAliraqi\Ui;

use AhmedAliraqi\Ui\Fields\Date;
use AhmedAliraqi\Ui\Fields\File;
use AhmedAliraqi\Ui\Models\UiSection;

class Section
{
    public static function make($section): UiSection|\Illuminate\Database\Eloquent\Collection|null
    {
        $layout = config('ui.layout');

        $hasManyValues = config("ui.layouts.{$layout}.sections.{$section}.has_many_values");

        $collection = app('ui.section')->where('section', $section);

        if (! $hasManyValues) {
            return $collection->first();
        }

        return $collection;
    }
}
