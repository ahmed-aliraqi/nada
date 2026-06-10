@extends('layouts.app', ['title' => __('About')])

@section('content')

    <!-- ========== PAGE HEADER ========== -->
    <section class="page-header">
        <div class="page-header-bg"></div>
        <div class="page-header-overlay"></div>
        <div class="page-header-content">
            <span class="section-label">{{ ui_section('about_hero')->field('label:'.app()->getLocale()) }}</span>
            <h1>{{ ui_section('about_hero')->field('title:'.app()->getLocale()) }}</h1>
            <div class="breadcrumb-luxury">
                <a href="{{ LaravelLocalization::getLocalizedURL(url: '/') }}">{{ __('Home') }}</a>
                <span class="separator"><i class="bi bi-chevron-{{ app()->isLocale('ar') ? 'left' : 'right' }}"></i></span>
                <span class="current">{{ __('About') }}</span>
            </div>
        </div>
    </section>

    <!-- ========== OUR STORY ========== -->
    @php $story = ui_section('about_story'); @endphp
    <section class="luxury-section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="about-image-group">
                        <div class="about-image-main">
                            <img src="{{ $story->field('image_main')->getUrl() ?: 'https://picsum.photos/seed/aboutmain/800/1000.jpg' }}"
                                 alt="{{ $story->field('title:'.app()->getLocale()) }}">
                        </div>
                        <div class="about-image-secondary">
                            <img src="{{ $story->field('image_secondary')->getUrl() ?: 'https://picsum.photos/seed/aboutsec/600/500.jpg' }}"
                                 alt="{{ app_name() }}">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <span class="section-label">{{ $story->field('label:'.app()->getLocale()) }}</span>
                    <h2 class="mb-3">{!! nl2br(e($story->field('title:'.app()->getLocale()))) !!}</h2>
                    <div class="gold-divider-left"></div>
                    <p class="mb-3">{{ $story->field('paragraph_1:'.app()->getLocale()) }}</p>
                    <p class="mb-3">{{ $story->field('paragraph_2:'.app()->getLocale()) }}</p>
                    <p class="mb-4">{{ $story->field('paragraph_3:'.app()->getLocale()) }}</p>
                    <div class="row g-4">
                        @foreach([1,2,3,4] as $i)
                            @if($story->field("stat_{$i}_number"))
                                <div class="col-6">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="value-icon" style="width:48px;height:48px;font-size:1rem;">
                                            <i class="bi {{ $story->field("stat_{$i}_icon") }}"></i>
                                        </div>
                                        <div>
                                            <div style="font-family:var(--font-serif);font-size:1.5rem;font-weight:700;color:var(--accent-gold);">
                                                {{ $story->field("stat_{$i}_number") }}
                                            </div>
                                            <div style="font-size:0.78rem;color:var(--text-muted);letter-spacing:0.05em;">
                                                {{ $story->field("stat_{$i}_label:".app()->getLocale()) }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== OUR VALUES ========== -->
    @php $values = ui_section('about_values'); @endphp
    @php $valueItems = ui_section('about_value_items'); @endphp
    <section class="luxury-section">
        <div class="container">
            <div class="section-header">
                <span class="section-label">{{ $values->field('label:'.app()->getLocale()) }}</span>
                <h2 class="section-title">{{ $values->field('title:'.app()->getLocale()) }}</h2>
                <div class="gold-divider"></div>
                <p class="section-subtitle">{{ $values->field('subtitle:'.app()->getLocale()) }}</p>
            </div>
            <div class="row g-4">
                @foreach($valueItems as $item)
                    <div class="col-md-6 col-lg-3">
                        <div class="value-card">
                            <div class="value-icon">
                                <i class="bi {{ $item->field('icon') }}"></i>
                            </div>
                            <h4>{{ $item->field('title:'.app()->getLocale()) }}</h4>
                            <p>{{ $item->field('description:'.app()->getLocale()) }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ========== EXPERIENCE BANNER ========== -->
    @php $exp = ui_section('about_experience'); @endphp
    <section class="luxury-section">
        <div class="container">
            <div class="featured-banner animate-fade-in-up" style="min-height: 350px;">
                <div class="featured-banner-bg"
                     style="background-image: url('{{ $exp->field('background')->getUrl() ?: 'https://picsum.photos/seed/experiencebanner/800/600.jpg' }}');"></div>
                <div class="featured-banner-content">
                    <span class="section-label">{{ $exp->field('label:'.app()->getLocale()) }}</span>
                    <h2 class="mb-3">{{ $exp->field('title:'.app()->getLocale()) }}</h2>
                    <p class="mb-4" style="color: var(--text-muted); font-weight: 300;">
                        {{ $exp->field('description:'.app()->getLocale()) }}
                    </p>
                    <a href="{{ LaravelLocalization::getLocalizedURL(url: '/contact') }}" class="btn-gold">
                        <span>{{ $exp->field('cta:'.app()->getLocale()) }}</span>
                        <i class="bi bi-arrow-{{ Locales::getDir() == 'ltr' ? 'right' : 'left' }}"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== JOURNEY TIMELINE ========== -->
    @php $journey = ui_section('about_journey'); @endphp
    @php $journeyItems = ui_section('about_journey_items'); @endphp
    <section class="luxury-section">
        <div class="container">
            <div class="section-header">
                <span class="section-label">{{ $journey->field('label:'.app()->getLocale()) }}</span>
                <h2 class="section-title">{{ $journey->field('title:'.app()->getLocale()) }}</h2>
                <div class="gold-divider"></div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div style="position:relative;padding-{{ app()->isLocale('ar') ? 'right' : 'left' }}:40px;">
                        <div style="position:absolute;{{ app()->isLocale('ar') ? 'right' : 'left' }}:14px;top:0;bottom:0;width:1px;background:linear-gradient(180deg,var(--accent-gold),var(--border-gold),transparent);"></div>
                        @foreach($journeyItems as $index => $item)
                            <div style="position:relative;margin-bottom:{{ $loop->last ? '0' : '3rem' }};" class="animate-fade-in-up stagger-{{ $index + 1 }}">
                                <div style="position:absolute;{{ app()->isLocale('ar') ? 'right' : 'left' }}:-33px;top:4px;width:12px;height:12px;border-radius:50%;background:var(--accent-gold);box-shadow:0 0 15px rgba(224,176,128,0.4);"></div>
                                <div style="font-size:0.72rem;letter-spacing:0.2em;text-transform:uppercase;color:var(--accent-gold);margin-bottom:6px;">
                                    {{ $item->field('year') }}
                                </div>
                                <h4 style="margin-bottom:6px;">{{ $item->field('title:'.app()->getLocale()) }}</h4>
                                <p style="color:var(--text-muted);font-size:0.9rem;max-width:500px;">
                                    {{ $item->field('description:'.app()->getLocale()) }}
                                </p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== TESTIMONIALS ========== -->
    @php $testimonials = ui_section('testimonials'); @endphp
    @if($testimonials->isNotEmpty())
        <section class="luxury-section">
            <div class="container">
                <div class="section-header">
                    <span class="section-label">Love Letters</span>
                    <h2 class="section-title">Words From Our Clients</h2>
                    <div class="gold-divider"></div>
                </div>
                <div class="row g-4">
                    @foreach($testimonials as $item)
                        <div class="col-md-4">
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

    <!-- ========== CTA ========== -->
    @php $cta = ui_section('about_cta'); @endphp
    <section class="luxury-section newsletter-section">
        <div class="newsletter-bg"></div>
        <div class="container">
            <div class="newsletter-content animate-fade-in-up">
                <span class="section-label">{{ $cta->field('label:'.app()->getLocale()) }}</span>
                <h2 class="mb-3">{{ $cta->field('title:'.app()->getLocale()) }}</h2>
                <p style="color: var(--text-muted); margin-bottom: 2rem;">
                    {{ $cta->field('subtitle:'.app()->getLocale()) }}
                </p>
                <div class="d-flex gap-3 justify-content-center flex-wrap">
                    <a href="{{ LaravelLocalization::getLocalizedURL(url: '/shop') }}" class="btn-gold">
                        <span>{{ __('Shop Now') }}</span>
                        <i class="bi bi-arrow-{{ Locales::getDir() == 'ltr' ? 'right' : 'left' }}"></i>
                    </a>
                    <a href="{{ LaravelLocalization::getLocalizedURL(url: '/contact') }}" class="btn-outline-gold">
                        <span>{{ __('Contact Us') }}</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
