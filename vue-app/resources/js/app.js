import Vue from 'vue';
import VModal from 'vue-js-modal';
import VueSwal from 'vue-swal';
import PopperTooltip from 'tooltip.js';


Vue.use(VModal);
Vue.use(VueSwal);

import ExampleComponent from './components/ExampleComponent';
import Notification from './components/Notification';
import Coupon from './components/Coupon';
import MenuList from './components/MenuList';
import Carousel from './components/Carousel';
import Testimonials from './components/Testimonials';
import Modal from './components/BtnModal';
import SupportButton from './components/SupportButton';
import Accordion from './components/Accordion';
import Pinned from './components/Pinned';
import Tooltip from './components/Tooltip';
import Render from './components/Render';
import Count from './components/Count';
import ConditionalElement from './components/ConditionalElement';

Vue.directive('tooltip', {
    bind(elem, bindings){
        new PopperTooltip(elem, {
            placement: bindings.arg || 'top',
            title: bindings.value
        });
    }
});

Vue.component('tooltip', Tooltip);

new Vue({
    el: '#app',

    data: {
        coupon: 'FREEBIE',
        showModal: false
    },

    mounted() {
        document.querySelectorAll('[data-tooltip]').forEach(elem => {
            new PopperTooltip(elem, {
                placement: elem.dataset.tooltipPlacement || 'top',
                title: elem.dataset.tooltip
            });
        })
    },

    components: {
        ExampleComponent,
        Notification,
        Coupon,
        MenuList,
        Carousel,
        Testimonials,
        Modal,
        SupportButton,
        Accordion,
        Pinned,
        Render,
        Count,
        ConditionalElement
    },
    methods: {
        onShowModal() {
            this.showModal = true;
        }
    }
});

if (document.getElementById('one') && document.getElementById('two')) {
    let store = {
        user: {
            name: 'John Doe'
        }
    };

    new Vue({
        el: '#one',

        data: {
            foo: 'bar',
            shared: store
        }
    });

    new Vue({
        el: '#two',

        data: {
            foo: 'other',
            shared: store
        }
});
}

