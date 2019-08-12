<script>
    export default {
        name: 'Render',
        data() {
            return {
                name: 'Jon Doe'
            }
        },
        render(element) {
            return element("div", { attrs: { id: "foobar", class: "box"}}, [
                element("h1", {class: ["title", "is-1"]}, this.name),
                element("h2", {class: "subtitle"}, this.name),
            ]);
        }
    }
</script>
