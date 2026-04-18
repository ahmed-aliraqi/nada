@extends('layouts.app', ['title' => __('Shop')])

@section('content')
    <!-- PAGE HEADER -->
    <section class="page-header">
        <div class="page-header-bg"></div>
        <div class="page-header-overlay"></div>
        <div class="page-header-content">
            <span class="section-label">Our Collection</span>
            <h1>Shop</h1>
            <div class="breadcrumb-luxury">
                <a href="{{ LaravelLocalization::getLocalizedURL(url: '/') }}">Home</a>
                <span class="separator"><i class="bi bi-chevron-right"></i></span>
                <span class="current">Shop</span>
            </div>
        </div>
    </section>

    <!-- SHOP CONTENT -->
    <section class="luxury-section">
        <div class="container">
            <div class="row">
                <!-- FILTERS SIDEBAR -->
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="filter-section mb-4">
                        <div class="filter-title">Category</div>
                        <div class="filter-option checked"><div class="filter-checkbox"></div><span class="filter-label">All Products</span><span class="filter-count">24</span></div>
                        <div class="filter-option"><div class="filter-checkbox"></div><span class="filter-label">Perfumes</span><span class="filter-count">12</span></div>
                        <div class="filter-option"><div class="filter-checkbox"></div><span class="filter-label">Makeup</span><span class="filter-count">8</span></div>
                        <div class="filter-option"><div class="filter-checkbox"></div><span class="filter-label">Body Care</span><span class="filter-count">4</span></div>
                    </div>
                    <div class="filter-section mb-4">
                        <div class="filter-title">Price Range</div>
                        <div class="filter-option"><div class="filter-checkbox"></div><span class="filter-label">Under $50</span><span class="filter-count">6</span></div>
                        <div class="filter-option checked"><div class="filter-checkbox"></div><span class="filter-label">$50 – $100</span><span class="filter-count">8</span></div>
                        <div class="filter-option"><div class="filter-checkbox"></div><span class="filter-label">$100 – $200</span><span class="filter-count">7</span></div>
                        <div class="filter-option"><div class="filter-checkbox"></div><span class="filter-label">$200+</span><span class="filter-count">3</span></div>
                    </div>
                    <div class="filter-section mb-4">
                        <div class="filter-title">Collection</div>
                        <div class="filter-option"><div class="filter-checkbox"></div><span class="filter-label">Classic</span><span class="filter-count">10</span></div>
                        <div class="filter-option"><div class="filter-checkbox"></div><span class="filter-label">Oriental</span><span class="filter-count">6</span></div>
                        <div class="filter-option"><div class="filter-checkbox"></div><span class="filter-label">Niche</span><span class="filter-count">5</span></div>
                        <div class="filter-option"><div class="filter-checkbox"></div><span class="filter-label">Body Care</span><span class="filter-count">3</span></div>
                    </div>
                </div>

                <!-- PRODUCTS GRID -->
                <div class="col-lg-9">
                    <div class="shop-sort-bar">
                        <div class="result-count">Showing <strong>12</strong> of <strong>24</strong> products</div>
                        <select class="sort-select">
                            <option>Sort by: Featured</option>
                            <option>Price: Low to High</option>
                            <option>Price: High to Low</option>
                            <option>Newest First</option>
                            <option>Best Rating</option>
                        </select>
                    </div>

                    <div class="row g-4">
                        <!-- Product 1 -->
                        <div class="col-sm-6 col-lg-4">
                            <div class="product-card">
                                <div class="product-card-image">
                                    <img src="https://picsum.photos/seed/shop01/500/600.jpg" alt="Rose Noir Eau de Parfum">
                                    <span class="product-badge badge-new">New</span>
                                    <div class="product-card-actions">
                                        <a href="{{ LaravelLocalization::getLocalizedURL(url: '/product') }}" class="product-card-action-btn">View</a>
                                        <button class="product-card-action-btn icon-only"><i class="bi bi-heart"></i></button>
                                    </div>
                                </div>
                                <div class="product-card-body">
                                    <span class="product-card-category">Perfumes</span>
                                    <h4 class="product-card-title"><a href="{{ LaravelLocalization::getLocalizedURL(url: '/product') }}">Rose Noir Eau de Parfum</a></h4>
                                    <div class="product-card-rating"><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><span class="count">(48)</span></div>
                                    <div class="product-card-price"><span class="current">$185.00</span></div>
                                </div>
                            </div>
                        </div>
                        <!-- Product 2 -->
                        <div class="col-sm-6 col-lg-4">
                            <div class="product-card">
                                <div class="product-card-image">
                                    <img src="https://picsum.photos/seed/shop02/500/600.jpg" alt="Velvet Rouge Lipstick">
                                    <span class="product-badge badge-sale">Sale</span>
                                    <div class="product-card-actions">
                                        <a href="{{ LaravelLocalization::getLocalizedURL(url: '/product') }}" class="product-card-action-btn">View</a>
                                        <button class="product-card-action-btn icon-only"><i class="bi bi-heart"></i></button>
                                    </div>
                                </div>
                                <div class="product-card-body">
                                    <span class="product-card-category">Makeup</span>
                                    <h4 class="product-card-title"><a href="{{ LaravelLocalization::getLocalizedURL(url: '/product') }}">Velvet Rouge Lipstick</a></h4>
                                    <div class="product-card-rating"><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><i class="bi bi-star-half star"></i><span class="count">(126)</span></div>
                                    <div class="product-card-price"><span class="current">$45.00</span><span class="old">$65.00</span></div>
                                </div>
                            </div>
                        </div>
                        <!-- Product 3 -->
                        <div class="col-sm-6 col-lg-4">
                            <div class="product-card">
                                <div class="product-card-image">
                                    <img src="https://picsum.photos/seed/shop03/500/600.jpg" alt="Amber Oud Concentrate">
                                    <div class="product-card-actions">
                                        <a href="{{ LaravelLocalization::getLocalizedURL(url: '/product') }}" class="product-card-action-btn">View</a>
                                        <button class="product-card-action-btn icon-only"><i class="bi bi-heart"></i></button>
                                    </div>
                                </div>
                                <div class="product-card-body">
                                    <span class="product-card-category">Perfumes</span>
                                    <h4 class="product-card-title"><a href="{{ LaravelLocalization::getLocalizedURL(url: '/product') }}">Amber Oud Concentrate</a></h4>
                                    <div class="product-card-rating"><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star empty"></i><span class="count">(73)</span></div>
                                    <div class="product-card-price"><span class="current">$240.00</span></div>
                                </div>
                            </div>
                        </div>
                        <!-- Product 4 -->
                        <div class="col-sm-6 col-lg-4">
                            <div class="product-card">
                                <div class="product-card-image">
                                    <img src="https://picsum.photos/seed/shop04/500/600.jpg" alt="Silk Glow Foundation">
                                    <span class="product-badge badge-best">Best Seller</span>
                                    <div class="product-card-actions">
                                        <a href="{{ LaravelLocalization::getLocalizedURL(url: '/product') }}" class="product-card-action-btn">View</a>
                                        <button class="product-card-action-btn icon-only"><i class="bi bi-heart"></i></button>
                                    </div>
                                </div>
                                <div class="product-card-body">
                                    <span class="product-card-category">Makeup</span>
                                    <h4 class="product-card-title"><a href="{{ LaravelLocalization::getLocalizedURL(url: '/product') }}">Silk Glow Foundation</a></h4>
                                    <div class="product-card-rating"><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><span class="count">(89)</span></div>
                                    <div class="product-card-price"><span class="current">$78.00</span></div>
                                </div>
                            </div>
                        </div>
                        <!-- Product 5 -->
                        <div class="col-sm-6 col-lg-4">
                            <div class="product-card">
                                <div class="product-card-image">
                                    <img src="https://picsum.photos/seed/shop05/500/600.jpg" alt="Golden Hour Body Oil">
                                    <span class="product-badge badge-new">New</span>
                                    <div class="product-card-actions">
                                        <a href="{{ LaravelLocalization::getLocalizedURL(url: '/product') }}" class="product-card-action-btn">View</a>
                                        <button class="product-card-action-btn icon-only"><i class="bi bi-heart"></i></button>
                                    </div>
                                </div>
                                <div class="product-card-body">
                                    <span class="product-card-category">Body Care</span>
                                    <h4 class="product-card-title"><a href="{{ LaravelLocalization::getLocalizedURL(url: '/product') }}">Golden Hour Body Oil</a></h4>
                                    <div class="product-card-rating"><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><span class="count">(204)</span></div>
                                    <div class="product-card-price"><span class="current">$95.00</span></div>
                                </div>
                            </div>
                        </div>
                        <!-- Product 6 -->
                        <div class="col-sm-6 col-lg-4">
                            <div class="product-card">
                                <div class="product-card-image">
                                    <img src="https://picsum.photos/seed/shop06/500/600.jpg" alt="Saffron Musk Eau de Toilette">
                                    <div class="product-card-actions">
                                        <a href="{{ LaravelLocalization::getLocalizedURL(url: '/product') }}" class="product-card-action-btn">View</a>
                                        <button class="product-card-action-btn icon-only"><i class="bi bi-heart"></i></button>
                                    </div>
                                </div>
                                <div class="product-card-body">
                                    <span class="product-card-category">Perfumes</span>
                                    <h4 class="product-card-title"><a href="{{ LaravelLocalization::getLocalizedURL(url: '/product') }}">Saffron Musk Eau de Toilette</a></h4>
                                    <div class="product-card-rating"><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><i class="bi bi-star-half star"></i><span class="count">(167)</span></div>
                                    <div class="product-card-price"><span class="current">$155.00</span></div>
                                </div>
                            </div>
                        </div>
                        <!-- Product 7 -->
                        <div class="col-sm-6 col-lg-4">
                            <div class="product-card">
                                <div class="product-card-image">
                                    <img src="https://picsum.photos/seed/shop07/500/600.jpg" alt="Pearl Glow Highlighter">
                                    <span class="product-badge badge-sale">Sale</span>
                                    <div class="product-card-actions">
                                        <a href="{{ LaravelLocalization::getLocalizedURL(url: '/product') }}" class="product-card-action-btn">View</a>
                                        <button class="product-card-action-btn icon-only"><i class="bi bi-heart"></i></button>
                                    </div>
                                </div>
                                <div class="product-card-body">
                                    <span class="product-card-category">Makeup</span>
                                    <h4 class="product-card-title"><a href="{{ LaravelLocalization::getLocalizedURL(url: '/product') }}">Pearl Glow Highlighter</a></h4>
                                    <div class="product-card-rating"><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><span class="count">(312)</span></div>
                                    <div class="product-card-price"><span class="current">$38.00</span><span class="old">$52.00</span></div>
                                </div>
                            </div>
                        </div>
                        <!-- Product 8 -->
                        <div class="col-sm-6 col-lg-4">
                            <div class="product-card">
                                <div class="product-card-image">
                                    <img src="https://picsum.photos/seed/shop08/500/600.jpg" alt="Oud Wood Body Cream">
                                    <div class="product-card-actions">
                                        <a href="{{ LaravelLocalization::getLocalizedURL(url: '/product') }}" class="product-card-action-btn">View</a>
                                        <button class="product-card-action-btn icon-only"><i class="bi bi-heart"></i></button>
                                    </div>
                                </div>
                                <div class="product-card-body">
                                    <span class="product-card-category">Body Care</span>
                                    <h4 class="product-card-title"><a href="{{ LaravelLocalization::getLocalizedURL(url: '/product') }}">Oud Wood Body Cream</a></h4>
                                    <div class="product-card-rating"><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star empty"></i><span class="count">(91)</span></div>
                                    <div class="product-card-price"><span class="current">$72.00</span></div>
                                </div>
                            </div>
                        </div>
                        <!-- Product 9 -->
                        <div class="col-sm-6 col-lg-4">
                            <div class="product-card">
                                <div class="product-card-image">
                                    <img src="https://picsum.photos/seed/shop09/500/600.jpg" alt="Midnight Jasmine Elixir">
                                    <span class="product-badge badge-new">New</span>
                                    <div class="product-card-actions">
                                        <a href="{{ LaravelLocalization::getLocalizedURL(url: '/product') }}" class="product-card-action-btn">View</a>
                                        <button class="product-card-action-btn icon-only"><i class="bi bi-heart"></i></button>
                                    </div>
                                </div>
                                <div class="product-card-body">
                                    <span class="product-card-category">Perfumes</span>
                                    <h4 class="product-card-title"><a href="{{ LaravelLocalization::getLocalizedURL(url: '/product') }}">Midnight Jasmine Elixir</a></h4>
                                    <div class="product-card-rating"><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><span class="count">(56)</span></div>
                                    <div class="product-card-price"><span class="current">$295.00</span></div>
                                </div>
                            </div>
                        </div>
                        <!-- Product 10 -->
                        <div class="col-sm-6 col-lg-4">
                            <div class="product-card">
                                <div class="product-card-image">
                                    <img src="https://picsum.photos/seed/shop10/500/600.jpg" alt="Velvet Matte Eyeshadow Palette">
                                    <div class="product-card-actions">
                                        <a href="{{ LaravelLocalization::getLocalizedURL(url: '/product') }}" class="product-card-action-btn">View</a>
                                        <button class="product-card-action-btn icon-only"><i class="bi bi-heart"></i></button>
                                    </div>
                                </div>
                                <div class="product-card-body">
                                    <span class="product-card-category">Makeup</span>
                                    <h4 class="product-card-title"><a href="{{ LaravelLocalization::getLocalizedURL(url: '/product') }}">Velvet Matte Eyeshadow Palette</a></h4>
                                    <div class="product-card-rating"><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star empty"></i><span class="count">(78)</span></div>
                                    <div class="product-card-price"><span class="current">$88.00</span></div>
                                </div>
                            </div>
                        </div>
                        <!-- Product 11 -->
                        <div class="col-sm-6 col-lg-4">
                            <div class="product-card">
                                <div class="product-card-image">
                                    <img src="https://picsum.photos/seed/shop11/500/600.jpg" alt="Tuberose Absolute Perfume">
                                    <span class="product-badge badge-best">Best Seller</span>
                                    <div class="product-card-actions">
                                        <a href="{{ LaravelLocalization::getLocalizedURL(url: '/product') }}" class="product-card-action-btn">View</a>
                                        <button class="product-card-action-btn icon-only"><i class="bi bi-heart"></i></button>
                                    </div>
                                </div>
                                <div class="product-card-body">
                                    <span class="product-card-category">Perfumes</span>
                                    <h4 class="product-card-title"><a href="{{ LaravelLocalization::getLocalizedURL(url: '/product') }}">Tuberose Absolute Perfume</a></h4>
                                    <div class="product-card-rating"><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><span class="count">(134)</span></div>
                                    <div class="product-card-price"><span class="current">$175.00</span></div>
                                </div>
                            </div>
                        </div>
                        <!-- Product 12 -->
                        <div class="col-sm-6 col-lg-4">
                            <div class="product-card">
                                <div class="product-card-image">
                                    <img src="https://picsum.photos/seed/shop12/500/600.jpg" alt="Rose Petal Hand Cream">
                                    <span class="product-badge badge-sale">Sale</span>
                                    <div class="product-card-actions">
                                        <a href="{{ LaravelLocalization::getLocalizedURL(url: '/product') }}" class="product-card-action-btn">View</a>
                                        <button class="product-card-action-btn icon-only"><i class="bi bi-heart"></i></button>
                                    </div>
                                </div>
                                <div class="product-card-body">
                                    <span class="product-card-category">Body Care</span>
                                    <h4 class="product-card-title"><a href="{{ LaravelLocalization::getLocalizedURL(url: '/product') }}">Rose Petal Hand Cream</a></h4>
                                    <div class="product-card-rating"><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><i class="bi bi-star-half star"></i><span class="count">(65)</span></div>
                                    <div class="product-card-price"><span class="current">$28.00</span><span class="old">$40.00</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
