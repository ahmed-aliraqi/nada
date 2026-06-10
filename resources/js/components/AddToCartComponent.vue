<template>
    <div>
        <!-- Quantity -->
        <div style="display:flex; align-items:center; gap:20px; margin-bottom:2rem; flex-wrap:wrap;">
            <div class="variant-label" style="margin-bottom:0;">{{ $t('Quantity') }}</div>

            <div class="quantity-selector" style="margin-bottom:0;">
                <button class="quantity-btn" @click.prevent="decreaseQuantity">−</button>

                <input type="text" class="quantity-input" v-model="quantity" readonly>

                <button class="quantity-btn" @click.prevent="increaseQuantity">+</button>
            </div>
        </div>

        <!-- Action buttons -->
        <div style="display:flex;gap:12px;margin-bottom:2rem;flex-wrap:wrap;">
            <a href="#" @click.prevent="add" class="btn-gold" style="flex:1;min-width:200px;justify-content:center;">
                <span>{{ $t('Add to Cart') }}</span>
                <i class="bi bi-bag"></i>
            </a>
        </div>
    </div>
</template>

<script>
import { mapActions } from "vuex";

export default {
    props: {
        productId: {
            required: true,
        }
    },

    data() {
        return {
            quantity: 1,
        }
    },

    methods: {
        ...mapActions("cart", ["updateQuantity"]),

        increaseQuantity() {
            this.quantity++
        },

        decreaseQuantity() {
            if (this.quantity === 1) return
            this.quantity--
        },

        add() {
            this.updateQuantity({
                productId: this.productId,
                quantity: this.quantity
            }).then(() => {
                this.$toasted.show(this.$t('Product added to cart'), {
                    duration: 3000
                })
            })
        }
    }
}
</script>
