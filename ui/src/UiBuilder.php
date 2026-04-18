<?php

namespace AhmedAliraqi\Ui;

use AhmedAliraqi\Ui\Fields\Date;
use AhmedAliraqi\Ui\Fields\File;
use AhmedAliraqi\Ui\Models\UiSection;
use Exception;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Arr;
use Illuminate\Support\HtmlString;

class UiBuilder
{
    protected string|null $layout;

    protected string|null $section;

    protected string|null $name = null;

    protected array $fields = [];

    protected array $files = [];

    /**
     * @var UiSection|null
     */
    protected UiSection|null $uiSection = null;

    public function __construct()
    {
        $this->layout = config('ui.layout');
    }

    /**
     * @return $this
     */
    public function clear(): self
    {
        UiSection::all()->each->delete();

        return $this;
    }

    /**
     * @param string $section
     * @return $this
     */
    public function section(string $section): self
    {
        $this->section = $section;

        return $this;
    }

    /**
     * @param \AhmedAliraqi\Ui\Models\UiSection|null $uiSection
     * @return $this
     */
    public function setUiSection(?UiSection $uiSection): self
    {
        $this->uiSection = $uiSection;

        return $this;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param array $fields
     * @throws \Exception
     * @return $this
     */
    public function setFields(array $fields = []): self
    {
        foreach ($fields as $key => $value) {
            $field = config("ui.layouts.{$this->layout}.sections.{$this->section}.fields.{$key}");

            if (! $field || ! class_exists($field)) {
                throw new Exception(
                    sprintf(
                        "The field '%s' is not configured in section '%s' of layout '%s'",
                        $key,
                        $this->section,
                        $this->layout
                    )
                );
            }

            $field = new $field;

            if ($field instanceof File) {
                $this->files[$key] = $value;
            } else {
                if ($value = $field->set($value)) {
                    $this->fields[$key] = $value;
                }
            }
        }

        return $this;
    }

    /**
     * @return \AhmedAliraqi\Ui\Models\UiSection
     */
    public function build(): UiSection
    {
        $hasManyValues = config("ui.layouts.{$this->layout}.sections.{$this->section}.has_many_values");

        $uiSection = $this->uiSection;

        if ($uiSection || ! $hasManyValues) {
            if (! $uiSection) {
                $uiSection = UiSection::firstWhere([
                    'layout' => $this->layout,
                    'section' => $this->section,
                ]);
            }

            if ($uiSection) {
                $uiSection->forceFill([
                    'layout' => $this->layout,
                    'section' => $this->section,
                    'name' => $this->name,
                    'fields' => $this->fields,
                ])->save();
            }
        }

        if (! $uiSection) {
            $uiSection = UiSection::create([
                'layout' => $this->layout,
                'section' => $this->section,
                'name' => $this->name,
                'fields' => $this->fields,
            ]);
        }

        foreach ($this->files ?? [] as $key => $value) {
            $uiSection->addAllMediaFromTokens($value, $key);

            foreach (Arr::wrap($value) as $val) {
                if ($val instanceof UploadedFile || file_exists($val)) {
                    $uiSection->getMedia($key)->each->delete();
                    $uiSection->addMedia($val)->preservingOriginal()->toMediaCollection($key);
                }
            }
        }

        $this->section = null;
        $this->uiSection = null;
        $this->name = null;
        $this->fields = [];
        $this->files = [];

        return $uiSection;
    }

    public function value($value)
    {
        if ($value instanceof HtmlString) {
            $value = $value->toHtml();
        }

        if (is_string($value)) {
            preg_match_all("/%ui\.([a-zA-Z-_.:\s]+)%/", $value, $matches);

            foreach (data_get($matches, '1', []) as $match) {
                $sectionAndField = data_get(explode(':', $match), 0 );
                $format = data_get(explode(':', $match), 1);

                $explodedSectionAndField = explode('.', $sectionAndField);

                $section = data_get($explodedSectionAndField, 0);
                $field = data_get($explodedSectionAndField, 1);

                $layout = config('ui.layout');

                $sections = config("ui.layouts.{$layout}.sections", []);

                if (collect($sections)->has($section) && collect(Layout::fields($section))->has($field)) {
                    $replacement = Section::make($section)->field($field);

                    if (Layout::field($section, $field) == Date::class && $format) {
                        $replacement = $replacement->format($format);
                    }

                    $value = str_replace("%ui.$match%", $replacement, $value);
                }
            }
        }

        return $value;
    }
}