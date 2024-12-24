<script setup>
    import AdminLayout from '../../../Components/Layouts/AdminLayout.vue';
    import Breadcrumb from '../../../Components/Navigation/Breadcrumb.vue';

    const { products } = defineProps(["products"]);
</script>

<template>
    <AdminLayout>
        <h1 class="text-3xl font-bold">Products</h1>

        <!-- caminho da pagina -->
        <Breadcrumb :breadcrumbs="[
            { 'href': '/admin', 'name': 'Home' },
            { 'href': '', 'name': 'Products' }
        ]" />
    </AdminLayout>
</template>
