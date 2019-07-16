<template>
    <div class="notification">
        <h1>{{ message }}</h1>
    </div>
</template>

<script>
    export default {
        name: "Notification",
        data() {
            return {
                message: 'Hello World'
            };
        }
    }
</script>

<style scoped lang="scss">
    .notification {
        background: #e3e3e3;
    }
</style>