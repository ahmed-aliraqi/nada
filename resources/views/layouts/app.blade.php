<!DOCTYPE html>
<html lang="{{ Locales::getCode() }}" dir="{{ Locales::getDir() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ? $title .' | '. app_name() : app_name() }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,700&family=Inter:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="/v3/css/style-{{ Locales::getDir() }}.css" rel="stylesheet">
    @stack('styles')
</head>
{!! ui_section('chat_bot')?->field('code') !!}
<body>
<div id="app">
    <!-- Loading Screen -->
    <div id="loading-screen">
        <div class="loader-content">
            <div class="loader-spinner"></div>
            <span class="brand-name">{{ app_name() }}</span>
        </div>
    </div>

    <!-- ========== NAVBAR ========== -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-luxury">
        <div class="container">
            <a class="navbar-brand navbar-brand-luxury d-flex gap-2" href="{{ LaravelLocalization::getLocalizedURL(url: '/') }}">
                <img src="/html/images/icon-h36.png" alt="">
                <span>{{ app_name() }}</span>
            </a>

            <div class="d-flex align-items-center gap-3 d-lg-none order-lg-last">
                <div class="lang-switcher">
                    <a rel="alternate"  hreflang="en" href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}">
                        <span class="{{ app()->getLocale() == 'en' ? 'active-lang' : '' }}">EN</span>
                    </a>

                    <span class="divider">|</span>
                    <a rel="alternate"  hreflang="ar" href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}">
                        <span class="{{ app()->getLocale() == 'ar' ? 'active-lang' : '' }}">AR</span>
                    </a>
                </div>
                <v-cart-icon></v-cart-icon>
                <button class="navbar-toggler-luxury" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                    <span></span><span></span><span></span>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link nav-link-luxury{{ in_array(request()->path(), ['ar', 'en']) ? ' active' : '' }}"
                           href="{{ LaravelLocalization::getLocalizedURL(url: '/') }}">
                            {{ __('Home') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-luxury{{ request()->segment(2) === 'shop' ? ' active' : '' }}"
                           href="{{ LaravelLocalization::getLocalizedURL(url: '/shop') }}">
                            {{ __('Shop') }}
                        </a
                        ></li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-luxury{{ request()->segment(2) === 'about' ? ' active' : '' }}"
                           href="{{ LaravelLocalization::getLocalizedURL(url: '/about') }}">
                            {{ __('About') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-luxury{{ request()->segment(2) === 'contact' ? ' active' : '' }}"
                           href="{{ LaravelLocalization::getLocalizedURL(url: '/contact') }}">
                            {{ __('Contact') }}
                        </a>
                    </li>
                    <li class="nav-item d-lg-none">
                        <a class="nav-link nav-link-luxury{{ request()->segment(2) === 'track-order' ? ' active' : '' }}"
                           href="{{ LaravelLocalization::getLocalizedURL(url: '/track-order') }}">
                            <i class="bi bi-box-seam me-1"></i>{{ __('Track Order') }}
                        </a>
                    </li>
                </ul>
                <div class="d-flex align-items-center gap-3 d-none d-lg-flex">
                    <a href="{{ LaravelLocalization::getLocalizedURL(url: '/track-order') }}"
                       class="track-order-btn{{ request()->segment(2) === 'track-order' ? ' active' : '' }}">
                        <i class="bi bi-box-seam"></i>
                        <span>{{ __('Track Order') }}</span>
                    </a>
                    <div class="lang-switcher">
                        <a rel="alternate"  hreflang="en" href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}">
                            <span class="{{ app()->getLocale() == 'en' ? 'active-lang' : '' }}">EN</span>
                        </a>

                        <span class="divider">|</span>
                        <a rel="alternate"  hreflang="ar" href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}">
                            <span class="{{ app()->getLocale() == 'ar' ? 'active-lang' : '' }}">AR</span>
                        </a>
                    </div>
                    <v-cart-icon></v-cart-icon>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
    <!-- ========== FOOTER ========== -->
    @php $footer = ui_section('footer'); @endphp
    <footer class="footer-luxury">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="footer-brand">{{ app_name() }}</div>
                    <p class="footer-desc">
                        {{ $footer->field('description:'.app()->getLocale()) }}
                    </p>
                    <div class="footer-social mt-3">
                        @if($footer->field('instagram'))
                            <a href="{{ $footer->field('instagram') }}"><i class="bi bi-instagram"></i></a>
                        @endif
                        @if($footer->field('facebook'))
                            <a href="{{ $footer->field('facebook') }}"><i class="bi bi-facebook"></i></a>
                        @endif
                        @if($footer->field('twitter'))
                            <a href="{{ $footer->field('twitter') }}"><i class="bi bi-twitter-x"></i></a>
                        @endif
                        @if($footer->field('pinterest'))
                            <a href="{{ $footer->field('pinterest') }}"><i class="bi bi-pinterest"></i></a>
                        @endif
                    </div>
                </div>
                <div class="col-6 col-lg-2">
                    <h6 class="footer-heading">{{ __('Shop') }}</h6>
                    <ul class="footer-links">
                        @foreach($footerCategories as $category)
                            <li>
                                <a href="{{ LaravelLocalization::getLocalizedURL(url: '/shop') }}?category={{ urlencode($category->name) }}">
                                    {{ $category->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-6 col-lg-2">
                    <h6 class="footer-heading">{{ __('Company') }}</h6>
                    <ul class="footer-links">
                        <li><a href="{{ LaravelLocalization::getLocalizedURL(url: '/about') }}">{{ __('About Us') }}</a></li>
                        <li><a href="{{ LaravelLocalization::getLocalizedURL(url: '/contact') }}">{{ __('Contact') }}</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2">
                    <h6 class="footer-heading">{{ __('Support') }}</h6>
                    <ul class="footer-links">
                        <li><a href="{{ LaravelLocalization::getLocalizedURL(url: '/track-order') }}">{{ __('Track Your Order') }}</a></li>
                        <li><a href="{{ LaravelLocalization::getLocalizedURL(url: '/contact') }}">{{ __('FAQ') }}</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2">
                    <h6 class="footer-heading">{{ __('Contact') }}</h6>
                    <ul class="footer-links">
                        @if($footer->field('email'))
                            <li><a href="mailto:{{ $footer->field('email') }}">{{ $footer->field('email') }}</a></li>
                        @endif
                        @if($footer->field('phone'))
                            <li><a href="tel:{{ $footer->field('phone') }}">{{ $footer->field('phone') }}</a></li>
                        @endif
                        @if($footer->field('address:'.app()->getLocale()))
                            <li><span style="color:var(--text-muted);">{{ $footer->field('address:'.app()->getLocale()) }}</span></li>
                        @endif
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="row align-items-center">
                    <div class="col-md-6 text-center text-md-{{ app()->isLocale('ar') ? 'end' : 'start' }}">
                        <p>{{ $footer->field('copyright:'.app()->getLocale()) }}</p>
                    </div>
                    <div class="col-md-6 text-center text-md-{{ app()->isLocale('ar') ? 'start' : 'end' }}">
                        <p>{{ __('Crafted with') }} <span class="text-gold">&hearts;</span> {{ __('for beauty lovers') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="/v3/js/main.js"></script>
<script src="{{ mix('/js/app.js') }}"></script>
@stack('scripts')
</body>
</html>
