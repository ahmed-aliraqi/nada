@component('dashboard::components.sidebarItem')
    @slot('url', route('dashboard.orders.index'))
    @slot('name', __('orders.plural'))
    @slot('active', request()->routeIs('*orders*'))
    @slot('icon', 'fas fa-shopping-bag')
    @slot('tree', [
        [
            'name'   => __('orders.actions.list'),
            'url'    => route('dashboard.orders.index'),
            'active' => request()->routeIs('*orders.index') || request()->routeIs('*orders.show'),
        ],
    ])
@endcomponent
