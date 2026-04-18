@use(AhmedAliraqi\Ui\Layout)
@use(AhmedAliraqi\Ui\Section)
<x-layout :title="trans('ui.sections_name')" :breadcrumbs="['dashboard.ui.index', $group, $routeSection]">
    <div class="row">
        <div class="col-md-3">
            @component('dashboard::components.box')
                <div class="nav flex-column nav-tabs h-100" aria-orientation="vertical">
                    @foreach($sections as $section)
                        <a class="nav-link{{ $section == $routeSection ? ' active' : '' }}"
                           id="vert-tabs-home-tab"
                           href="{{ route('dashboard.ui.index', [$group, $section]) }}">
                            {{ __(Layout::sectionName($section)) }}
                        </a>
                    @endforeach
                </div>
            @endcomponent
        </div>
        <div class="col-md-9">
                {{ BsForm::post(route('dashboard.ui.store', [$group, $routeSection, $uiSection->id])) }}
                @component('dashboard::components.box')
                    @slot('title')
                        {{ trans('ui.actions.edit') }} ({{ $uiSection->name }})
                    @endslot

                    {{ BsForm::text('name')
                        ->label(__('ui.section_name'))
                        ->value($uiSection->name) }}

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
        </div>
    </div>
</x-layout>
