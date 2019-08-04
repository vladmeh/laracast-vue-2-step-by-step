<template>
    <div>
        <accordion-item
            v-for="(item, index) in items"
            :item = "item"
            :key="index"
            :is-open="activeItemIndex === index"
            @toggled="onToggle"
        ></accordion-item>
    </div>

</template>

<script>
    import AccordionItem from "./AccordionItem";
    export default {
        name: "Accordion",
        components: {AccordionItem},
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
