<script setup>
    import AdminLayout from '../../../Components/Layouts/AdminLayout.vue';
    import Breadcrumb from '../../../Components/Navigation/Breadcrumb.vue';
    import CardLayout from '../../../Components/Ui/Cards/CardLayout.vue';
</script>

<template>
    <AdminLayout>
        <h1 class="text-3xl font-bold">New Product</h1>

        <Breadcrumb :breadcrumbs="[
            { 'href': '/admin', 'name': 'Home' },
            { 'href': '/admin/products', 'name': 'Products' },
            { 'href': '', 'name': 'New Product' }
        ]" />

        <CardLayout>

        </CardLayout>
    </AdminLayout>
</template>
