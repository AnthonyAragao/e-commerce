<script setup>
    import HeaderUser from "../../Components/Navigation/HeaderUser.vue";
    import Footer from '../Layouts/Footer.vue';
</script>

<template>

    <HeaderUser />
    <main class="p-7 mt-16 min-h-[calc(100vh-4rem)]">
                <slot></slot>
            </main>
    <Footer/>
   
</template>
