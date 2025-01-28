<script setup>
    import HeaderUser from "../Navigation/Headers/HeaderUser.vue";
    import Footer from '../Layouts/Footer.vue';
</script>

<template>
    <HeaderUser />

    <main class="p-2 min-h-[calc(100vh-4rem)]">
        <slot></slot>
    </main>

    <Footer/>
</template>
