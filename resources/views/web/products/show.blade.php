@extends('layouts.app', ['title' => $product->name])

@section('content')

    <!-- BREADCRUMB -->
    <div style="padding-top: 90px;">
        <div class="container">
            <div class="breadcrumb-compact">
                <a href="{{ LaravelLocalization::getLocalizedURL(url: '/') }}">{{ __('Home') }}</a>
                <span class="sep"><i class="bi bi-chevron-right"></i></span>
                <a href="{{ LaravelLocalization::getLocalizedURL(url: '/shop') }}">{{ __('Shop') }}</a>
                <span class="sep"><i class="bi bi-chevron-right"></i></span>
                <a href="{{ LaravelLocalization::getLocalizedURL(url: '/shop?category_id'.$product->category_id) }}">{{ $product->category->name }}</a>
                <span class="sep"><i class="bi bi-chevron-right"></i></span>
                <span class="current">{{ $product->name }}</span>
            </div>
        </div>
    </div>

    <!-- PRODUCT DETAIL -->
    <section class="luxury-section" style="padding-top: 10px;">
        <div class="container">
            <div class="row g-5">

                <!-- ===== LEFT: GALLERY ===== -->
                <div class="col-lg-6">
                    <div class="product-gallery">
                        <input type="radio" name="gal" id="g1" class="gallery-radio" checked>
                        <input type="radio" name="gal" id="g2" class="gallery-radio">
                        <input type="radio" name="gal" id="g3" class="gallery-radio">
                        <input type="radio" name="gal" id="g4" class="gallery-radio">

                        <div class="gallery-main">
                            <!-- Floating badges -->
                            <div class="product-float-badges">
                                <span class="product-float-badge badge-new">{{ $product->category->name }}</span>
                            </div>
                            <button class="gallery-wishlist"><i class="bi bi-heart"></i></button>

                            @foreach($product->getMedia() as $key => $media)
                                <div class="slide s{{ $key++ }}">
                                    <img src="{{ $media->getUrl() }}" alt="{{ $product->name }} Image {{ $loop->iteration }}">
                                </div>
                            @endforeach
                        </div>

                        <div class="gallery-thumbs">
                            @foreach($product->getMedia() as $key => $media)
                                <label for="g{{ $key++ }}" class="gallery-thumb t{{ $key }}">
                                    <img src="{{ $media->getUrl() }}" alt="{{ $product->name }} Image {{ $loop->iteration }}">
                                </label>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- ===== RIGHT: PRODUCT INFO ===== -->
                <div class="col-lg-6">
                    <div class="product-info-sticky">

                        <!-- Category -->
                        <span style="font-size:0.72rem;letter-spacing:0.25em;text-transform:uppercase;color:var(--accent-gold);display:block;margin-bottom:0.8rem;">
              {{ $product->category->name }}
            </span>

                        <!-- Title -->
                        <h1 style="font-size: clamp(2rem, 4vw, 2.8rem); font-weight: 800; line-height: 1.1; margin-bottom: 0.8rem;">
                            {{ $product->name }}
                        </h1>

                        <!-- Rating summary -->
                        <div style="display:flex; align-items:center; gap:16px; margin-bottom:1.5rem; flex-wrap:wrap;">
                            <div style="display:flex; gap:3px;">
                                <i class="bi bi-star-fill" style="color:var(--accent-gold);font-size:0.95rem;"></i>
                                <i class="bi bi-star-fill" style="color:var(--accent-gold);font-size:0.95rem;"></i>
                                <i class="bi bi-star-fill" style="color:var(--accent-gold);font-size:0.95rem;"></i>
                                <i class="bi bi-star-fill" style="color:var(--accent-gold);font-size:0.95rem;"></i>
                                <i class="bi bi-star-fill" style="color:var(--accent-gold);font-size:0.95rem;"></i>
                            </div>
                            <span style="font-size:0.85rem;color:var(--text-muted);">5.0 — 48 Reviews</span>
                            <span style="font-size:0.82rem;color:#6FCF97;display:flex;align-items:center;gap:4px;">
                <i class="bi bi-patch-check-fill"></i> Verified
              </span>
                        </div>

                        <!-- Price -->
                        <div style="margin-bottom:1.8rem;">
                            <span style="font-family:var(--font-serif);font-size:2.2rem;font-weight:700;color:var(--accent-gold);">$185.00</span>
                        </div>

                        <!-- Short description -->
                        <p style="font-size:0.95rem;color:var(--text-secondary);line-height:1.9;margin-bottom:1.8rem;font-weight:300;">
                            {!! $product->description !!}
                        </p>

                        <!-- Quantity -->
                        <div style="display:flex; align-items:center; gap:20px; margin-bottom:2rem; flex-wrap:wrap;">
                            <div class="variant-label" style="margin-bottom:0;">{{ __('Quantity') }}</div>
                            <div class="quantity-selector" style="margin-bottom:0;">
                                <button class="quantity-btn">−</button>
                                <input type="text" class="quantity-input" value="1" readonly>
                                <button class="quantity-btn">+</button>
                            </div>
{{--                            <span style="font-size:0.82rem;color:var(--text-muted);">Only 12 left in stock</span>--}}
                        </div>

                        <!-- Action buttons -->
                        <div style="display:flex;gap:12px;margin-bottom:2rem;flex-wrap:wrap;">
                            <a href="{{ LaravelLocalization::getLocalizedURL(url: '/cart') }}" class="btn-gold" style="flex:1;min-width:200px;justify-content:center;">
                                <span>{{ __('Add to Cart') }}</span>
                                <i class="bi bi-bag"></i>
                            </a>
                            <button class="btn-outline-gold" style="flex:1;min-width:180px;justify-content:center;">
                                <i class="bi bi-lightning"></i>
                                <span>{{ __('Buy Now') }}</span>
                            </button>
                        </div>

                    </div><!-- /sticky -->
                </div><!-- /col -->
            </div><!-- /row -->
        </div>
    </section>

    <!-- ===== RELATED PRODUCTS ===== -->
    <section class="luxury-section">
        <div class="container">
            <div class="section-header">
                <span class="section-label">{{ __('You May Also Like') }}</span>
                <h2 class="section-title">{{ __('Related Products') }}</h2>
                <div class="gold-divider"></div>
            </div>
            <div class="row g-4">
                @foreach($product->category->products()->inRandomOrder()->limit(4)->get() as $relatedProduct)
                    <div class="col-sm-6 col-lg-3">
                        @include('web.partials.product', ['product' => $relatedProduct])
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
