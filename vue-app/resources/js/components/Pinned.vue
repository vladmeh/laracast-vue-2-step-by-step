<template>
    <nav class="navbar is-light" role="navigation" aria-label="main navigation">
        <slot></slot>
    </nav>
</template>

<script>
    // import {throttle} from 'lodash';

    export default {
        name: "Pinned",
        mounted() {
            let el = this.$el;
            let originalOffsetTop = this.$el.offsetTop;
            // window.addEventListener(
            //     'scroll',
            //     throttle(function () {
            //         el.classList[
            //             window.scrollY >= originalOffsetTop ? 'add' : 'remove'
            //             ]('is-fixed-top');
            //
            //     }, 300)
            // );
            window.addEventListener(
                'scroll',
                () => {
                    el.classList[
                        window.scrollY >= originalOffsetTop ? 'add' : 'remove'
                        ]('is-fixed-top');

                });
        }
    }
</script>

<style scoped lang="scss">

</style>
