<script setup>
    import AdminLayout from '../../../Components/Layouts/AdminLayout.vue';
    import Breadcrumb from '../../../Components/Navigation/Breadcrumb.vue';
    import CardLayout from '../../../Components/Ui/Cards/CardLayout.vue';
    import TableCustomers from '../../../Components/Ui/Tables/TableCustomers.vue';
    import Pagination from '../../../Components/Navigation/Pagination.vue';

    const { customers } = defineProps(["customers"]);

    const breadcrumbs = [
        { 'href': '/admin', 'name': 'Home' },
        { 'href': '', 'name': 'Customers' }
    ];

    const headers = ['Name', 'Email', 'Phone', 'Total Orders', 'Total Spent', 'Actions'];
</script>

<template>
    <AdminLayout>
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-3xl font-bold">
                    Customers
                </h1>

                <Breadcrumb :breadcrumbs="breadcrumbs"/>
            </div>
        </div>

        <CardLayout customClass='mt-7'>
            <h2 class="text-base font-bold mb-4"> Customers List </h2>

            <TableCustomers
                :headers="headers"
                :customers="customers"
            />
        </CardLayout>

        <Pagination :pagination="customers" class="mb-4"/>
    </AdminLayout>
</template>
