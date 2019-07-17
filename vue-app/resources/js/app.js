import Vue from 'vue';

import Coupon from './components/Coupon';

new Vue({
    el: '#app',

    data: {
        coupon: 'FREEBIE',
    },

    components: {
        Coupon
    }
});
