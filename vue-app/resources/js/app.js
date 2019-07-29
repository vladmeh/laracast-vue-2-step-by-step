import Vue from 'vue';

import ExampleComponent from './components/ExampleComponent';
import Notification from './components/Notification';
import Coupon from './components/Coupon';
import MenuList from './components/MenuList';
import Carousel from './components/Carousel';
import Testimonials from './components/Testimonials';
import Modal from './components/BtnModal';

new Vue({
    el: '#app',

    data: {
        coupon: 'FREEBIE',
        showModal: false
    },

    components: {
        ExampleComponent,
        Notification,
        Coupon,
        MenuList,
        Carousel,
        Testimonials,
        Modal
    },
    methods: {
        onShowModal(){
            this.showModal = true;
        }
    }
});

if (document.getElementById('one') && document.getElementById('two')){
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

