<template>
    <div class="box">
            <h3 v-text="title"
                class="title is-spaced cursor-pointer"
                @click="isOpen = ! isOpen"
            ></h3>

            <div v-html="body" v-show="isOpen" class="subtitle is-4"></div>
    </div>
</template>

<script>
    export default {
        name: "Accordion",
        props: ['title', 'body'],
        data() {
            return {
                isOpen: false
            };
        }
    }
</script>

<style scoped lang="scss">
    .cursor-pointer{
        &:hover{
            cursor: pointer;
        }
    }
</style>
