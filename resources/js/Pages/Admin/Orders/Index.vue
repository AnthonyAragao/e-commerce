<script setup>
    import AdminLayout from '../../../Components/Layouts/AdminLayout.vue';
    import Breadcrumb from '../../../Components/Navigation/Breadcrumb.vue';
    import CardLayout from '../../../Components/Ui/Cards/CardLayout.vue';
    import Pagination from '../../../Components/Navigation/Pagination.vue';
    import OrdersTable from '../../../Components/Ui/Tables/OrdersTable.vue';
    import SelectInput from '../../../Components/Ui/Selects/SelectInput.vue';

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


        <!-- filtros -->
        <div class="flex items-end justify-between mt-7 text-gray-500 font-medium">
            <div class="flex gap-4">

                <div class="w-[300px]">
                    <SelectInput
                        name="category"
                        :customClass="'py-3 rounded-lg border border-gray-100 shadow-sm'"
                    >
                        <option value="">Status</option>
                        <option>this is a test</option>
                        <option>this is a test</option>
                    </SelectInput>
                </div>

                <div class="w-[300px]">
                    <SelectInput
                        name="category"
                        :customClass="'py-3 rounded-lg border border-gray-100 shadow-sm'"
                    >
                        <option value="">Payment Method</option>
                        <option>this is a test</option>
                        <option>this is a test</option>
                    </SelectInput>
                </div>
            </div>

            <button
                class="bg-white px-6 py-3 rounded-lg border border-gray-100 shadow-sm transition duration-300 hover:bg-gray-50 hover:border-gray-100 dark:bg-[#1F2128] dark:border-gray-700 dark:text-white dark:hover:bg-gray-800"
            >
                <i class="fas fa-filter me-2"></i> Apply
            </button>
        </div>

        <CardLayout :customClass="'mt-7'">
            <h2 class="text-base font-bold mb-4">Recent Orders</h2>


            <OrdersTable
                :headers="headers"
                :orders="orders"
            />
        </CardLayout>

        <Pagination :pagination="orders" class="mb-4"/>
    </AdminLayout>
</template>
