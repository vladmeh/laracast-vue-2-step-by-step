<template>
    <div class="box">
        <h3 v-text="item.question"
            class="title is-spaced cursor-pointer"
            @click="toggle"
        ></h3>

        <div v-html="item.answer" v-show="isOpen" class="subtitle is-5"></div>
    </div>
</template>

<script>
    export default {
        name: "AccordionItem",
        props: ['item', 'isOpen'],
        methods: {
            toggle(){
                this.$emit('toggled', this.$vnode.key)
            }
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
