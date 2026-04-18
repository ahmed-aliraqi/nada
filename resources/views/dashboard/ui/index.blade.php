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
            @if(Layout::hasManyValues($routeSection))
                @include('dashboard.ui.many')
            @else
                @include('dashboard.ui.single', ['uiSection' => Section::make($routeSection)])
            @endif
        </div>
    </div>
</x-layout>
