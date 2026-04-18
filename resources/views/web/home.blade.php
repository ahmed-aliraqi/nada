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
                            <div class="hero-stat-number">{{ count_formatted($customersCount)  }}+</div>
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
                        <a href="{{ LaravelLocalization::getLocalizedURL(url: '/shop') }}?category_id={{ $category->id }}" class="category-card d-block">
                            <div class="category-card-bg" style="background-image: url('{{ $category->getFirstMediaUrl() }}')"></div>
                            <div class="category-card-overlay"></div>
                            <div class="category-card-content">
                                <h3>{{ $category->name }}</h3>
                                <p>{{ $category->description }}</p>
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

    <!-- ========== FEATURED BANNER ========== -->
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
    <section class="luxury-section">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Testimonials</span>
                <h2 class="section-title">What Our Clients Say</h2>
                <div class="gold-divider"></div>
            </div>
            <div class="row g-4">
                <div class="col-md-4 animate-fade-in-up stagger-1">
                    <div class="testimonial-card">
                        <div class="testimonial-stars">
                            <i class="bi bi-star-fill star"></i>
                            <i class="bi bi-star-fill star"></i>
                            <i class="bi bi-star-fill star"></i>
                            <i class="bi bi-star-fill star"></i>
                            <i class="bi bi-star-fill star"></i>
                        </div>
                        <p class="testimonial-text">"The Rose Noir perfume is absolutely divine. It lasts all day and I receive compliments everywhere I go. Truly a luxury experience."</p>
                        <div class="testimonial-author">
                            <img src="https://picsum.photos/seed/avatar1/100/100.jpg" alt="Sophia M." class="testimonial-avatar">
                            <div>
                                <div class="testimonial-name">Sophia M.</div>
                                <div class="testimonial-role">Verified Buyer</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 animate-fade-in-up stagger-2">
                    <div class="testimonial-card">
                        <div class="testimonial-stars">
                            <i class="bi bi-star-fill star"></i>
                            <i class="bi bi-star-fill star"></i>
                            <i class="bi bi-star-fill star"></i>
                            <i class="bi bi-star-fill star"></i>
                            <i class="bi bi-star-fill star"></i>
                        </div>
                        <p class="testimonial-text">"I've tried many high-end brands, but Beauty Store's oriental collection is on another level. The packaging alone is a work of art."</p>
                        <div class="testimonial-author">
                            <img src="https://picsum.photos/seed/avatar2/100/100.jpg" alt="Layla K." class="testimonial-avatar">
                            <div>
                                <div class="testimonial-name">Layla K.</div>
                                <div class="testimonial-role">Verified Buyer</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 animate-fade-in-up stagger-3">
                    <div class="testimonial-card">
                        <div class="testimonial-stars">
                            <i class="bi bi-star-fill star"></i>
                            <i class="bi bi-star-fill star"></i>
                            <i class="bi bi-star-fill star"></i>
                            <i class="bi bi-star-fill star"></i>
                            <i class="bi bi-star-half star"></i>
                        </div>
                        <p class="testimonial-text">"The Silk Glow Foundation matches my skin perfectly. Lightweight yet full coverage. I'm officially obsessed with this brand."</p>
                        <div class="testimonial-author">
                            <img src="https://picsum.photos/seed/avatar3/100/100.jpg" alt="Emma R." class="testimonial-avatar">
                            <div>
                                <div class="testimonial-name">Emma R.</div>
                                <div class="testimonial-role">Verified Buyer</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== NEWSLETTER ========== -->
    <section class="luxury-section newsletter-section">
        <div class="newsletter-bg"></div>
        <div class="container">
            <div class="newsletter-content animate-fade-in-up">
                <span class="section-label">Stay Connected</span>
                <h2 class="mb-3">Join the Beauty Circle</h2>
                <p style="color: var(--text-muted); margin-bottom: 2rem;">
                    Be the first to know about new arrivals, exclusive offers, and beauty secrets.
                </p>
                <form class="newsletter-form" onsubmit="return false;">
                    <input type="email" class="newsletter-input" placeholder="Enter your email address">
                    <button type="submit" class="btn-gold btn-sm-gold">
                        <span>Subscribe</span>
                    </button>
                </form>
            </div>
        </div>
    </section>

@endsection
