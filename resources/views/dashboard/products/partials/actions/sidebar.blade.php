@component('dashboard::components.sidebarItem')
    @slot('can', ['ability' => 'viewAny', 'model' => \App\Models\Product::class])
    @slot('url', route('dashboard.products.index'))
    @slot('name', __('products.plural'))
    @slot('active', request()->routeIs('*products*'))
    @slot('icon', 'fas fa-th')
    @slot('tree', [
        [
            'name' => __('products.actions.list'),
            'url' => route('dashboard.products.index'),
            'can' => ['ability' => 'viewAny', 'model' => \App\Models\Product::class],
            'active' => request()->routeIs('*products.index')
            || request()->routeIs('*products.show'),
        ],
        [
            'name' => __('products.actions.create'),
            'url' => route('dashboard.products.create'),
            'can' => ['ability' => 'create', 'model' => \App\Models\Product::class],
            'active' => request()->routeIs('*products.create'),
        ],
    ])
@endcomponent