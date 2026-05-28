@extends('layouts.app', ['title' => __('Shop')])

@section('content')
    <!-- PAGE HEADER -->
    <section class="page-header">
        <div class="page-header-bg"></div>
        <div class="page-header-overlay"></div>
        <div class="page-header-content">
            <span class="section-label">{{ __('Our Collection') }}</span>
            <h1>{{ __('Shop') }}</h1>
            <div class="breadcrumb-luxury">
                <a href="{{ LaravelLocalization::getLocalizedURL(url: '/') }}">{{ __('Home') }}</a>
                <span class="separator"><i
                        class="bi bi-chevron-{{ Locales::getDir() == 'ltr' ? 'right' : 'left' }}"></i></span>
                <span class="current">{{ __('Shop') }}</span>
            </div>
        </div>
    </section>

    <!-- SHOP CONTENT -->
    <form action="{{ route('products.index') }}" id="filter-form" class="d-none"></form>
    <section class="luxury-section">
        <div class="container">
            <div class="row">
                <!-- FILTERS SIDEBAR -->
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="filter-section mb-4">
                        <div class="filter-title">{{ __('Category') }}</div>

                        <div onclick="location.href= '{{ $updateQueryParams(['category' => null]) }}'"
                             class="filter-option{{ ! request('category') ? ' checked' : '' }}"
                             data-filter="category"
                             data-value="all">
                            <div class="filter-checkbox"></div>
                            <span class="filter-label">{{ __('All Products') }}</span>
                            <span class="filter-count">{{ count_formatted($allProductsCount) }}</span>
                        </div>
                        @foreach($categories as $category)
                            <div onclick="location.href= '{{ $updateQueryParams(['category' => $category->name]) }}'"
                                 class="filter-option{{ request('category') == $category->name ? ' checked' : '' }}">
                                <div class="filter-checkbox"></div>
                                <span class="filter-label">{{ $category->name }}</span>
                                <span class="filter-count">{{ count_formatted($category->products_count) }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- PRODUCTS GRID -->
                <div class="col-lg-9">
                    <div class="shop-sort-bar">
                        <div class="result-count">
                            {{ __('Showing') }}
                            <strong>{{ $products->count() }}</strong>
                            {{ __('of') }}
                            <strong>{{ $products->total() }}</strong>
                            {{ __('results') }}
                        </div>
                        <select class="sort-select" onchange="location.href = this.value">
                            <optgroup label="{{ __('Sort By') }}">
                                <option value="{{ $updateQueryParams(['sort' => 'price_low_high']) }}">
                                    {{ __('Price') }}: {{ __('Low to High') }}
                                </option>
                                <option value="{{ $updateQueryParams(['sort' => 'price_high_low']) }}">
                                    {{ __('Price') }}: {{ __('High to Low') }}
                                </option>
                                <option value="{{ $updateQueryParams(['sort' => 'oldest']) }}">
                                    {{ __('Created Date') }}: {{ __('Oldest') }}
                                </option>
                                <option value="{{ $updateQueryParams(['sort' => 'latest']) }}">
                                    {{ __('Created Date') }}: {{ __('Latest') }}
                                </option>
                            </optgroup>
                        </select>
                    </div>

                    <div class="row g-4">
                        @foreach($products as $product)
                            <div class="col-sm-6 col-lg-4">
                                @include('web.partials.product', ['product' => $product])
                            </div>
                        @endforeach

                    </div>
                    {!! $products->links('trendora-pagination') !!}
                </div>
            </div>
        </div>
    </section>

@endsection
