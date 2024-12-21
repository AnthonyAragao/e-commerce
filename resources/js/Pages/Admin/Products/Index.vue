<script setup>
    import AdminLayout from '../../../Components/Layouts/AdminLayout.vue';

    const { products } = defineProps(["products"]);
</script>

<template>
    <AdminLayout>
        <h3>Produtos</h3>
    </AdminLayout>
</template>
