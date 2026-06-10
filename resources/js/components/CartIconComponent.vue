<template>
    <a href="/cart" class="nav-icon-btn">
        <i class="bi bi-bag"></i>
        <span class="badge-dot"></span>
        <span v-if="cart.items_count > 0" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
            {{ cart.items_count }}
        </span>
    </a>
</template>

<script>
import { mapState, mapActions } from "vuex";

export default {
    computed: {
        ...mapState("cart", [
            "cart",
        ]),
    },

    mounted() {
        this.fetchCart();
    },
    methods: {
        ...mapActions("cart", [
            "fetchCart",
        ]),
    },
}
</script>
