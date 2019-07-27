import Vue from 'vue';

import Coupon from './components/Coupon';
import MenuList from './components/MenuList';

new Vue({
    el: '#app',

    data: {
        coupon: 'FREEBIE',
    },

    components: {
        Coupon,
        MenuList
    }
});
