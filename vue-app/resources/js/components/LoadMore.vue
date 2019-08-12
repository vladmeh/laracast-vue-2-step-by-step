<template>
    <div></div>
</template>

<script>
    import $ from 'jquery';
    import {throttle} from 'lodash';

    export default {
        name: "LoadMore",

        props: {
            container: {}
        },

        mounted() {
            window.addEventListener('scroll', this.loadMore);
        },

        methods: {
            loadMore: throttle(function (e) {
                if (this.shouldLoadMore()) {
                    this.$emit('ready');
                }
            }, 300),

            shouldLoadMore(){
                let containerHeight = $(this.container).height();

                let distanceFromWindowTop = $(this.container).offset().top;

                return (
                    window.pageYOffset >=
                    (distanceFromWindowTop + containerHeight) * 0.7
                );
            },
        }
    }
</script>

<style scoped>

</style>
