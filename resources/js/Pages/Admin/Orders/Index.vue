<script setup>
    import AdminLayout from '../../../Components/Layouts/AdminLayout.vue';
    import Breadcrumb from '../../../Components/Navigation/Breadcrumb.vue';
    import CardLayout from '../../../Components/Ui/Cards/CardLayout.vue';
    import Pagination from '../../../Components/Navigation/Pagination.vue';
    import TableOrders from '../../../Components/Ui/Tables/TableOrders.vue';
    import FilterOrders from '../../../Components/Navigation/FilterOrders.vue';

    const { orders } = defineProps(['orders']);

    const headers = ['Order ID', 'Customer name', 'Payment Method', 'Date', 'Status', 'Total', 'Actions',];
</script>

<template>
    <AdminLayout>
        <h1 class="text-3xl font-bold">Orders List</h1>

        <Breadcrumb :breadcrumbs="[
            { 'href': '/admin', 'name': 'Home' },
            { 'href': '', 'name': 'Orders' }
        ]" />

        <FilterOrders />

        <CardLayout customClass='mt-7'>
            <h2 class="text-base font-bold mb-4">Recent Orders</h2>

            <TableOrders
                :headers="headers"
                :orders="orders"
            />
        </CardLayout>

        <Pagination :pagination="orders" class="mb-4"/>
    </AdminLayout>
</template>
