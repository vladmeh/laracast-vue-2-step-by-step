export default {
    template: `<div><h1>{{ notification }}</h1></div>`,

    props: ['message'],

    computed: {
        notification() {
            return this.message.toUpperCase();
        }
    },

    filters: {
        capitalize(message) {
            return message.toUpperCase();
        }
    }
};
