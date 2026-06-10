@extends('layouts.app', ['title' => __('Home')])

@section('content')

    <!-- ========== HERO ========== -->
    <section class="hero-section">
        <div class="hero-bg" style="background-image: url('{{ ui_section('banner')->field('background')->getUrl() }}')"></div>
        <div class="hero-overlay"></div>
        <div class="hero-glow"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="hero-content">
                        <h3 class="hero-title">
                            {{ ui_section('banner')->field('title:'.app()->getLocale()) }}
                        </h3>
                        <p class="hero-description">
                            {{ ui_section('banner')->field('subtitle:'.app()->getLocale()) }}
                        </p>
                        <div class="hero-actions">
                            <a href="{{ LaravelLocalization::getLocalizedURL(url: '/shop') }}" class="btn-gold">
                                <span>{{ __('Explore Collection') }}</span>
                                <i class="bi bi-arrow-{{ Locales::getDir() == 'ltr' ? 'right' : 'left' }}"></i>
                            </a>
                            <a href="{{ LaravelLocalization::getLocalizedURL(url: '/about') }}" class="btn-outline-gold">
                                <span>{{ __('Our Story') }}</span>
                            </a>
                        </div>
                    </div>
                    <div class="hero-stats">
                        <div>
                            <div class="hero-stat-number">{{ count_formatted($productsCount) }}+</div>
                            <div class="hero-stat-label">{{ __('Products Count') }}</div>
                        </div>
                        <div>
                            <div class="hero-stat-number">{{ count_formatted($customersCount) }}+</div>
                            <div class="hero-stat-label">{{ __('Happy Clients') }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== CATEGORIES ========== -->
    <section class="luxury-section">
        <div class="container">
            <div class="section-header">
                <span class="section-label">{{ __('Collections') }}</span>
                <h2 class="section-title">{{ ui_section('collections')->field('title:'.app()->getLocale()) }}</h2>
                <div class="gold-divider"></div>
                <p class="section-subtitle">{{ ui_section('collections')->field('subtitle:'.app()->getLocale()) }}</p>
            </div>
            <div class="row g-4">
                @foreach($categories as $category)
                    <div class="col-md-4 col-lg-2 animate-fade-in-up stagger-{{ $category->id }}">
                        <a href="{{ LaravelLocalization::getLocalizedURL(url: '/shop') }}?category={{ $category->name }}" class="category-card d-block">
                            <div class="category-card-bg" style="background-image: url('{{ $category->getFirstMediaUrl() }}')"></div>
                            <div class="category-card-overlay"></div>
                            <div class="category-card-content">
                                <h3>{{ $category->name }}</h3>
                                <div class="category-card-arrow"><i class="bi bi-arrow-{{ Locales::getDir() == 'ltr' ? 'right' : 'left' }}"></i></div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ========== FEATURED PRODUCTS ========== -->
    <section class="luxury-section">
        <div class="container">
            <div class="section-header">
                <span class="section-label">{{ __('Featured') }}</span>
                <h2 class="section-title">{{ ui_section('featured')->field('title:'.app()->getLocale()) }}</h2>
                <div class="gold-divider"></div>
                <p class="section-subtitle">{{ ui_section('featured')->field('subtitle:'.app()->getLocale()) }}</p>
            </div>
            <div class="row g-4">
                @foreach($featuredProducts as $product)
                    <div class="col-sm-6 col-lg-3 animate-fade-in-up stagger-1">
                        @include('web.partials.product', ['product' => $product])
                    </div>
                @endforeach
            </div>
            <div class="text-center mt-5">
                <a href="{{ LaravelLocalization::getLocalizedURL(url: '/shop') }}" class="btn-outline-gold">
                    <span>{{ __('View All Products') }}</span>
                    <i class="bi bi-arrow-{{ Locales::getDir() == 'ltr' ? 'right' : 'left' }}"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- ========== LIMITED EDITION BANNER ========== -->
    <section class="luxury-section">
        <div class="container">
            <div class="featured-banner animate-fade-in-up">
                <div class="featured-banner-bg" style="background-image: url('{{ ui_section('limited_edition')->field('background')->getUrl() }}')"></div>
                <div class="featured-banner-content">
                    <span class="section-label">{{ __('Limited Edition') }}</span>
                    <h2 class="mb-3">{{ ui_section('limited_edition')->field('title:'.app()->getLocale()) }}</h2>
                    <p class="mb-4" style="color: var(--text-muted); font-weight: 300;">
                        {{ ui_section('limited_edition')->field('subtitle:'.app()->getLocale()) }}
                    </p>
                    <a href="{{ ui_section('limited_edition')->field('link') }}" class="btn-gold">
                        <span>{{ __('Shop Now') }}</span>
                        <i class="bi bi-arrow-{{ Locales::getDir() == 'ltr' ? 'right' : 'left' }}"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== BEST SELLERS ========== -->
    <section class="luxury-section">
        <div class="container">
            <div class="section-header">
                <span class="section-label">{{ __('most_loved') }}</span>
                <h2 class="section-title">{{ ui_section('most_loved')->field('title:'.app()->getLocale()) }}</h2>
                <div class="gold-divider"></div>
                <p class="section-subtitle">{{ ui_section('most_loved')->field('subtitle:'.app()->getLocale()) }}</p>
            </div>
            <div class="row g-4">
                @foreach($mostLovedProducts as $product)
                    <div class="col-sm-6 col-lg-3 animate-fade-in-up stagger-1">
                        @include('web.partials.product', ['product' => $product])
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ========== TESTIMONIALS ========== -->
    @php $testimonials = ui_section('testimonials'); @endphp
    @if($testimonials->isNotEmpty())
        <section class="luxury-section">
            <div class="container">
                <div class="section-header">
                    <span class="section-label">Testimonials</span>
                    <h2 class="section-title">What Our Clients Say</h2>
                    <div class="gold-divider"></div>
                </div>
                <div class="row g-4">
                    @foreach($testimonials as $item)
                        <div class="col-md-4 animate-fade-in-up">
                            <div class="testimonial-card">
                                <div class="testimonial-stars">
                                    @for($s = 1; $s <= 5; $s++)
                                        <i class="bi bi-star{{ $s <= (int)$item->field('stars') ? '-fill' : '' }} star"></i>
                                    @endfor
                                </div>
                                <p class="testimonial-text">"{{ $item->field('text:'.app()->getLocale()) }}"</p>
                                <div class="testimonial-author">
                                    @if($item->field('avatar')->getUrl())
                                        <img src="{{ $item->field('avatar')->getUrl() }}" alt="{{ $item->field('name') }}" class="testimonial-avatar">
                                    @else
                                        <div class="testimonial-avatar" style="background:var(--bg-tertiary);display:flex;align-items:center;justify-content:center;">
                                            <i class="bi bi-person" style="color:var(--text-muted);font-size:1.2rem;"></i>
                                        </div>
                                    @endif
                                    <div>
                                        <div class="testimonial-name">{{ $item->field('name') }}</div>
                                        <div class="testimonial-role">{{ $item->field('role:'.app()->getLocale()) }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <!-- ========== NEWSLETTER ========== -->
    @php $newsletter = ui_section('newsletter'); @endphp
    <section class="luxury-section newsletter-section">
        <div class="newsletter-bg"></div>
        <div class="container">
            <div class="newsletter-content animate-fade-in-up">
                <span class="section-label">{{ $newsletter->field('label:'.app()->getLocale()) }}</span>
                <h2 class="mb-3">{{ $newsletter->field('title:'.app()->getLocale()) }}</h2>
                <p style="color: var(--text-muted); margin-bottom: 2rem;">
                    {{ $newsletter->field('subtitle:'.app()->getLocale()) }}
                </p>
                <form class="newsletter-form" onsubmit="return false;">
                    <input type="email" class="newsletter-input" placeholder="{{ __('Email Address') }}">
                    <button type="submit" class="btn-gold btn-sm-gold">
                        <span>{{ $newsletter->field('button:'.app()->getLocale()) }}</span>
                    </button>
                </form>
            </div>
        </div>
    </section>

@endsection
