@use(AhmedAliraqi\Ui\Layout)
{{ BsForm::post(route('dashboard.ui.store', [$group, $routeSection, optional($uiSection)->id])) }}
@component('dashboard::components.box')
    @slot('title')
        {{ trans('ui.actions.edit') }} ({{ Layout::sectionName($routeSection) }})
    @endslot
    @foreach(Layout::fields($routeSection) as $field => $class)
        @include('dashboard.ui.partials.input', [
            'section' => $routeSection,
             'field' => $field,
             'uiSection' => $uiSection,
        ])
    @endforeach

    @slot('footer')
        {{ BsForm::submit()->label(trans('ui.actions.save')) }}
    @endslot
@endcomponent
{{ BsForm::close() }}
