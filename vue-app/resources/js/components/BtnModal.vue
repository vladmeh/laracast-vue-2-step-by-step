<template>
    <div>
        <a href="#" @click.prevent="showModal = true" v-text="title"></a>
        <modal v-if="showModal" @close="showModal= false">
            <slot></slot>
        </modal>
    </div>
</template>

<script>
    import Modal from './Modal';

    export default {
        name: "BtnModal",
        props: ['title'],
        data(){
            return {
                showModal: false
            }
        },
        components: {
            Modal
        }
    }
</script>

<style scoped>

</style>
