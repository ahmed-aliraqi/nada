<?php

namespace AhmedAliraqi\Ui;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Str;

class Layout
{
    public static function sections($group, $layout = null)
    {
        $layout = $layout ?: config('ui.layout');

        $sections = collect(config("ui.layouts.{$layout}.sections"))->where('group', $group);

        return $sections->keys();
    }

    public static function fields($section, $layout = null)
    {
        $layout = $layout ?: config('ui.layout');

        return config("ui.layouts.{$layout}.sections.{$section}.fields");
    }

    public static function hasManyValues($section, $layout = null)
    {
        $layout = $layout ?: config('ui.layout');

        return config("ui.layouts.{$layout}.sections.{$section}.has_many_values");
    }

    public static function sectionName($section)
    {
        return (string)Str::of($section)->snake(' ')->ucfirst()->replace('_', ' ');
    }

    public static function fieldName($section, $field)
    {
        if (Lang::has($key = "ui.sections.$section.attributes.$field")) {
            return __($key);
        }

        return (string)Str::of($field)->snake(' ')->lower()->ucfirst()->replace('_', ' ');
    }

    public static function field($section, $field, $layout = null)
    {
        $layout = $layout ?: config('ui.layout');

        return config("ui.layouts.{$layout}.sections.{$section}.fields.{$field}");
    }

    public static function groups($layout = null): Collection
    {
        $layout = $layout ?: config('ui.layout');

        return collect(
            config("ui.layouts.{$layout}.sections"))
            ->pluck('group')
            ->unique()
            ->values();
    }

    public static function group($section, $layout = null)
    {
        $layout = $layout ?: config('ui.layout');

        return config("ui.layouts.{$layout}.sections.{$section}.group");
    }

    public static function canAddMore($section, $layout = null)
    {
        $layout = $layout ?: config('ui.layout');

        $sections = Section::make($section);

        $limit = config("ui.layouts.{$layout}.sections.{$section}.limit");

        if (is_null($limit)) {
            return true;
        }


        if ($sections instanceof Collection) {
            return $sections->count() < $limit;
        }

        return false;
    }
}
