<script setup>
    import HeaderUser from "../Navigation/Headers/HeaderUser.vue";
    import Footer from '../Layouts/Footer.vue';
    const { categories } = defineProps(['categories']);
</script>

<template>
    <HeaderUser :categories="categories"/>
    
    <main class="min-h-[calc(100vh-4rem)]">
        <slot></slot>
    </main>

    <Footer/>
</template>
