<template>
    <div>
        <!-- ===== ORDER SUCCESS ===== -->
        <section v-if="orderSuccess" class="luxury-section" style="padding-top: 60px; padding-bottom: 60px;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="empty-state">
                            <div class="empty-icon-wrap">
                                <div class="empty-icon-ring"></div>
                                <div class="empty-icon-ring"></div>
                                <div class="empty-icon-circle" style="background: linear-gradient(135deg, #4CAF50, #388E3C);">
                                    <i class="bi bi-check-lg"></i>
                                </div>
                            </div>
                            <h2 class="empty-title">{{ $t('Order Placed Successfully') }}</h2>
                            <p class="empty-desc">{{ $t('Thank you for your order!') }}</p>
                            <p style="color: var(--accent-gold); font-size: 1.1rem; margin-bottom: 2rem;">
                                {{ $t('Order number') }}: <strong>#{{ orderId }}</strong>
                            </p>
                            <p class="empty-desc" style="margin-top: -1rem;">
                                {{ $t('We will contact you shortly to confirm your order.') }}
                            </p>
                            <div class="empty-actions">
                                <a href="/shop" class="btn-gold">
                                    <span>{{ $t('Explore Collection') }}</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== CART WITH ITEMS ===== -->
        <section v-else-if="cart.items_count > 0" class="luxury-section" style="padding-top: 20px;">
            <div class="container">
                <div class="row g-5">
                    <!-- ===== CART ITEMS ===== -->
                    <div class="col-lg-8">

                        <div class="cart-header-bar d-none d-lg-grid">
                            <span>{{ $t('Product') }}</span>
                            <span></span>
                            <span>{{ $t('Price') }}</span>
                            <span>{{ $t('Qty') }}</span>
                            <span></span>
                        </div>

                        <div class="cart-item" v-for="item in cart.items" :key="item.id">
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
                            <button :data-id="item.id" @click.prevent="remove(item.id)" class="cart-remove-btn">
                                <i class="bi bi-x-lg"></i>
                            </button>
                        </div>

                        <div style="padding-top: 2rem; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem;">
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
                                        <select class="city-select" v-model="form.city" @change="onCityChange">
                                            <option value="" disabled>{{ $t('Select your city') }}</option>
                                            <option v-for="city in cities" :key="city.name.en" :value="city.name[lang]">
                                                {{ city.name[lang] }}
                                            </option>
                                        </select>
                                    </div>
                                    <span v-if="errors.city" class="cart-field-error">{{ errors.city[0] }}</span>
                                    <span v-if="formErrors.city" class="cart-field-error">{{ formErrors.city }}</span>
                                </div>

                                <div class="delivery-divider"></div>

                                <!-- Full Name -->
                                <div class="delivery-form-group">
                                    <label class="delivery-form-label">{{ $t('Full Name') }}</label>
                                    <input type="text" class="delivery-form-input" v-model="form.full_name"
                                           :placeholder="$t('Full Name')"
                                           :class="{ 'is-invalid': errors.full_name }">
                                    <span v-if="errors.full_name" class="cart-field-error">{{ errors.full_name[0] }}</span>
                                </div>

                                <!-- Phone + Email -->
                                <div class="delivery-form-row">
                                    <div class="delivery-form-group">
                                        <label class="delivery-form-label">{{ $t('Phone Number') }}</label>
                                        <input type="tel" class="delivery-form-input" v-model="form.phone"
                                               placeholder="+20 1XX XXX XXXX"
                                               :class="{ 'is-invalid': errors.phone }">
                                        <span v-if="errors.phone" class="cart-field-error">{{ errors.phone[0] }}</span>
                                    </div>
                                    <div class="delivery-form-group">
                                        <label class="delivery-form-label">
                                            {{ $t('Email Address') }}
                                            <span style="color:var(--text-muted);text-transform:none;letter-spacing:0;font-weight:400;">({{ $t('Optional') }})</span>
                                        </label>
                                        <input type="email" class="delivery-form-input" v-model="form.email"
                                               placeholder="your@email.com"
                                               :class="{ 'is-invalid': errors.email }">
                                        <span v-if="errors.email" class="cart-field-error">{{ errors.email[0] }}</span>
                                    </div>
                                </div>

                                <!-- Address -->
                                <div class="delivery-form-group">
                                    <label class="delivery-form-label">{{ $t('Detailed Address') }}</label>
                                    <textarea class="delivery-form-input" rows="3" v-model="form.address"
                                              :placeholder="$t('Detailed Address')"
                                              :class="{ 'is-invalid': errors.address }"></textarea>
                                    <span v-if="errors.address" class="cart-field-error">{{ errors.address[0] }}</span>
                                </div>

                                <!-- Delivery Notes -->
                                <div class="delivery-form-group" style="margin-bottom: 0;">
                                    <label class="delivery-form-label">
                                        {{ $t('Delivery Notes') }}
                                        <span style="color:var(--text-muted);text-transform:none;letter-spacing:0;font-weight:400;">({{ $t('Optional') }})</span>
                                    </label>
                                    <textarea class="delivery-form-input" rows="2" v-model="form.delivery_notes"
                                              :placeholder="$t('Delivery Notes')"></textarea>
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

                                <div class="cart-summary-row">
                                    <span class="label">{{ $t('Subtotal') }} ({{ cart.items_count }} {{ $t('items') }})</span>
                                    <span class="value">{{ cart.subtotal }}</span>
                                </div>
                                <div class="cart-summary-row">
                                    <span class="label">{{ $t('Shipping') }}</span>
                                    <span class="value">{{ selectedCity ? cart.shipping : '—' }}</span>
                                </div>

                                <div class="cart-summary-row total">
                                    <span class="label">{{ $t('Total') }}</span>
                                    <span class="value">{{ selectedCity ? cart.total : cart.subtotal }}</span>
                                </div>
                            </div>

                            <!-- Payment Method -->
                            <div style="padding: 1.25rem 1.5rem; border-top: 1px solid rgba(224,176,128,0.15);">
                                <div style="display:flex;align-items:center;gap:10px;color:var(--text-secondary);font-size:0.9rem;">
                                    <i class="bi bi-cash-coin" style="color:var(--accent-gold);font-size:1.2rem;"></i>
                                    <span>{{ $t('Cash on Delivery') }}</span>
                                </div>
                            </div>

                            <div class="cart-summary-footer">
                                <div v-if="formErrors.general" style="color:#E07A75;font-size:0.85rem;margin-bottom:10px;text-align:center;">
                                    {{ formErrors.general }}
                                </div>
                                <button @click.prevent="placeOrder"
                                        class="btn-gold w-100 justify-content-center"
                                        style="margin-bottom: 12px; border: none; cursor: pointer;"
                                        :disabled="loading">
                                    <span v-if="loading">{{ $t('Placing Order...') }}</span>
                                    <span v-else>{{ $t('Place Order') }}</span>
                                    <i v-if="!loading" :class="`bi bi-arrow-${dir === 'ltr' ? 'right' : 'left'}`"></i>
                                    <i v-if="loading" class="bi bi-hourglass-split"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== EMPTY STATE ===== -->
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
                                {{ $t('Looks like you haven\'t added any products yet. Explore our collection and find something you love.') }}
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
    </div>
</template>

<script>
import { mapState, mapActions } from "vuex";

export default {
    data() {
        return {
            form: {
                full_name: '',
                phone: '',
                email: '',
                address: '',
                delivery_notes: '',
                city: '',
                shipping_price: 0,
            },
            loading: false,
            errors: {},
            formErrors: {},
            orderSuccess: false,
            orderId: null,
            cities: [
                { name: { ar: "الإسكندرية", en: "Alexandria" }, shipping_price: 65 },
                { name: { ar: "القاهرة", en: "Cairo" }, shipping_price: 60 },
                { name: { ar: "الجيزة", en: "Giza" }, shipping_price: 60 },
                { name: { ar: "القليوبية", en: "Qalyubia" }, shipping_price: 60 },
                { name: { ar: "الشرقية", en: "Sharqia" }, shipping_price: 70 },
                { name: { ar: "الغربية", en: "Gharbia" }, shipping_price: 65 },
                { name: { ar: "المنوفية", en: "Monufia" }, shipping_price: 65 },
                { name: { ar: "الدقهلية", en: "Dakahlia" }, shipping_price: 70 },
                { name: { ar: "دمياط", en: "Damietta" }, shipping_price: 70 },
                { name: { ar: "البحيرة", en: "Beheira" }, shipping_price: 65 },
                { name: { ar: "بورسعيد", en: "Port Said" }, shipping_price: 75 },
                { name: { ar: "الإسماعيلية", en: "Ismailia" }, shipping_price: 75 },
                { name: { ar: "السويس", en: "Suez" }, shipping_price: 75 },
                { name: { ar: "بني سويف", en: "Beni Suef" }, shipping_price: 80 },
                { name: { ar: "الفيوم", en: "Fayoum" }, shipping_price: 80 },
                { name: { ar: "المنيا", en: "Minya" }, shipping_price: 85 },
                { name: { ar: "أسيوط", en: "Assiut" }, shipping_price: 85 },
                { name: { ar: "سوهاج", en: "Sohag" }, shipping_price: 90 },
                { name: { ar: "قنا", en: "Qena" }, shipping_price: 95 },
                { name: { ar: "الأقصر", en: "Luxor" }, shipping_price: 95 },
                { name: { ar: "أسوان", en: "Aswan" }, shipping_price: 100 },
                { name: { ar: "البحر الأحمر", en: "Red Sea" }, shipping_price: 120 },
                { name: { ar: "مطروح", en: "Matrouh" }, shipping_price: 110 },
                { name: { ar: "شمال سيناء", en: "North Sinai" }, shipping_price: 140 },
                { name: { ar: "جنوب سيناء", en: "South Sinai" }, shipping_price: 140 },
                { name: { ar: "الوادي الجديد", en: "New Valley" }, shipping_price: 150 },
            ],
        };
    },

    computed: {
        ...mapState("cart", ["cart"]),

        dir() {
            return document.documentElement.dir || 'ltr';
        },

        lang() {
            return document.documentElement.lang || 'en';
        },

        selectedCity() {
            if (!this.form.city) return null;
            return this.cities.find(c => c.name[this.lang] === this.form.city) || null;
        },
    },

    methods: {
        ...mapActions("cart", ["updateQuantity", "remove", "clear", "setShipping"]),

        onCityChange() {
            if (this.selectedCity) {
                this.form.shipping_price = this.selectedCity.shipping_price;
                this.setShipping(this.selectedCity.shipping_price);
            }
        },

        async placeOrder() {
            this.errors = {};
            this.formErrors = {};

            if (!this.form.city) {
                this.formErrors.city = this.$t('Please select a city.');
                return;
            }

            if (!this.form.full_name || !this.form.phone || !this.form.address) {
                this.formErrors.general = this.$t('Please fill in all required fields.');
                return;
            }

            this.loading = true;

            try {
                const res = await axios.post('/api/orders', {
                    token:          this.cart.token,
                    full_name:      this.form.full_name,
                    phone:          this.form.phone,
                    email:          this.form.email,
                    address:        this.form.address,
                    delivery_notes: this.form.delivery_notes,
                    shipping_price: this.form.shipping_price,
                });

                this.$store.commit('cart/SET_CART', res.data.cart);
                this.orderId = res.data.order_id;
                this.orderSuccess = true;
            } catch (err) {
                if (err.response?.status === 422) {
                    this.errors = err.response.data.errors || {};
                } else {
                    this.formErrors.general = err.response?.data?.message || 'Something went wrong.';
                }
            } finally {
                this.loading = false;
            }
        },
    },
};
</script>
