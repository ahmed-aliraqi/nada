<template>
    <section v-if="cart.items_count > 0" class="luxury-section" style="padding-top: 20px;">
        <div class="container">
            <div class="row g-5">
                <!-- ===== CART ITEMS ===== -->
                <div class="col-lg-8">

                    <!-- Column headers (desktop) -->
                    <div class="cart-header-bar d-none d-lg-grid">
                        <span>{{ $t('Product') }}</span>
                        <span></span>
                        <span>{{ $t('Price') }}</span>
                        <span>{{ $t('Qty') }}</span>
                        <span></span>
                    </div>

                    <div class="cart-item" v-for="item in cart.items">
                        <div class="cart-item-image">
                            <a :href="item.url">
                                <img :src="item.image" :alt="item.name">
                            </a>
                        </div>
                        <div class="cart-item-info">
                            <div class="cart-item-category">{{ item.category }}</div>
                            <div class="cart-item-name">
                                <a :href="item.url">{{ item.name }}</a>
                            </div>
                        </div>
                        <div class="cart-item-price-col">
                            <span class="cart-item-price">{{ item.price }}</span>
                        </div>
                        <div class="cart-quantity">
                            <button :data-id="item.id" class="cart-qty-btn"
                                    @click.prevent="updateQuantity({productId: item.id, quantity: item.quantity - 1})">−
                            </button>
                            <input type="text" class="cart-qty-input" :value="item.quantity" readonly>
                            <button :data-id="item.id" class="cart-qty-btn"
                                    @click.prevent="updateQuantity({productId: item.id, quantity: item.quantity + 1})">+
                            </button>
                        </div>
                        <button :data-id="item.id" @click.prevent="remove(item.id)" class="cart-remove-btn"><i
                            class="bi bi-x-lg"></i></button>
                    </div>


                    <!-- Continue shopping -->
                    <div
                        style="padding-top: 2rem; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem;">
                        <a href="/shop" class="btn-outline-gold btn-sm-gold">
                            <i class="bi bi-arrow-left"></i>
                            <span>{{ $t('Continue Shopping') }}</span>
                        </a>
                        <button @click.prevent="clear"
                                style="background:none;border:none;color:var(--text-muted);font-size:0.82rem;cursor:pointer;transition:var(--transition);display:flex;align-items:center;gap:6px;font-family:var(--font-sans);padding:8px 0;"
                                onmouseover="this.style.color='#E07A75'"
                                onmouseout="this.style.color='var(--text-muted)'">
                            <i class="bi bi-trash3"></i>
                            {{ $t('Clear Entire Cart') }}
                        </button>
                    </div>

                    <!-- ===== DELIVERY SECTION ===== -->
                    <div class="delivery-section">
                        <div class="delivery-header">
                            <div class="delivery-header-icon">
                                <i class="bi bi-geo-alt"></i>
                            </div>
                            <div>
                                <h3>{{ $t('Delivery Details') }}</h3>
                                <p>{{ $t('Select your city and provide your delivery address') }}</p>
                            </div>
                        </div>
                        <div class="delivery-body">

                            <!-- City Select -->
                            <div class="delivery-form-group">
                                <label class="delivery-form-label">{{ $t('City') }}</label>
                                <div class="city-select-wrap">
                                    <select class="city-select" name="city">
                                        <option value="" disabled selected>{{ $t('Select your city') }}</option>
                                        <option v-for="city in cities" :value="city.name[lang]">
                                            {{ city.name[lang] }}
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="delivery-divider"></div>

                            <!-- Name -->
                            <div class="delivery-form-group">
                                <label class="delivery-form-label">Full Name</label>
                                <input type="text" class="delivery-form-input" placeholder="Your full name">
                            </div>

                            <!-- Phone + Email -->
                            <div class="delivery-form-row">
                                <div class="delivery-form-group">
                                    <label class="delivery-form-label">Phone Number</label>
                                    <input type="tel" class="delivery-form-input" placeholder="+971 50 XXX XXXX">
                                </div>
                                <div class="delivery-form-group">
                                    <label class="delivery-form-label">Email Address</label>
                                    <input type="email" class="delivery-form-input" placeholder="your@email.com">
                                </div>
                            </div>

                            <!-- Detailed Address -->
                            <div class="delivery-form-group">
                                <label class="delivery-form-label">Detailed Address</label>
                                <textarea class="delivery-form-input" rows="3" placeholder="Street, Building, Floor, Apartment, Area, P.O. Box..."></textarea>
                            </div>

                            <!-- Delivery note -->
                            <div class="delivery-form-group" style="margin-bottom: 0;">
                                <label class="delivery-form-label">Delivery Notes <span style="color:var(--text-muted);text-transform:none;letter-spacing:0;font-weight:400;">(Optional)</span></label>
                                <textarea class="delivery-form-input" rows="2" placeholder="Special instructions for the courier, preferred delivery time, gate code..."></textarea>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- ===== CART SUMMARY ===== -->
                <div class="col-lg-4">
                    <div class="cart-summary-card">
                        <div class="cart-summary-header">
                            <h3>
                                <i class="bi bi-receipt" style="color:var(--accent-gold);"></i>
                                {{ $t('Order Summary') }}
                            </h3>
                            <span class="item-count">{{ cart.items_count }} {{ $t('Items') }}</span>
                        </div>
                        <div class="cart-summary-body">

                            <!-- Free shipping progress -->
                            <div class="shipping-progress" v-if="false">
                                <div class="shipping-progress-complete">
                                    <i class="bi bi-check-circle-fill"></i>
                                    {{ $t('You\'ve qualified for free shipping!') }}
                                </div>
                                <div class="shipping-progress-bar" style="margin-top:8px;">
                                    <div class="shipping-progress-fill" style="width:100%;"></div>
                                </div>
                            </div>

                            <!-- Coupon -->
                            <div class="coupon-wrapper" v-if="false">
                                <input type="text" class="coupon-input" :placeholder="$t('Coupon code')">
                                <button class="coupon-btn">{{ $t('Apply') }}</button>
                            </div>

                            <div class="coupon-applied" v-if="false">
                                <i class="bi bi-tag-fill"></i>
                                <span>{{ $t('Code') }} <strong>BEAUTY15</strong> {{ $t('applied') }} — 15% off</span>
                                <button class="coupon-remove"><i class="bi bi-x"></i></button>
                            </div>

                            <!-- Rows -->
                            <div class="cart-summary-row">
                                <span class="label">{{ $t('Subtotal') }} ({{ cart.items_count }} {{ $t('items') }})</span>
                                <span class="value">{{ cart.subtotal }}</span>
                            </div>
                            <div class="cart-summary-row" v-if="false">
                                <span class="label">{{ $t('Discount') }}</span>
                                <span class="value discount">−{{ cart.discount }}</span>
                            </div>
                            <div class="cart-summary-row">
                                <span class="label">{{ $t('Shipping') }}</span>
                                <span class="value free">{{ cart.shipping === 0 ? $t('FREE') : cart.shipping }}</span>
                            </div>

                            <div class="cart-summary-row total">
                                <span class="label">{{ $t('Total') }}</span>
                                <span class="value">{{ cart.total }}</span>
                            </div>
                        </div>

                        <div class="cart-summary-footer">
                            <a href="/checkout" class="btn-gold w-100 justify-content-center"
                               style="margin-bottom: 12px;">
                                <span>{{ $t('Proceed to Checkout') }}</span>
                                <i :class="`bi bi-arrow-${dir === 'ltr' ? 'right' : 'left'}`"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section v-else class="luxury-section" style="padding-top: 20px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">

                    <div class="empty-state">
                        <div class="empty-icon-wrap">
                            <div class="empty-icon-ring"></div>
                            <div class="empty-icon-ring"></div>
                            <div class="empty-icon-circle">
                                <i class="bi bi-bag-x"></i>
                            </div>
                        </div>

                        <h2 class="empty-title">{{ $t('Your Cart is Empty') }}</h2>
                        <p class="empty-desc">
                            {{
                                $t('Looks like you haven\'t added any products yet. Explore our collection and find something you love.')
                            }}
                        </p>

                        <div class="empty-actions">
                            <a href="/shop" class="btn-gold">
                                <span>{{ $t('Explore Collection') }}</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                            <a href="/" class="btn-outline-gold">
                                <span>{{ $t('Back to Home') }}</span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</template>

<script>
import { mapState, mapActions } from "vuex";

export default {
    data() {
        return {
            cities: [
                {
                    name: { ar: "الإسكندرية", en: "Alexandria" },
                    shipping_price: 65,
                },
                {
                    name: { ar: "القاهرة", en: "Cairo" },
                    shipping_price: 60,
                },
                {
                    name: { ar: "الجيزة", en: "Giza" },
                    shipping_price: 60,
                },
                {
                    name: { ar: "القليوبية", en: "Qalyubia" },
                    shipping_price: 60,
                },
                {
                    name: { ar: "الشرقية", en: "Sharqia" },
                    shipping_price: 70,
                },
                {
                    name: { ar: "الغربية", en: "Gharbia" },
                    shipping_price: 65,
                },
                {
                    name: { ar: "المنوفية", en: "Monufia" },
                    shipping_price: 65,
                },
                {
                    name: { ar: "الدقهلية", en: "Dakahlia" },
                    shipping_price: 70,
                },
                {
                    name: { ar: "دمياط", en: "Damietta" },
                    shipping_price: 70,
                },
                {
                    name: { ar: "البحيرة", en: "Beheira" },
                    shipping_price: 65,
                },
                {
                    name: { ar: "بورسعيد", en: "Port Said" },
                    shipping_price: 75,
                },
                {
                    name: { ar: "الإسماعيلية", en: "Ismailia" },
                    shipping_price: 75,
                },
                {
                    name: { ar: "السويس", en: "Suez" },
                    shipping_price: 75,
                },
                {
                    name: { ar: "بني سويف", en: "Beni Suef" },
                    shipping_price: 80,
                },
                {
                    name: { ar: "الفيوم", en: "Fayoum" },
                    shipping_price: 80,
                },
                {
                    name: { ar: "المنيا", en: "Minya" },
                    shipping_price: 85,
                },
                {
                    name: { ar: "أسيوط", en: "Assiut" },
                    shipping_price: 85,
                },
                {
                    name: { ar: "سوهاج", en: "Sohag" },
                    shipping_price: 90,
                },
                {
                    name: { ar: "قنا", en: "Qena" },
                    shipping_price: 95,
                },
                {
                    name: { ar: "الأقصر", en: "Luxor" },
                    shipping_price: 95,
                },
                {
                    name: { ar: "أسوان", en: "Aswan" },
                    shipping_price: 100,
                },
                {
                    name: { ar: "البحر الأحمر", en: "Red Sea" },
                    shipping_price: 120,
                },
                {
                    name: { ar: "مطروح", en: "Matrouh" },
                    shipping_price: 110,
                },
                {
                    name: { ar: "شمال سيناء", en: "North Sinai" },
                    shipping_price: 140,
                },
                {
                    name: { ar: "جنوب سيناء", en: "South Sinai" },
                    shipping_price: 140,
                },
                {
                    name: { ar: "الوادي الجديد", en: "New Valley" },
                    shipping_price: 150,
                }
            ],
        };
    },
    computed: {
        ...mapState("cart", [
            "cart",
        ]),
        dir() {
            return document.documentElement.dir || 'ltr';
        },
        lang() {
            return document.documentElement.lang || 'en';
        },
    },

    methods: {
        ...mapActions("cart", [
            "updateQuantity",
            "remove",
            "clear",
        ]),
    },
};
</script>
