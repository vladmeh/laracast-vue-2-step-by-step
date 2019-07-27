import Vue from 'vue';

import ExampleComponent from './components/ExampleComponent';
import Notification from './components/Notification';
import Coupon from './components/Coupon';
import MenuList from './components/MenuList';

new Vue({
    el: '#app',

    data: {
        coupon: 'FREEBIE',
    },

    components: {
        ExampleComponent,
        Notification,
        Coupon,
        MenuList
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

