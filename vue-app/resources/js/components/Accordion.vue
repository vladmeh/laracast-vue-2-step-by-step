<template>
    <div class="ais-result">
        <accordion-item
            v-for="(item, index) in items"
            :item = "item"
            :key="index"
            :is-open="activeItemIndex === index"
            @toggled="onToggle"
        ></accordion-item>
        <load-more container=".ais-result"></load-more>
    </div>

</template>

<script>
    import AccordionItem from "./AccordionItem";
    import LoadMore from "./LoadMore";

    export default {
        name: "Accordion",
        components: {
            AccordionItem,
            LoadMore
        },
        props: ['items'],
        data() {
            return {
                activeItemIndex: null
            }
        },
        methods: {
            onToggle(index){
                if (this.activeItemIndex === index){
                    return this.activeItemIndex = null;
                }
                this.activeItemIndex = index;
            }
        }
    }
</script>
