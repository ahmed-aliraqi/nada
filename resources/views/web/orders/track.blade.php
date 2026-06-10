@extends('layouts.app', ['title' => __('Track Your Order')])

@section('content')

<div style="padding-top: 80px;">

    {{-- Page Header --}}
    <div style="background: linear-gradient(135deg, var(--bg-secondary) 0%, var(--bg-tertiary) 100%);
                border-bottom: 1px solid var(--border-color); padding: 3rem 0 2.5rem;">
        <div class="container">
            <nav aria-label="breadcrumb" style="margin-bottom: 1rem;">
                <ol class="breadcrumb" style="background:none;padding:0;margin:0;gap:0.5rem;">
                    <li class="breadcrumb-item">
                        <a href="{{ LaravelLocalization::getLocalizedURL(url: '/') }}"
                           style="color:var(--text-muted);text-decoration:none;font-size:0.85rem;">{{ __('Home') }}</a>
                    </li>
                    <li class="breadcrumb-item active" style="color:var(--accent-gold);font-size:0.85rem;">
                        {{ __('Track Your Order') }}
                    </li>
                </ol>
            </nav>
            <h1 style="font-family:var(--font-serif);font-size:clamp(1.8rem,4vw,2.5rem);
                        color:var(--text-primary);font-weight:600;margin:0;">
                {{ __('Track Your Order') }}
            </h1>
        </div>
    </div>

    <section class="luxury-section" style="padding-top: 3rem; padding-bottom: 5rem;">
        <div class="container">

            {{-- Search Form --}}
            <div class="row justify-content-center" style="margin-bottom: 3rem;">
                <div class="col-lg-6">
                    <div class="track-search-box">
                        <div style="display:flex;align-items:center;gap:12px;margin-bottom:1.5rem;">
                            <div class="track-search-icon">
                                <i class="bi bi-search"></i>
                            </div>
                            <div>
                                <h3 style="font-family:var(--font-serif);color:var(--text-primary);font-size:1.2rem;margin:0;">
                                    {{ __('Track Your Order') }}
                                </h3>
                                <p style="color:var(--text-muted);font-size:0.85rem;margin:0;">
                                    {{ __('Enter your phone number or email address') }}
                                </p>
                            </div>
                        </div>
                        <form method="GET" action="{{ route('orders.track') }}">
                            <div style="display:flex;gap:10px;flex-wrap:wrap;">
                                <input type="text" name="search"
                                       value="{{ $search ?? '' }}"
                                       placeholder="{{ __('Phone Number or Email Address') }}"
                                       required
                                       class="track-search-input">
                                <button type="submit" class="btn-gold" style="white-space:nowrap;">
                                    <i class="bi bi-search"></i>
                                    <span>{{ __('Search') }}</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            {{-- Results --}}
            @if($orders !== null)

                @if($orders->isEmpty())
                    <div class="row justify-content-center">
                        <div class="col-lg-6 text-center" style="padding: 2rem 0;">
                            <i class="bi bi-inbox" style="font-size:3.5rem;color:var(--text-muted);display:block;margin-bottom:1rem;"></i>
                            <p style="color:var(--text-muted);font-size:1rem;">
                                {{ __('No orders found for this contact information.') }}
                            </p>
                        </div>
                    </div>
                @else

                    @foreach($orders as $order)
                        @php
                            $statusColors = [
                                'pending'    => ['bg' => 'rgba(255,193,7,0.12)',  'color' => '#FFC107', 'icon' => 'bi-hourglass-split'],
                                'confirmed'  => ['bg' => 'rgba(23,162,184,0.12)', 'color' => '#17A2B8', 'icon' => 'bi-check-circle'],
                                'processing' => ['bg' => 'rgba(224,176,128,0.12)','color' => '#E0B080', 'icon' => 'bi-gear'],
                                'shipped'    => ['bg' => 'rgba(160,136,184,0.12)','color' => '#B08FCC', 'icon' => 'bi-truck'],
                                'delivered'  => ['bg' => 'rgba(40,167,69,0.12)',  'color' => '#28A745', 'icon' => 'bi-bag-check'],
                                'cancelled'  => ['bg' => 'rgba(220,53,69,0.12)',  'color' => '#DC3545', 'icon' => 'bi-x-circle'],
                            ];
                            $sc = $statusColors[$order->latestStatus?->status ?? 'pending'] ?? $statusColors['pending'];
                        @endphp

                        <div class="track-order-card">

                            {{-- Order Header --}}
                            <div class="track-order-header">
                                <div style="display:flex;align-items:center;gap:1rem;flex-wrap:wrap;">
                                    <div>
                                        <div style="color:var(--accent-gold);font-family:var(--font-serif);font-size:1.1rem;font-weight:600;">
                                            {{ __('Order') }} #{{ $order->id }}
                                        </div>
                                        <div style="color:var(--text-muted);font-size:0.82rem;margin-top:2px;">
                                            <i class="bi bi-calendar3" style="margin-{{ app()->isLocale('ar') ? 'left' : 'right' }}:4px;"></i>
                                            {{ $order->created_at->format('d M Y — H:i') }}
                                        </div>
                                    </div>
                                </div>

                                @if($order->latestStatus)
                                    <div class="track-status-badge"
                                         style="background:{{ $sc['bg'] }};color:{{ $sc['color'] }};border-color:{{ $sc['color'] }}33;">
                                        <i class="bi {{ $sc['icon'] }}"></i>
                                        {{ __('orders.statuses.' . $order->latestStatus->status) }}
                                    </div>
                                @endif
                            </div>

                            {{-- Two columns: Products | Summary --}}
                            <div class="track-order-body">

                                {{-- Products --}}
                                <div class="track-products-col">
                                    <div class="track-section-label">
                                        <i class="bi bi-box-seam"></i>
                                        {{ __('Product') }} ({{ $order->products->count() }})
                                    </div>

                                    @foreach($order->products as $item)
                                        @php $img = $item->product?->getFirstMediaUrl(); @endphp
                                        <div class="track-product-row">
                                            <div class="track-product-img">
                                                @if($img)
                                                    <img src="{{ $img }}" alt="{{ $item->name }}">
                                                @else
                                                    <div class="track-product-img-placeholder">
                                                        <i class="bi bi-image"></i>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="track-product-info">
                                                <div class="track-product-name">{{ $item->name }}</div>
                                                <div class="track-product-meta">
                                                    <span>{{ config('app.currency') }} {{ number_format($item->price, 2) }}</span>
                                                    <span class="track-product-qty">× {{ $item->quantity }}</span>
                                                </div>
                                            </div>
                                            <div class="track-product-total">
                                                {{ config('app.currency') }} {{ number_format($item->total, 2) }}
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                {{-- Summary --}}
                                <div class="track-summary-col">
                                    <div class="track-section-label">
                                        <i class="bi bi-receipt"></i>
                                        {{ __('Order Summary') }}
                                    </div>

                                    <div class="track-summary-rows">
                                        <div class="track-summary-row">
                                            <span>{{ __('Subtotal') }}</span>
                                            <span>{{ config('app.currency') }} {{ number_format($order->subtotal, 2) }}</span>
                                        </div>
                                        @if($order->discount > 0)
                                            <div class="track-summary-row">
                                                <span>{{ __('Discount') }}</span>
                                                <span style="color:#28A745;">− {{ config('app.currency') }} {{ number_format($order->discount, 2) }}</span>
                                            </div>
                                        @endif
                                        <div class="track-summary-row">
                                            <span>{{ __('Shipping') }}</span>
                                            <span>{{ config('app.currency') }} {{ number_format($order->shipping_price, 2) }}</span>
                                        </div>
                                        <div class="track-summary-row track-summary-total">
                                            <span>{{ __('Total') }}</span>
                                            <span>{{ $order->total_with_currency }}</span>
                                        </div>
                                    </div>

                                    <div class="track-payment-method">
                                        <i class="bi bi-cash-coin"></i>
                                        {{ __('Cash on Delivery') }}
                                    </div>
                                </div>

                            </div>

                        </div>
                    @endforeach

                @endif

            @endif

        </div>
    </section>

</div>

@push('styles')
<style>
.track-search-box {
    background: var(--bg-secondary);
    border: 1px solid var(--border-color);
    border-radius: var(--radius-lg);
    padding: 2rem;
    box-shadow: var(--shadow-card);
}

.track-search-icon {
    width: 42px; height: 42px;
    border-radius: 50%;
    background: linear-gradient(135deg, var(--accent-gold), var(--accent-gold-dark));
    display: flex; align-items: center; justify-content: center;
    flex-shrink: 0;
    color: var(--bg-primary);
    font-size: 1rem;
}

.track-search-input {
    flex: 1;
    min-width: 180px;
    background: var(--bg-tertiary);
    border: 1px solid var(--border-gold);
    border-radius: var(--radius-sm);
    color: var(--text-primary);
    padding: 0.75rem 1rem;
    font-family: var(--font-sans);
    font-size: 0.95rem;
    outline: none;
    transition: var(--transition);
}
.track-search-input:focus {
    border-color: var(--accent-gold);
}

.track-order-card {
    background: var(--bg-secondary);
    border: 1px solid var(--border-color);
    border-radius: var(--radius-lg);
    overflow: hidden;
    margin-bottom: 2rem;
    box-shadow: var(--shadow-card);
}

.track-order-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 1rem;
    padding: 1.25rem 1.75rem;
    background: var(--bg-tertiary);
    border-bottom: 1px solid var(--border-color);
}

.track-status-badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 6px 16px;
    border-radius: 20px;
    border: 1px solid;
    font-size: 0.85rem;
    font-weight: 500;
}

.track-order-body {
    display: grid;
    grid-template-columns: 1fr 300px;
    gap: 0;
}

.track-products-col {
    padding: 1.5rem 1.75rem;
    border-{{ app()->isLocale('ar') ? 'left' : 'right' }}: 1px solid var(--border-color);
}

.track-summary-col {
    padding: 1.5rem 1.75rem;
    background: rgba(0,0,0,0.08);
}

.track-section-label {
    display: flex;
    align-items: center;
    gap: 7px;
    color: var(--text-muted);
    font-size: 0.78rem;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    font-weight: 600;
    margin-bottom: 1rem;
}

.track-product-row {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 0.75rem 0;
    border-bottom: 1px solid var(--border-color);
}
.track-product-row:last-child { border-bottom: none; }

.track-product-img {
    width: 56px; height: 56px;
    border-radius: var(--radius-sm);
    overflow: hidden;
    flex-shrink: 0;
    border: 1px solid var(--border-color);
}
.track-product-img img {
    width: 100%; height: 100%;
    object-fit: cover;
}
.track-product-img-placeholder {
    width: 100%; height: 100%;
    background: var(--bg-tertiary);
    display: flex; align-items: center; justify-content: center;
    color: var(--text-muted);
    font-size: 1.2rem;
}

.track-product-info { flex: 1; min-width: 0; }

.track-product-name {
    color: var(--text-primary);
    font-size: 0.9rem;
    font-weight: 500;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.track-product-meta {
    color: var(--text-muted);
    font-size: 0.82rem;
    margin-top: 3px;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.track-product-qty {
    background: var(--bg-tertiary);
    padding: 1px 7px;
    border-radius: 4px;
    font-size: 0.78rem;
}

.track-product-total {
    color: var(--accent-gold);
    font-weight: 600;
    font-size: 0.9rem;
    white-space: nowrap;
}

.track-summary-rows { margin-bottom: 1.25rem; }

.track-summary-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0.5rem 0;
    font-size: 0.88rem;
    color: var(--text-secondary);
    border-bottom: 1px solid var(--border-color);
}
.track-summary-row:last-child { border-bottom: none; }

.track-summary-total {
    color: var(--text-primary);
    font-weight: 600;
    font-size: 1rem;
    padding-top: 0.75rem;
}
.track-summary-total span:last-child { color: var(--accent-gold); }

.track-payment-method {
    display: flex;
    align-items: center;
    gap: 8px;
    color: var(--text-muted);
    font-size: 0.82rem;
    padding-top: 1rem;
    border-top: 1px solid var(--border-color);
}
.track-payment-method i { color: var(--accent-gold); }

@media (max-width: 767.98px) {
    .track-order-body {
        grid-template-columns: 1fr;
    }
    .track-products-col {
        border-right: none;
        border-left: none;
        border-bottom: 1px solid var(--border-color);
        padding: 1.25rem;
    }
    .track-summary-col { padding: 1.25rem; }
    .track-order-header { padding: 1rem 1.25rem; }
}
</style>
@endpush

@endsection
