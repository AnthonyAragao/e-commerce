<script setup>
    import AdminLayout from '../../../Components/Layouts/AdminLayout.vue';
    import Breadcrumb from '../../../Components/Navigation/Breadcrumb.vue';
    import CardLayout from '../../../Components/Ui/Cards/CardLayout.vue';

    const { order } = defineProps(['order']);
    console.log(order);
</script>

<template>
    <AdminLayout>
        <h1 class="text-3xl font-bold">Orders Details</h1>

        <Breadcrumb :breadcrumbs="[
            { 'href': '/admin', 'name': 'Home' },
            { 'href': '', 'name': 'Orders' }
        ]" />

        <CardLayout :customClass="'mt-7'">
        </CardLayout>
    </AdminLayout>
</template>
