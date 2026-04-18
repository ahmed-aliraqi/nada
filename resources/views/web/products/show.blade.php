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
                            <div class="variant-label" style="margin-bottom:0;">Quantity</div>
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
                                <span>Add to Cart</span>
                                <i class="bi bi-bag"></i>
                            </a>
                            <button class="btn-outline-gold" style="flex:1;min-width:180px;justify-content:center;">
                                <i class="bi bi-lightning"></i>
                                <span>Buy Now</span>
                            </button>
                        </div>

                    </div><!-- /sticky -->
                </div><!-- /col -->
            </div><!-- /row -->
        </div>
    </section>

    <!-- ===== DESCRIPTION TABS SECTION ===== -->
    <section class="luxury-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">

                    <!-- CSS-only tabs -->
                    <input type="radio" name="dtabs" id="tab-desc" class="desc-tabs" checked>
                    <input type="radio" name="dtabs" id="tab-notes" class="desc-tabs">
                    <input type="radio" name="dtabs" id="tab-reviews" class="desc-tabs">

                    <!-- Tab buttons -->
                    <div class="desc-tabs" style="display:flex; border-bottom: 1px solid var(--border-color); margin-bottom: 2rem;">
                        <label for="tab-desc" class="tab-btn">Description</label>
                        <label for="tab-notes" class="tab-btn">Fragrance Notes</label>
                        <label for="tab-reviews" class="tab-btn">Reviews (48)</label>
                    </div>

                    <!-- Tab panels -->
                    <div class="desc-panels">

                        <!-- Description panel -->
                        <div class="desc-panel panel-desc">
                            <div class="row g-4">
                                <div class="col-md-7">
                                    <h3 style="margin-bottom:1rem;">The Essence of Dark Romance</h3>
                                    <p style="margin-bottom:1rem;">
                                        Rose Noir is more than a fragrance — it is an emotion. Born from the contrast between the delicate beauty of Bulgarian rose and the raw depth of dark amber, this eau de parfum speaks to those who find elegance in mystery.
                                    </p>
                                    <p style="margin-bottom:1rem;">
                                        Each spray unfurls like petals at dusk: first, a bright burst of pink pepper and bergamot, followed by the rich, honeyed heart of Damask rose intertwined with rare oud. The dry-down reveals a velvet blanket of musk, patchouli, and vanilla absolute that lingers for hours — a whispered secret on the skin.
                                    </p>
                                    <p style="margin-bottom:0;">
                                        Housed in a hand-crafted matte black bottle with gold detailing, Rose Noir is as much a work of art as it is a fragrance. Perfect for evening wear, special occasions, or whenever you wish to leave an unforgettable impression.
                                    </p>
                                </div>
                                <div class="col-md-5">
                                    <div style="border-radius:var(--radius-lg);overflow:hidden;border:1px solid var(--border-color);height:100%;min-height:300px;">
                                        <img src="https://picsum.photos/seed/descimg/600/700.jpg" alt="Rose Noir Lifestyle" style="width:100%;height:100%;object-fit:cover;">
                                    </div>
                                </div>
                            </div>

                            <!-- Key features -->
                            <div class="row g-4 mt-4 pt-4" style="border-top:1px solid var(--border-color);">
                                <div class="col-md-4">
                                    <div style="text-align:center;padding:1.5rem;">
                                        <div style="width:50px;height:50px;margin:0 auto 1rem;border-radius:50%;background:rgba(224,176,128,0.08);border:1px solid var(--border-gold);display:flex;align-items:center;justify-content:center;">
                                            <i class="bi bi-hourglass-split" style="color:var(--accent-gold);font-size:1.1rem;"></i>
                                        </div>
                                        <h4 style="font-size:0.95rem;margin-bottom:4px;">Long Lasting</h4>
                                        <p style="font-size:0.82rem;color:var(--text-muted);margin:0;">8–12 hours of lasting projection</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div style="text-align:center;padding:1.5rem;">
                                        <div style="width:50px;height:50px;margin:0 auto 1rem;border-radius:50%;background:rgba(224,176,128,0.08);border:1px solid var(--border-gold);display:flex;align-items:center;justify-content:center;">
                                            <i class="bi bi-flower1" style="color:var(--accent-gold);font-size:1.1rem;"></i>
                                        </div>
                                        <h4 style="font-size:0.95rem;margin-bottom:4px;">Natural Extracts</h4>
                                        <p style="font-size:0.82rem;color:var(--text-muted);margin:0;">Sourced from Grasse, France</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div style="text-align:center;padding:1.5rem;">
                                        <div style="width:50px;height:50px;margin:0 auto 1rem;border-radius:50%;background:rgba(224,176,128,0.08);border:1px solid var(--border-gold);display:flex;align-items:center;justify-content:center;">
                                            <i class="bi bi-hand-index-thumb" style="color:var(--accent-gold);font-size:1.1rem;"></i>
                                        </div>
                                        <h4 style="font-size:0.95rem;margin-bottom:4px;">Hand-Poured</h4>
                                        <p style="font-size:0.82rem;color:var(--text-muted);margin:0;">Each bottle finished by hand</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Notes panel -->
                        <div class="desc-panel panel-notes">
                            <div class="row g-5">
                                <div class="col-md-4">
                                    <div style="background:var(--bg-secondary);border:1px solid var(--border-color);border-radius:var(--radius-lg);padding:2rem;text-align:center;height:100%;">
                                        <div style="width:70px;height:70px;margin:0 auto 1.2rem;border-radius:50%;background:linear-gradient(135deg, rgba(224,176,128,0.15), rgba(224,176,128,0.05));border:1px solid var(--border-gold);display:flex;align-items:center;justify-content:center;">
                                            <i class="bi bi-wind" style="color:var(--accent-gold);font-size:1.5rem;"></i>
                                        </div>
                                        <div style="font-size:0.68rem;letter-spacing:0.2em;text-transform:uppercase;color:var(--accent-gold);margin-bottom:0.5rem;">Top Notes</div>
                                        <h4 style="margin-bottom:1rem;">The Opening</h4>
                                        <p style="font-size:0.88rem;color:var(--text-muted);margin-bottom:1.2rem;">
                                            The first impression is bright and inviting — a sparkling collision of citrus and spice.
                                        </p>
                                        <div style="display:flex;flex-wrap:wrap;gap:8px;justify-content:center;">
                                            <span style="padding:6px 14px;background:var(--bg-tertiary);border-radius:var(--radius-xl);font-size:0.78rem;color:var(--text-secondary);">Bulgarian Rose</span>
                                            <span style="padding:6px 14px;background:var(--bg-tertiary);border-radius:var(--radius-xl);font-size:0.78rem;color:var(--text-secondary);">Pink Pepper</span>
                                            <span style="padding:6px 14px;background:var(--bg-tertiary);border-radius:var(--radius-xl);font-size:0.78rem;color:var(--text-secondary);">Bergamot</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div style="background:var(--bg-secondary);border:1px solid var(--border-gold);border-radius:var(--radius-lg);padding:2rem;text-align:center;height:100%;box-shadow:var(--shadow-gold);">
                                        <div style="width:70px;height:70px;margin:0 auto 1.2rem;border-radius:50%;background:linear-gradient(135deg, rgba(224,176,128,0.25), rgba(224,176,128,0.1));border:1px solid var(--accent-gold);display:flex;align-items:center;justify-content:center;" class="gold-glow">
                                            <i class="bi bi-flower2" style="color:var(--accent-gold);font-size:1.5rem;"></i>
                                        </div>
                                        <div style="font-size:0.68rem;letter-spacing:0.2em;text-transform:uppercase;color:var(--accent-gold);margin-bottom:0.5rem;">Heart Notes</div>
                                        <h4 style="margin-bottom:1rem;">The Soul</h4>
                                        <p style="font-size:0.88rem;color:var(--text-muted);margin-bottom:1.2rem;">
                                            The heart reveals the true character — a luxurious floral-oud accord that defines the fragrance.
                                        </p>
                                        <div style="display:flex;flex-wrap:wrap;gap:8px;justify-content:center;">
                                            <span style="padding:6px 14px;background:rgba(224,176,128,0.08);border:1px solid var(--border-gold);border-radius:var(--radius-xl);font-size:0.78rem;color:var(--accent-gold);">Damask Rose</span>
                                            <span style="padding:6px 14px;background:rgba(224,176,128,0.08);border:1px solid var(--border-gold);border-radius:var(--radius-xl);font-size:0.78rem;color:var(--accent-gold);">Oud</span>
                                            <span style="padding:6px 14px;background:rgba(224,176,128,0.08);border:1px solid var(--border-gold);border-radius:var(--radius-xl);font-size:0.78rem;color:var(--accent-gold);">Jasmine Sambac</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div style="background:var(--bg-secondary);border:1px solid var(--border-color);border-radius:var(--radius-lg);padding:2rem;text-align:center;height:100%;">
                                        <div style="width:70px;height:70px;margin:0 auto 1.2rem;border-radius:50%;background:linear-gradient(135deg, rgba(224,176,128,0.15), rgba(224,176,128,0.05));border:1px solid var(--border-gold);display:flex;align-items:center;justify-content:center;">
                                            <i class="bi bi-moon-stars" style="color:var(--accent-gold);font-size:1.5rem;"></i>
                                        </div>
                                        <div style="font-size:0.68rem;letter-spacing:0.2em;text-transform:uppercase;color:var(--accent-gold);margin-bottom:0.5rem;">Base Notes</div>
                                        <h4 style="margin-bottom:1rem;">The Memory</h4>
                                        <p style="font-size:0.88rem;color:var(--text-muted);margin-bottom:1.2rem;">
                                            The foundation is deep and enveloping — leaving a trail that lingers long after you've left the room.
                                        </p>
                                        <div style="display:flex;flex-wrap:wrap;gap:8px;justify-content:center;">
                                            <span style="padding:6px 14px;background:var(--bg-tertiary);border-radius:var(--radius-xl);font-size:0.78rem;color:var(--text-secondary);">Dark Amber</span>
                                            <span style="padding:6px 14px;background:var(--bg-tertiary);border-radius:var(--radius-xl);font-size:0.78rem;color:var(--text-secondary);">Velvet Musk</span>
                                            <span style="padding:6px 14px;background:var(--bg-tertiary);border-radius:var(--radius-xl);font-size:0.78rem;color:var(--text-secondary);">Patchouli</span>
                                            <span style="padding:6px 14px;background:var(--bg-tertiary);border-radius:var(--radius-xl);font-size:0.78rem;color:var(--text-secondary);">Vanilla</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Reviews panel -->
                        <div class="desc-panel panel-reviews">
                            <div class="row g-5">
                                <!-- Rating summary sidebar -->
                                <div class="col-lg-4">
                                    <div style="background:var(--bg-secondary);border:1px solid var(--border-color);border-radius:var(--radius-lg);padding:2rem;text-align:center;position:sticky;top:100px;">
                                        <div style="font-family:var(--font-serif);font-size:3.5rem;font-weight:800;color:var(--text-primary);line-height:1;margin-bottom:4px;">5.0</div>
                                        <div style="display:flex;gap:3px;justify-content:center;margin-bottom:6px;">
                                            <i class="bi bi-star-fill" style="color:var(--accent-gold);font-size:0.85rem;"></i>
                                            <i class="bi bi-star-fill" style="color:var(--accent-gold);font-size:0.85rem;"></i>
                                            <i class="bi bi-star-fill" style="color:var(--accent-gold);font-size:0.85rem;"></i>
                                            <i class="bi bi-star-fill" style="color:var(--accent-gold);font-size:0.85rem;"></i>
                                            <i class="bi bi-star-fill" style="color:var(--accent-gold);font-size:0.85rem;"></i>
                                        </div>
                                        <div style="font-size:0.82rem;color:var(--text-muted);margin-bottom:1.5rem;">Based on 48 reviews</div>

                                        <!-- Rating bars -->
                                        <div style="text-align:left;">
                                            <div class="rating-bar-row">
                                                <span class="rating-bar-label">5 <i class="bi bi-star-fill" style="font-size:0.55rem;color:var(--accent-gold);"></i></span>
                                                <div class="rating-bar-track"><div class="rating-bar-fill" style="width:88%;"></div></div>
                                                <span class="rating-bar-count">42</span>
                                            </div>
                                            <div class="rating-bar-row">
                                                <span class="rating-bar-label">4 <i class="bi bi-star-fill" style="font-size:0.55rem;color:var(--accent-gold);"></i></span>
                                                <div class="rating-bar-track"><div class="rating-bar-fill" style="width:8%;"></div></div>
                                                <span class="rating-bar-count">4</span>
                                            </div>
                                            <div class="rating-bar-row">
                                                <span class="rating-bar-label">3 <i class="bi bi-star-fill" style="font-size:0.55rem;color:var(--accent-gold);"></i></span>
                                                <div class="rating-bar-track"><div class="rating-bar-fill" style="width:4%;"></div></div>
                                                <span class="rating-bar-count">2</span>
                                            </div>
                                            <div class="rating-bar-row">
                                                <span class="rating-bar-label">2 <i class="bi bi-star-fill" style="font-size:0.55rem;color:var(--accent-gold);"></i></span>
                                                <div class="rating-bar-track"><div class="rating-bar-fill" style="width:0%;"></div></div>
                                                <span class="rating-bar-count">0</span>
                                            </div>
                                            <div class="rating-bar-row">
                                                <span class="rating-bar-label">1 <i class="bi bi-star-fill" style="font-size:0.55rem;color:var(--accent-gold);"></i></span>
                                                <div class="rating-bar-track"><div class="rating-bar-fill" style="width:0%;"></div></div>
                                                <span class="rating-bar-count">0</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Reviews list -->
                                <div class="col-lg-8">
                                    <!-- Review 1 -->
                                    <div class="review-card">
                                        <div class="review-header">
                                            <img src="https://picsum.photos/seed/rev1/100/100.jpg" alt="Sophia M." class="review-avatar">
                                            <div>
                                                <div class="review-author">Sophia M.</div>
                                                <div class="review-date">December 15, 2024</div>
                                            </div>
                                        </div>
                                        <div class="review-stars">
                                            <i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i>
                                        </div>
                                        <p class="review-text">
                                            Absolutely divine. The rose is so rich and authentic — nothing synthetic about this. I've received more compliments on this fragrance than anything I've ever worn. The bottle is stunning too, it looks like a piece of art on my vanity. Worth every penny.
                                        </p>
                                        <div class="review-verified"><i class="bi bi-patch-check-fill"></i> Verified Purchase</div>
                                    </div>

                                    <!-- Review 2 -->
                                    <div class="review-card">
                                        <div class="review-header">
                                            <img src="https://picsum.photos/seed/rev2/100/100.jpg" alt="Layla K." class="review-avatar">
                                            <div>
                                                <div class="review-author">Layla K.</div>
                                                <div class="review-date">November 28, 2024</div>
                                            </div>
                                        </div>
                                        <div class="review-stars">
                                            <i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i>
                                        </div>
                                        <p class="review-text">
                                            The oud and rose combination is perfection. It's sophisticated without being overpowering. I spray it in the morning and can still smell it in the evening. The dry-down of vanilla and musk is incredibly warm and comforting. This is now my signature scent.
                                        </p>
                                        <div class="review-verified"><i class="bi bi-patch-check-fill"></i> Verified Purchase</div>
                                    </div>

                                    <!-- Review 3 -->
                                    <div class="review-card">
                                        <div class="review-header">
                                            <img src="https://picsum.photos/seed/rev3/100/100.jpg" alt="Emma R." class="review-avatar">
                                            <div>
                                                <div class="review-author">Emma R.</div>
                                                <div class="review-date">November 10, 2024</div>
                                            </div>
                                        </div>
                                        <div class="review-stars">
                                            <i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i>
                                        </div>
                                        <p class="review-text">
                                            I bought the 100ml and it came beautifully gift-wrapped. The presentation alone made me feel like I was receiving something truly special. The fragrance itself is dark, romantic, and addictive. Perfect for winter evenings. Will definitely repurchase.
                                        </p>
                                        <div class="review-verified"><i class="bi bi-patch-check-fill"></i> Verified Purchase</div>
                                    </div>

                                    <!-- Review 4 -->
                                    <div class="review-card">
                                        <div class="review-header">
                                            <img src="https://picsum.photos/seed/rev4/100/100.jpg" alt="Amira H." class="review-avatar">
                                            <div>
                                                <div class="review-author">Amira H.</div>
                                                <div class="review-date">October 22, 2024</div>
                                            </div>
                                        </div>
                                        <div class="review-stars">
                                            <i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><i class="bi bi-star-half star"></i>
                                        </div>
                                        <p class="review-text">
                                            Beautiful fragrance with great sillage. The opening is a bit spicy which I love, and it settles into the most gorgeous rose-oud combo. Only giving 4.5 stars because I wish the top notes lasted a bit longer. Still, absolutely worth it.
                                        </p>
                                        <div class="review-verified"><i class="bi bi-patch-check-fill"></i> Verified Purchase</div>
                                    </div>

                                    <!-- Review 5 -->
                                    <div class="review-card">
                                        <div class="review-header">
                                            <img src="https://picsum.photos/seed/rev5/100/100.jpg" alt="Diana L." class="review-avatar">
                                            <div>
                                                <div class="review-author">Diana L.</div>
                                                <div class="review-date">October 5, 2024</div>
                                            </div>
                                        </div>
                                        <div class="review-stars">
                                            <i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i>
                                        </div>
                                        <p class="review-text">
                                            This is luxury in a bottle. I'm a perfume collector with over 100 bottles and Rose Noir has instantly become one of my top 5. The quality of ingredients is evident from the first spray. Beauty Store has outdone themselves.
                                        </p>
                                        <div class="review-verified"><i class="bi bi-patch-check-fill"></i> Verified Purchase</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div><!-- /panels -->
                </div>
            </div>
        </div>
    </section>

    <!-- ===== ORDER FORM SECTION ===== -->
    <section class="luxury-section" style="padding-top: 0;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="order-section">
                        <div class="order-section-header">
                            <div>
                                <h3><i class="bi bi-bag-check" style="color:var(--accent-gold);margin-right:8px;font-size:1.1rem;"></i>Quick Order</h3>
                                <p style="font-size:0.85rem;color:var(--text-muted);margin:4px 0 0;">Fill in your details and we'll process your order</p>
                            </div>
                            <div class="order-total">$185.00</div>
                        </div>
                        <div class="order-section-body">
                            <form onsubmit="return false;">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-group" style="margin-bottom:0;">
                                            <label class="form-label">Full Name *</label>
                                            <input type="text" class="form-control-luxury" placeholder="Your full name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group" style="margin-bottom:0;">
                                            <label class="form-label">Phone Number *</label>
                                            <input type="tel" class="form-control-luxury" placeholder="+971 50 XXX XXXX" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group" style="margin-bottom:0;">
                                            <label class="form-label">Email Address</label>
                                            <input type="email" class="form-control-luxury" placeholder="your@email.com (for order updates)">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group" style="margin-bottom:0;">
                                            <label class="form-label">Delivery Address *</label>
                                            <input type="text" class="form-control-luxury" placeholder="Street, Building, Area" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group" style="margin-bottom:0;">
                                            <label class="form-label">City *</label>
                                            <input type="text" class="form-control-luxury" placeholder="Dubai" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group" style="margin-bottom:0;">
                                            <label class="form-label">Country *</label>
                                            <input type="text" class="form-control-luxury" placeholder="UAE" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group" style="margin-bottom:0;">
                                            <label class="form-label">Notes / Special Requests</label>
                                            <textarea class="form-control-luxury" rows="3" placeholder="Gift message, preferred delivery time, etc."></textarea>
                                        </div>
                                    </div>
                                </div>

                                <!-- Order summary mini -->
                                <div style="background:var(--bg-tertiary);border:1px solid var(--border-color);border-radius:var(--radius-md);padding:1.2rem 1.5rem;margin-top:1.5rem;">
                                    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:8px;">
                                        <span style="font-size:0.88rem;color:var(--text-secondary);">Rose Noir Eau de Parfum × 1</span>
                                        <span style="font-size:0.88rem;color:var(--accent-gold);font-weight:600;">$185.00</span>
                                    </div>
                                    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:8px;">
                                        <span style="font-size:0.82rem;color:var(--text-muted);">Shipping</span>
                                        <span style="font-size:0.82rem;color:#6FCF97;font-weight:500;">FREE</span>
                                    </div>
                                    <div style="height:1px;background:var(--border-color);margin:10px 0;"></div>
                                    <div style="display:flex;justify-content:space-between;align-items:center;">
                                        <span style="font-family:var(--font-serif);font-size:1.05rem;font-weight:700;color:var(--text-primary);">Total</span>
                                        <span style="font-family:var(--font-serif);font-size:1.3rem;font-weight:700;color:var(--accent-gold);">$185.00</span>
                                    </div>
                                </div>

                                <!-- Payment method -->
                                <div style="margin-top:1.5rem;">
                                    <div style="font-size:0.78rem;font-weight:600;letter-spacing:0.1em;text-transform:uppercase;color:var(--text-secondary);margin-bottom:10px;">Payment Method</div>
                                    <div class="payment-option selected" style="margin-bottom:0;">
                                        <div class="payment-radio"></div>
                                        <div>
                                            <div class="payment-label">Cash on Delivery</div>
                                            <div class="payment-desc">Pay when your order arrives at your doorstep</div>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn-gold w-100 justify-content-center" style="margin-top:1.5rem;padding:16px 36px;">
                                    <span>Place Order — $185.00</span>
                                    <i class="bi bi-arrow-right"></i>
                                </button>
                                <p style="text-align:center;font-size:0.75rem;color:var(--text-muted);margin-top:12px;margin-bottom:0;">
                                    <i class="bi bi-lock" style="margin-right:4px;"></i>
                                    Your information is secure and will not be shared with third parties.
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== RELATED PRODUCTS ===== -->
    <section class="luxury-section">
        <div class="container">
            <div class="section-header">
                <span class="section-label">You May Also Like</span>
                <h2 class="section-title">Related Products</h2>
                <div class="gold-divider"></div>
            </div>
            <div class="row g-4">
                <div class="col-sm-6 col-lg-3">
                    <div class="product-card">
                        <div class="product-card-image">
                            <img src="https://picsum.photos/seed/relpd1/500/600.jpg" alt="Amber Oud Concentrate">
                            <span class="product-badge badge-best">Best Seller</span>
                            <div class="product-card-actions"><a href="{{ LaravelLocalization::getLocalizedURL(url: '/product') }}" class="product-card-action-btn">View</a><button class="product-card-action-btn icon-only"><i class="bi bi-heart"></i></button></div>
                        </div>
                        <div class="product-card-body">
                            <span class="product-card-category">Oriental Fragrances</span>
                            <h4 class="product-card-title"><a href="{{ LaravelLocalization::getLocalizedURL(url: '/product') }}">Amber Oud Concentrate</a></h4>
                            <div class="product-card-rating"><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star empty"></i><span class="count">(73)</span></div>
                            <div class="product-card-price"><span class="current">$240.00</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="product-card">
                        <div class="product-card-image">
                            <img src="https://picsum.photos/seed/relpd2/500/600.jpg" alt="Saffron Musk Eau de Toilette">
                            <div class="product-card-actions"><a href="{{ LaravelLocalization::getLocalizedURL(url: '/product') }}" class="product-card-action-btn">View</a><button class="product-card-action-btn icon-only"><i class="bi bi-heart"></i></button></div>
                        </div>
                        <div class="product-card-body">
                            <span class="product-card-category">Classic Collections</span>
                            <h4 class="product-card-title"><a href="{{ LaravelLocalization::getLocalizedURL(url: '/product') }}">Saffron Musk Eau de Toilette</a></h4>
                            <div class="product-card-rating"><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><i class="bi bi-star-half star"></i><span class="count">(167)</span></div>
                            <div class="product-card-price"><span class="current">$155.00</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="product-card">
                        <div class="product-card-image">
                            <img src="https://picsum.photos/seed/relpd3/500/600.jpg" alt="Tuberose Absolute Perfume">
                            <span class="product-badge badge-new">New</span>
                            <div class="product-card-actions"><a href="{{ LaravelLocalization::getLocalizedURL(url: '/product') }}" class="product-card-action-btn">View</a><button class="product-card-action-btn icon-only"><i class="bi bi-heart"></i></button></div>
                        </div>
                        <div class="product-card-body">
                            <span class="product-card-category">Niche Naturals</span>
                            <h4 class="product-card-title"><a href="{{ LaravelLocalization::getLocalizedURL(url: '/product') }}">Tuberose Absolute Perfume</a></h4>
                            <div class="product-card-rating"><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><span class="count">(134)</span></div>
                            <div class="product-card-price"><span class="current">$175.00</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="product-card">
                        <div class="product-card-image">
                            <img src="https://picsum.photos/seed/relpd4/500/600.jpg" alt="Midnight Jasmine Elixir">
                            <span class="product-badge badge-limited" style="background:#C0554F;color:#fff;">Limited</span>
                            <div class="product-card-actions"><a href="{{ LaravelLocalization::getLocalizedURL(url: '/product') }}" class="product-card-action-btn">View</a><button class="product-card-action-btn icon-only"><i class="bi bi-heart"></i></button></div>
                        </div>
                        <div class="product-card-body">
                            <span class="product-card-category">Classic Collections</span>
                            <h4 class="product-card-title"><a href="{{ LaravelLocalization::getLocalizedURL(url: '/product') }}">Midnight Jasmine Elixir</a></h4>
                            <div class="product-card-rating"><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><i class="bi bi-star-fill star"></i><span class="count">(56)</span></div>
                            <div class="product-card-price"><span class="current">$295.00</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
