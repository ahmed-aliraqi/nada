@extends('layouts.app', ['title' => __('About')])

@section('content')
    <!-- PAGE HEADER -->
    <section class="page-header">
        <div class="page-header-bg"></div>
        <div class="page-header-overlay"></div>
        <div class="page-header-content">
            <span class="section-label">Get in Touch</span>
            <h1>Contact Us</h1>
            <div class="breadcrumb-luxury">
                <a href="{{ LaravelLocalization::getLocalizedURL(url: '/') }}">Home</a>
                <span class="separator"><i class="bi bi-chevron-right"></i></span>
                <span class="current">Contact</span>
            </div>
        </div>
    </section>

    <!-- CONTACT INFO CARDS -->
    <section class="luxury-section" style="padding-bottom: 0;">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 animate-fade-in-up stagger-1">
                    <div class="contact-info-card">
                        <div class="contact-info-icon">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <div>
                            <div class="contact-info-label">Visit Us</div>
                            <div class="contact-info-value">Downtown Dubai<br>Sheikh Mohammed Blvd<br>Dubai, UAE</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 animate-fade-in-up stagger-2">
                    <div class="contact-info-card">
                        <div class="contact-info-icon">
                            <i class="bi bi-telephone"></i>
                        </div>
                        <div>
                            <div class="contact-info-label">Call Us</div>
                            <div class="contact-info-value">+971 4 123 4567<br>+971 50 987 6543</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 animate-fade-in-up stagger-3">
                    <div class="contact-info-card">
                        <div class="contact-info-icon">
                            <i class="bi bi-envelope"></i>
                        </div>
                        <div>
                            <div class="contact-info-label">Email Us</div>
                            <div class="contact-info-value">hello@beautystore.com<br>support@beautystore.com</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 animate-fade-in-up stagger-4">
                    <div class="contact-info-card">
                        <div class="contact-info-icon">
                            <i class="bi bi-clock"></i>
                        </div>
                        <div>
                            <div class="contact-info-label">Working Hours</div>
                            <div class="contact-info-value">Sat – Thu: 10AM – 10PM<br>Friday: 2PM – 10PM</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT FORM + MAP -->
    <section class="luxury-section">
        <div class="container">
            <div class="row g-5">
                <!-- Contact Form -->
                <div class="col-lg-6">
                    <span class="section-label">Send a Message</span>
                    <h2 class="mb-2">We'd Love to<br>Hear From <span class="text-gold">You</span></h2>
                    <div class="gold-divider-left" style="margin-bottom: 2rem;"></div>
                    <p style="color: var(--text-muted); margin-bottom: 2rem; font-size: 0.92rem;">
                        Whether you have a question about our products, need a personalized recommendation, or want to share your experience — we're here for you.
                    </p>
                    <form onsubmit="return false;">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">First Name</label>
                                    <input type="text" class="form-control-luxury" placeholder="Your first name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Last Name</label>
                                    <input type="text" class="form-control-luxury" placeholder="Your last name">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Email Address</label>
                                    <input type="email" class="form-control-luxury" placeholder="your@email.com">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control-luxury" placeholder="+1 (234) 567-890">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Subject</label>
                            <select class="form-control-luxury" style="cursor:pointer;">
                                <option value="" disabled selected style="color:var(--text-muted);">Select a topic</option>
                                <option>Product Inquiry</option>
                                <option>Order Support</option>
                                <option>Fragrance Consultation</option>
                                <option>Wholesale / Partnership</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Your Message</label>
                            <textarea class="form-control-luxury" rows="5" placeholder="Tell us how we can help you..."></textarea>
                        </div>
                        <button type="submit" class="btn-gold">
                            <span>Send Message</span>
                            <i class="bi bi-send"></i>
                        </button>
                    </form>
                </div>

                <!-- Map / Store Image -->
                <div class="col-lg-6">
                    <div style="position: sticky; top: 100px;">
                        <div style="border-radius: var(--radius-lg); overflow: hidden; border: 1px solid var(--border-color); height: 400px; background: var(--bg-secondary); margin-bottom: 1.5rem;">
                            <!-- Static map placeholder with luxury styling -->
                            <div style="width:100%;height:100%;background-image:url('https://picsum.photos/seed/dubaimap/800/600.jpg');background-size:cover;background-position:center;filter:brightness(0.5) saturate(0.6);position:relative;">
                                <div style="position:absolute;inset:0;background:linear-gradient(180deg, rgba(44,31,37,0.3), rgba(44,31,37,0.7));display:flex;flex-direction:column;align-items:center;justify-content:center;">
                                    <div style="width:60px;height:60px;border-radius:50%;background:rgba(224,176,128,0.15);border:2px solid var(--accent-gold);display:flex;align-items:center;justify-content:center;margin-bottom:1rem;" class="gold-glow">
                                        <i class="bi bi-geo-alt-fill" style="font-size:1.4rem;color:var(--accent-gold);"></i>
                                    </div>
                                    <div style="font-family:var(--font-serif);font-size:1.3rem;font-weight:700;color:var(--text-primary);margin-bottom:4px;">Beauty Store</div>
                                    <div style="font-size:0.85rem;color:var(--text-muted);text-align:center;">Downtown Dubai<br>Sheikh Mohammed Boulevard</div>
                                    <a href="#" style="margin-top:1.2rem;padding:10px 28px;background:rgba(224,176,128,0.12);border:1px solid var(--border-gold);border-radius:var(--radius-xl);color:var(--accent-gold);font-size:0.78rem;font-weight:500;letter-spacing:0.1em;text-transform:uppercase;display:inline-flex;align-items:center;gap:8px;transition:var(--transition);">
                                        <i class="bi bi-google"></i>
                                        <span>Open in Google Maps</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Quick contact cards -->
                        <div class="row g-3">
                            <div class="col-6">
                                <div style="background:var(--bg-secondary);border:1px solid var(--border-color);border-radius:var(--radius-md);padding:1.5rem;text-align:center;transition:var(--transition);height:100%;">
                                    <i class="bi bi-whatsapp" style="font-size:1.5rem;color:#25D366;margin-bottom:0.8rem;display:block;"></i>
                                    <div style="font-size:0.8rem;font-weight:600;color:var(--text-primary);margin-bottom:4px;">WhatsApp</div>
                                    <div style="font-size:0.78rem;color:var(--text-muted);">+971 50 987 6543</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div style="background:var(--bg-secondary);border:1px solid var(--border-color);border-radius:var(--radius-md);padding:1.5rem;text-align:center;transition:var(--transition);height:100%;">
                                    <i class="bi bi-instagram" style="font-size:1.5rem;color:var(--accent-gold);margin-bottom:0.8rem;display:block;"></i>
                                    <div style="font-size:0.8rem;font-weight:600;color:var(--text-primary);margin-bottom:4px;">Instagram</div>
                                    <div style="font-size:0.78rem;color:var(--text-muted);">@beautystore</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ SECTION -->
    <section class="luxury-section">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Help Center</span>
                <h2 class="section-title">Frequently Asked Questions</h2>
                <div class="gold-divider"></div>
                <p class="section-subtitle">Quick answers to common questions</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <!-- FAQ Item 1 -->
                    <div style="background:var(--bg-secondary);border:1px solid var(--border-color);border-radius:var(--radius-md);padding:1.5rem 2rem;margin-bottom:12px;transition:var(--transition);">
                        <div style="display:flex;justify-content:space-between;align-items:center;cursor:pointer;">
                            <h4 style="font-size:1rem;font-weight:600;margin:0;">How long does shipping take?</h4>
                            <i class="bi bi-plus-lg" style="color:var(--accent-gold);font-size:0.9rem;flex-shrink:0;margin-left:1rem;"></i>
                        </div>
                        <p style="color:var(--text-muted);font-size:0.9rem;margin:1rem 0 0;padding-top:1rem;border-top:1px solid var(--border-color);">
                            Domestic orders within the UAE are delivered within 1–2 business days. International shipping typically takes 5–10 business days depending on the destination. All orders include tracking information.
                        </p>
                    </div>
                    <!-- FAQ Item 2 -->
                    <div style="background:var(--bg-secondary);border:1px solid var(--border-color);border-radius:var(--radius-md);padding:1.5rem 2rem;margin-bottom:12px;transition:var(--transition);">
                        <div style="display:flex;justify-content:space-between;align-items:center;cursor:pointer;">
                            <h4 style="font-size:1rem;font-weight:600;margin:0;">Can I get a fragrance sample before buying?</h4>
                            <i class="bi bi-plus-lg" style="color:var(--accent-gold);font-size:0.9rem;flex-shrink:0;margin-left:1rem;"></i>
                        </div>
                        <p style="color:var(--text-muted);font-size:0.9rem;margin:1rem 0 0;padding-top:1rem;border-top:1px solid var(--border-color);">
                            Yes! We offer a sample program where you can order up to 3 sample vials for a nominal fee. The cost is fully redeemable against a full-size purchase.
                        </p>
                    </div>
                    <!-- FAQ Item 3 -->
                    <div style="background:var(--bg-secondary);border:1px solid var(--border-color);border-radius:var(--radius-md);padding:1.5rem 2rem;margin-bottom:12px;transition:var(--transition);">
                        <div style="display:flex;justify-content:space-between;align-items:center;cursor:pointer;">
                            <h4 style="font-size:1rem;font-weight:600;margin:0;">What is your return policy?</h4>
                            <i class="bi bi-plus-lg" style="color:var(--accent-gold);font-size:0.9rem;flex-shrink:0;margin-left:1rem;"></i>
                        </div>
                        <p style="color:var(--text-muted);font-size:0.9rem;margin:1rem 0 0;padding-top:1rem;border-top:1px solid var(--border-color);">
                            Unopened products can be returned within 14 days of delivery. For hygiene reasons, opened makeup and perfumes cannot be returned unless they arrive damaged or defective.
                        </p>
                    </div>
                    <!-- FAQ Item 4 -->
                    <div style="background:var(--bg-secondary);border:1px solid var(--border-color);border-radius:var(--radius-md);padding:1.5rem 2rem;margin-bottom:12px;transition:var(--transition);">
                        <div style="display:flex;justify-content:space-between;align-items:center;cursor:pointer;">
                            <h4 style="font-size:1rem;font-weight:600;margin:0;">Do you offer gift wrapping?</h4>
                            <i class="bi bi-plus-lg" style="color:var(--accent-gold);font-size:0.9rem;flex-shrink:0;margin-left:1rem;"></i>
                        </div>
                        <p style="color:var(--text-muted);font-size:0.9rem;margin:1rem 0 0;padding-top:1rem;border-top:1px solid var(--border-color);">
                            Absolutely. We offer complimentary luxury gift wrapping on all orders. You can also add a personalized message card during checkout.
                        </p>
                    </div>
                    <!-- FAQ Item 5 -->
                    <div style="background:var(--bg-secondary);border:1px solid var(--border-color);border-radius:var(--radius-md);padding:1.5rem 2rem;transition:var(--transition);">
                        <div style="display:flex;justify-content:space-between;align-items:center;cursor:pointer;">
                            <h4 style="font-size:1rem;font-weight:600;margin:0;">Do you ship internationally?</h4>
                            <i class="bi bi-plus-lg" style="color:var(--accent-gold);font-size:0.9rem;flex-shrink:0;margin-left:1rem;"></i>
                        </div>
                        <p style="color:var(--text-muted);font-size:0.9rem;margin:1rem 0 0;padding-top:1rem;border-top:1px solid var(--border-color);">
                            Yes, we ship to over 30 countries worldwide. Shipping rates and delivery times vary by location. All international orders are carefully packaged to ensure safe arrival.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
