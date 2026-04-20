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
</head>
{!! ui_section('chat_bot')?->field('code') !!}
<body>
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
            <a href="{{ LaravelLocalization::getLocalizedURL(url: '/cart') }}" class="nav-icon-btn">
                <i class="bi bi-bag"></i>
                <span class="badge-dot"></span>
            </a>
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
            </ul>
            <div class="d-flex align-items-center gap-3 d-none d-lg-flex">
                <div class="lang-switcher">
                    <a rel="alternate"  hreflang="en" href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}">
                        <span class="{{ app()->getLocale() == 'en' ? 'active-lang' : '' }}">EN</span>
                    </a>

                    <span class="divider">|</span>
                    <a rel="alternate"  hreflang="ar" href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}">
                        <span class="{{ app()->getLocale() == 'ar' ? 'active-lang' : '' }}">AR</span>
                    </a>
                </div>
                <a href="{{ LaravelLocalization::getLocalizedURL(url: '/cart') }}" class="nav-icon-btn">
                    <i class="bi bi-bag"></i>
                    <span class="badge-dot"></span>
                </a>
            </div>
        </div>
    </div>
</nav>
@yield('content')
<!-- ========== FOOTER ========== -->
<footer class="footer-luxury">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="footer-brand">{{ app_name() }}</div>
                <p class="footer-desc">
                    A sanctuary of luxury beauty and fragrances. We curate the finest products from around the world for the discerning individual.
                </p>
                <div class="footer-social mt-3">
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-twitter-x"></i></a>
                    <a href="#"><i class="bi bi-pinterest"></i></a>
                </div>
            </div>
            <div class="col-6 col-lg-2">
                <h6 class="footer-heading">Shop</h6>
                <ul class="footer-links">
                    <li><a href="{{ LaravelLocalization::getLocalizedURL(url: '/shop') }}">Perfumes</a></li>
                    <li><a href="{{ LaravelLocalization::getLocalizedURL(url: '/shop') }}">Makeup</a></li>
                    <li><a href="{{ LaravelLocalization::getLocalizedURL(url: '/shop') }}">Body Care</a></li>
                    <li><a href="{{ LaravelLocalization::getLocalizedURL(url: '/shop') }}">Gift Sets</a></li>
                    <li><a href="{{ LaravelLocalization::getLocalizedURL(url: '/shop') }}">New Arrivals</a></li>
                </ul>
            </div>
            <div class="col-6 col-lg-2">
                <h6 class="footer-heading">Company</h6>
                <ul class="footer-links">
                    <li><a href="{{ LaravelLocalization::getLocalizedURL(url: '/about') }}">About Us</a></li>
                    <li><a href="{{ LaravelLocalization::getLocalizedURL(url: '/contact') }}">Contact</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Press</a></li>
                </ul>
            </div>
            <div class="col-6 col-lg-2">
                <h6 class="footer-heading">Support</h6>
                <ul class="footer-links">
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Shipping</a></li>
                    <li><a href="#">Returns</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="col-6 col-lg-2">
                <h6 class="footer-heading">Contact</h6>
                <ul class="footer-links">
                    <li><a href="mailto:hello@beautystore.com">hello@beautystore.com</a></li>
                    <li><a href="tel:+1234567890">+1 (234) 567-890</a></li>
                    <li><a href="#">Dubai, UAE</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <p>&copy; 2025 Beauty Store. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p>Crafted with <span class="text-gold">&hearts;</span> for beauty lovers</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="/v3/js/main.js"></script>
</body>
</html>
