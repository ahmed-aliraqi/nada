@use(AhmedAliraqi\Ui\Layout)
@switch(Layout::field($section, $field))
    @case(\AhmedAliraqi\Ui\Fields\Text::class)
    @if(isset($uiSection) && $uiSection)
        {{ BsForm::text("fields[$field]")
            ->value($uiSection->field($field))
            ->label(Layout::fieldName($section, $field))
            ->note(isset($hideNotes) && $hideNotes ? '' : '<bdi>'.__('Variable Name: :name', ['name' => sprintf('<code>%%ui.%s.%s%%</code>', $section, $field)]).'</bdi>') }}
    @else
        {{ BsForm::text("fields[$field]")
            ->value(old("fields.$field"))
            ->label(Layout::fieldName($section, $field))
            ->note(isset($hideNotes) && $hideNotes ? '' : '<bdi>'.__('Variable Name: :name', ['name' => sprintf('<code>%%ui.%s.%s%%</code>', $section, $field)]).'</bdi>') }}
    @endif
    @break
    @case(\AhmedAliraqi\Ui\Fields\Textarea::class)
    @if(isset($uiSection) && $uiSection)
        {{ BsForm::textarea("fields[$field]")->value($uiSection->field($field))->label(Layout::fieldName($section, $field)) }}
    @else
        {{ BsForm::textarea("fields[$field]")->value(old("fields.$field"))->label(Layout::fieldName($section, $field)) }}
    @endif
    @break
    @case(\AhmedAliraqi\Ui\Fields\Number::class)
    @if(isset($uiSection) && $uiSection)
        {{ BsForm::number("fields[$field]")
            ->value($uiSection->field($field))
            ->label(Layout::fieldName($section, $field))
            ->note(isset($hideNotes) && $hideNotes ? '' : '<bdi>'.__('Variable Name: :name', ['name' => sprintf('<code>%%ui.%s.%s%%</code>', $section, $field)]).'</bdi>') }}
    @else
        {{ BsForm::number("fields[$field]")
            ->value(old("fields.$field"))
            ->label(Layout::fieldName($section, $field))
            ->note(isset($hideNotes) && $hideNotes ? '' : '<bdi>'.__('Variable Name: :name', ['name' => sprintf('<code>%%ui.%s.%s%%</code>', $section, $field)]).'</bdi>') }}
    @endif
    @break
    @case(\AhmedAliraqi\Ui\Fields\Email::class)
    @if(isset($uiSection) && $uiSection)
        {{ BsForm::email("fields[$field]")
            ->value($uiSection->field($field))
            ->label(Layout::fieldName($section, $field))
            ->note(isset($hideNotes) && $hideNotes ? '' : '<bdi>'.__('Variable Name: :name', ['name' => sprintf('<code>%%ui.%s.%s%%</code>', $section, $field)]).'</bdi>') }}
    @else
        {{ BsForm::email("fields[$field]")
            ->value(old("fields.$field"))
            ->label(Layout::fieldName($section, $field))
            ->note(isset($hideNotes) && $hideNotes ? '' : '<bdi>'.__('Variable Name: :name', ['name' => sprintf('<code>%%ui.%s.%s%%</code>', $section, $field)]).'</bdi>') }}
    @endif
    @break
    @case(\AhmedAliraqi\Ui\Fields\Editor::class)
    @if(isset($uiSection) && $uiSection)
        {{ BsForm::textarea("fields[$field]")->value($uiSection->field($field))->attribute('class', 'form-control textarea')->label(Layout::fieldName($section, $field)) }}
    @else
        {{ BsForm::textarea("fields[$field]")->value(old("fields.$field"))->attribute('class', 'form-control textarea')->label(Layout::fieldName($section, $field)) }}
    @endif
    @break
    @case(\AhmedAliraqi\Ui\Fields\Date::class)
    @if(isset($uiSection) && $uiSection)
        {{ BsForm::date("fields[$field]")
            ->value($uiSection->field($field))
            ->label(Layout::fieldName($section, $field))
            ->note(isset($hideNotes) && $hideNotes ? '' : '<bdi>'.__('Variable Name: :name', ['name' => sprintf('<code>%%ui.%s.%s:Y-m-d%%</code>', $section, $field)]).'</bdi>') }}
    @else
        {{ BsForm::date("fields[$field]")
            ->value(old("fields.$field"))
            ->label(Layout::fieldName($section, $field))
            ->note(isset($hideNotes) && $hideNotes ? '' : '<bdi>'.__('Variable Name: :name', ['name' => sprintf('<code>%%ui.%s.%s:Y-m-d%%</code>', $section, $field)]).'</bdi>') }}
    @endif
    @break
    @case(\AhmedAliraqi\Ui\Fields\File::class)
    @if(isset($uiSection) && $uiSection)
        <file-uploader :media="{{ $uiSection->getMediaResource($field) }}"
                       name="fields[{{$field}}]"
                       collection="{{ $field }}"
                       :max="1"
                       label="{{ Layout::fieldName($section, $field) }}"
                       notes="Supported types: jpeg, png,jpg,gif"
                       accept="image/jpeg,image/png,image/jpg,image/gif"
        ></file-uploader>

        @if(! Str::startsWith($uiSection->field($field)->mime_type, 'image'))
            <a target="_blank" href="{{ $uiSection->field($field)->download() }}">{{ __('Download') }}</a>
        @endif
    @else
        <file-uploader :media="[]"
                       name="fields[{{$field}}]"
                       collection="{{ $field }}"
                       :max="1"
                       label="{{ Layout::fieldName($section, $field) }}"
                       notes="Supported types: jpeg, png,jpg,gif"
                       accept="image/jpeg,image/png,image/jpg,image/gif"
        ></file-uploader>
    @endif
    @break
@endswitch
