@use(AhmedAliraqi\Ui\Layout)

@if(auth()->user()->isAdmin())
    @component('dashboard::components.sidebarItem')
        @slot('url', '#')
        @slot('name', trans('ui.sections_name'))
        @slot('active', request()->routeIs('*ui*'))
        @slot('icon', 'fas fa-th')
        @slot('tree', Layout::groups()->map(fn($group) => [
                'name' => __((string)Str::of($group)->snake(' ')->lower()->ucfirst()->replace('_', ' ')),
                'url' => route('dashboard.ui.index', $group),
                'active' => request()->routeIs('*ui*') &&  request()->route('group') == $group,
            ])->toArray())
    @endcomponent
@endif


