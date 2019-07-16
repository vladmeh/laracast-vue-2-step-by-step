import Vue from 'vue';
import axios from 'axios';
import Form from './core/Form';

import Example from './components/Example';
import Notification from './components/Notification';

window.axios = axios;
window.Form = Form;


new Vue({
    el: '#app',

    components: {
        Example,
        Notification
    },

    data: {
        form: new Form({
            name: '',
            description: ''
        })
    },

    methods: {
        onSubmit() {
            this.form.post('/projects')
                .then(response => alert('Wahoo!'));
        }
    }
});

window.store = {
    user: {
        name: 'John Doe',
    }
};

new Vue({
    el: '#one',

    data: {
        foo: 'bar',
        shared: store
    },
});

new Vue({
    el: '#two',

    data: {
        foo: 'other',
        shared: store
    },
});
