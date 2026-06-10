export default {
    namespaced: true,

    state: {
        cart: {
            items: [],
            items_count: 0,
            subtotal: 0,
            coupon: null,
            discount: 0,
            shipping: 0,
            total: 0,
            token: localStorage.getItem('cart-token'),
        }
    },

    mutations: {
        SET_CART(state, payload) {
            Object.assign(state.cart, payload);
            localStorage.setItem("cart-token", payload.token);
        },
    },

    actions: {
        async fetchCart({ commit, state }) {
            const res = await axios.get("/api/cart?token=" + state.cart.token);
            commit("SET_CART", res.data);
        },

        async updateQuantity({ dispatch, state }, payload) {
            if (payload.quantity > 0) {
                const res = await axios.post("/api/cart/add", {
                    product_id: payload.productId,
                    quantity: payload.quantity,
                    token: state.cart.token,
                });

                dispatch("sync", res);
            } else {
                dispatch('remove', payload.productId);
            }
        },

        async remove({ dispatch, state }, productId) {
            const res = await axios.post("/api/cart/remove", {
                product_id: productId,
                token: state.cart.token,
            });

            dispatch("sync", res);
        },

        async clear({ dispatch, state }) {
            const res = await axios.delete("/api/cart/clear", {
                data: { token: state.cart.token },
            });

            dispatch("sync", res);
        },

        async setShipping({ dispatch, state }, shippingPrice) {
            const res = await axios.post("/api/cart/shipping", {
                shipping_price: shippingPrice,
                token: state.cart.token,
            });

            dispatch("sync", res);
        },

        sync({ commit }, res) {
            commit("SET_CART", res.data);
        },
    },
};
