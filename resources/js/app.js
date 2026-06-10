require('./bootstrap');


import Vue from 'vue';
import VueInternationalization from 'vue-i18n';
import Locale from '../js/vue-i18n-locales.generated';
import store from "./store";


const lang = document.documentElement.lang.substr(0, 2);

Vue.use(VueInternationalization);

import Toasted from 'vue-toasted';

Vue.use(Toasted)

// or however you determine your current app locale

const i18n = new VueInternationalization({
    locale: lang,
    messages: Locale
});

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('v-cart', require('./components/CartComponent').default);
Vue.component('v-add-to-cart', require('./components/AddToCartComponent.vue').default);
Vue.component('v-cart-icon', require('./components/CartIconComponent.vue').default);

const app = new Vue({
    el: '#app',
    i18n,
    store,
});
