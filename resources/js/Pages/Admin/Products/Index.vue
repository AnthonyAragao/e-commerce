<script setup>
    import AdminLayout from '../../../Components/Layouts/AdminLayout.vue';

    const { products } = defineProps(["products"]);
</script>

<template>
    <AdminLayout>
        {{ products }}
    </AdminLayout>
</template>
