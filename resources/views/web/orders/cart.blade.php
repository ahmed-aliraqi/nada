@extends('layouts.app', ['title' => __('Cart')])

@section('content')

    <!-- PAGE HERO -->
    <section class="page-header">
        <div class="page-header-bg"></div>
        <div class="page-header-overlay"></div>
        <div class="page-header-content">
            <span class="section-label">{{ __('Shopping Cart') }}</span>
            <h2>{{ __('Shopping Cart') }}</h2>
            <div class="breadcrumb-luxury">
                <a href="{{ LaravelLocalization::getLocalizedURL(url: '/') }}">{{ __('Home') }}</a>
                <span class="separator"><i
                        class="bi bi-chevron-{{ Locales::getDir() == 'ltr' ? 'right' : 'left' }}"></i></span>
                <span class="current">{{ __('Shopping Cart') }}</span>
            </div>
        </div>
    </section>

    <!-- CART CONTENT -->
    <v-cart></v-cart>
@endsection
