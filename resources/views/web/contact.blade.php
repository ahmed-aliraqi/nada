@extends('layouts.app', ['title' => __('Contact')])

@section('content')

    <!-- ========== PAGE HEADER ========== -->
    <section class="page-header">
        <div class="page-header-bg"></div>
        <div class="page-header-overlay"></div>
        <div class="page-header-content">
            <span class="section-label">{{ ui_section('contact_hero')->field('label:'.app()->getLocale()) }}</span>
            <h1>{{ ui_section('contact_hero')->field('title:'.app()->getLocale()) }}</h1>
            <div class="breadcrumb-luxury">
                <a href="{{ LaravelLocalization::getLocalizedURL(url: '/') }}">{{ __('Home') }}</a>
                <span class="separator"><i class="bi bi-chevron-{{ app()->isLocale('ar') ? 'left' : 'right' }}"></i></span>
                <span class="current">{{ __('Contact') }}</span>
            </div>
        </div>
    </section>

    <!-- ========== CONTACT INFO CARDS ========== -->
    @php $infoItems = ui_section('contact_info_items'); @endphp
    <section class="luxury-section" style="padding-bottom: 0;">
        <div class="container">
            <div class="row g-4">
                @foreach($infoItems as $index => $item)
                    <div class="col-md-6 col-lg-3 animate-fade-in-up stagger-{{ $index + 1 }}">
                        <div class="contact-info-card">
                            <div class="contact-info-icon">
                                <i class="bi {{ $item->field('icon') }}"></i>
                            </div>
                            <div>
                                <div class="contact-info-label">{{ $item->field('label:'.app()->getLocale()) }}</div>
                                <div class="contact-info-value">
                                    {!! nl2br(e($item->field('value:'.app()->getLocale()))) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ========== CONTACT FORM + MAP ========== -->
    @php $form = ui_section('contact_form'); @endphp
    @php $map = ui_section('contact_map'); @endphp
    <section class="luxury-section">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <span class="section-label">{{ $form->field('label:'.app()->getLocale()) }}</span>
                    <h2 class="mb-2">{!! nl2br(e($form->field('title:'.app()->getLocale()))) !!}</h2>
                    <div class="gold-divider-left" style="margin-bottom: 2rem;"></div>
                    <p style="color: var(--text-muted); margin-bottom: 2rem; font-size: 0.92rem;">
                        {{ $form->field('description:'.app()->getLocale()) }}
                    </p>
                    <form onsubmit="return false;">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">{{ __('First Name') }}</label>
                                    <input type="text" class="form-control-luxury" placeholder="{{ __('Your first name') }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">{{ __('Last Name') }}</label>
                                    <input type="text" class="form-control-luxury" placeholder="{{ __('Your last name') }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">{{ __('Email Address') }}</label>
                                    <input type="email" class="form-control-luxury" placeholder="your@email.com">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">{{ __('Phone Number') }}</label>
                                    <input type="tel" class="form-control-luxury" placeholder="+966 5X XXX XXXX">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">{{ __('Subject') }}</label>
                            <select class="form-control-luxury" style="cursor:pointer;">
                                <option value="" disabled selected style="color:var(--text-muted);">{{ __('Select a topic') }}</option>
                                <option>{{ __('Product Inquiry') }}</option>
                                <option>{{ __('Order Support') }}</option>
                                <option>{{ __('Fragrance Consultation') }}</option>
                                <option>{{ __('Wholesale / Partnership') }}</option>
                                <option>{{ __('Other') }}</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">{{ __('Your Message') }}</label>
                            <textarea class="form-control-luxury" rows="5" placeholder="{{ __('Tell us how we can help you...') }}"></textarea>
                        </div>
                        <button type="submit" class="btn-gold">
                            <span>{{ __('Send Message') }}</span>
                            <i class="bi bi-send{{ app()->isLocale('ar') ? '-fill' : '' }}"></i>
                        </button>
                    </form>
                </div>

                <div class="col-lg-6">
                    <div style="position: sticky; top: 100px;">
                        <div style="border-radius: var(--radius-lg); overflow: hidden; border: 1px solid var(--border-color); height: 400px; background: var(--bg-secondary); margin-bottom: 1.5rem;">
                            <div style="width:100%;height:100%;background-image:url('https://picsum.photos/seed/dubaimap/800/600.jpg');background-size:cover;background-position:center;filter:brightness(0.5) saturate(0.6);position:relative;">
                                <div style="position:absolute;inset:0;background:linear-gradient(180deg, rgba(44,31,37,0.3), rgba(44,31,37,0.7));display:flex;flex-direction:column;align-items:center;justify-content:center;">
                                    <div style="width:60px;height:60px;border-radius:50%;background:rgba(224,176,128,0.15);border:2px solid var(--accent-gold);display:flex;align-items:center;justify-content:center;margin-bottom:1rem;" class="gold-glow">
                                        <i class="bi bi-geo-alt-fill" style="font-size:1.4rem;color:var(--accent-gold);"></i>
                                    </div>
                                    <div style="font-family:var(--font-serif);font-size:1.3rem;font-weight:700;color:var(--text-primary);margin-bottom:4px;">
                                        {{ $map->field('title') }}
                                    </div>
                                    <div style="font-size:0.85rem;color:var(--text-muted);text-align:center;">
                                        {!! nl2br(e($map->field('address:'.app()->getLocale()))) !!}
                                    </div>
                                    <a href="{{ $map->field('maps_url') ?: '#' }}" style="margin-top:1.2rem;padding:10px 28px;background:rgba(224,176,128,0.12);border:1px solid var(--border-gold);border-radius:var(--radius-xl);color:var(--accent-gold);font-size:0.78rem;font-weight:500;letter-spacing:0.1em;text-transform:uppercase;display:inline-flex;align-items:center;gap:8px;transition:var(--transition);">
                                        <i class="bi bi-google"></i>
                                        <span>{{ __('Open in Google Maps') }}</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-6">
                                <div style="background:var(--bg-secondary);border:1px solid var(--border-color);border-radius:var(--radius-md);padding:1.5rem;text-align:center;transition:var(--transition);height:100%;">
                                    <i class="bi bi-whatsapp" style="font-size:1.5rem;color:#25D366;margin-bottom:0.8rem;display:block;"></i>
                                    <div style="font-size:0.8rem;font-weight:600;color:var(--text-primary);margin-bottom:4px;">WhatsApp</div>
                                    <div style="font-size:0.78rem;color:var(--text-muted);">{{ $map->field('whatsapp') }}</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div style="background:var(--bg-secondary);border:1px solid var(--border-color);border-radius:var(--radius-md);padding:1.5rem;text-align:center;transition:var(--transition);height:100%;">
                                    <i class="bi bi-instagram" style="font-size:1.5rem;color:var(--accent-gold);margin-bottom:0.8rem;display:block;"></i>
                                    <div style="font-size:0.8rem;font-weight:600;color:var(--text-primary);margin-bottom:4px;">Instagram</div>
                                    <div style="font-size:0.78rem;color:var(--text-muted);">{{ $map->field('instagram') }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== FAQ ========== -->
    @php $faq = ui_section('contact_faq'); @endphp
    @php $faqItems = ui_section('contact_faq_items'); @endphp
    <section class="luxury-section">
        <div class="container">
            <div class="section-header">
                <span class="section-label">{{ $faq->field('label:'.app()->getLocale()) }}</span>
                <h2 class="section-title">{{ $faq->field('title:'.app()->getLocale()) }}</h2>
                <div class="gold-divider"></div>
                <p class="section-subtitle">{{ $faq->field('subtitle:'.app()->getLocale()) }}</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    @foreach($faqItems as $index => $item)
                        <div style="background:var(--bg-secondary);border:1px solid var(--border-color);border-radius:var(--radius-md);padding:1.5rem 2rem;{{ $loop->last ? '' : 'margin-bottom:12px;' }}transition:var(--transition);">
                            <div style="display:flex;justify-content:space-between;align-items:center;cursor:pointer;">
                                <h4 style="font-size:1rem;font-weight:600;margin:0;">
                                    {{ $item->field('question:'.app()->getLocale()) }}
                                </h4>
                                <i class="bi bi-plus-lg" style="color:var(--accent-gold);font-size:0.9rem;flex-shrink:0;margin-{{ app()->isLocale('ar') ? 'right' : 'left' }}:1rem;"></i>
                            </div>
                            <p style="color:var(--text-muted);font-size:0.9rem;margin:1rem 0 0;padding-top:1rem;border-top:1px solid var(--border-color);">
                                {{ $item->field('answer:'.app()->getLocale()) }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection
