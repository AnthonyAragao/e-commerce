<script setup>
    import AdminLayout from '../../Components/Layouts/AdminLayout.vue';
    import Breadcrumb from '../../Components/Navigation/Breadcrumb.vue';
</script>

<template>
    <AdminLayout>
        <h1 class="text-3xl font-bold">Dashboard</h1>
        
        <Breadcrumb :breadcrumbs="[
            { 'href': '/admin', 'name': 'Home' },
            { 'href': '', 'name': 'Dashboard' }
        ]" />
    </AdminLayout>
</template>
