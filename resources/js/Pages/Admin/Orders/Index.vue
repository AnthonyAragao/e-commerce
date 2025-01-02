<script setup>
    import AdminLayout from '../../../Components/Layouts/AdminLayout.vue';
    import Breadcrumb from '../../../Components/Navigation/Breadcrumb.vue';
    import CardLayout from '../../../Components/Ui/Cards/CardLayout.vue';

    const { orders } = defineProps(['orders']);

    const headers = [
        { label: 'Order ID' },
        { label: 'Customer name' },
        { label: 'Payment Method' },
        { label: 'Date' },
        { label: 'Status' },
        { label: 'Total' },
        { label: 'Actions' },
    ];
</script>

<template>
    <AdminLayout>
        <h1 class="text-3xl font-bold">Orders List</h1>

        <Breadcrumb :breadcrumbs="[
            { 'href': '/admin', 'name': 'Home' },
            { 'href': '', 'name': 'Orders' }
        ]" />


        <CardLayout>
            <h2 class="text-base font-bold mb-4">Recent Orders</h2>

            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-500 uppercase dark:text-gray-400 border-t border-b border-gray-200">
                    <tr>
                        <th
                            scope="col"
                            class="px-6 py-3"
                            v-for="header in headers"
                            :key="header.label"
                        >
                            {{ header.label }}
                        </th>
                    </tr>
                </thead>

                <tbody>
                    <tr class="border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            #25415
                        </th>
                        <td class="px-6 py-4">
                            John Doe
                        </td>
                        <td class="px-6 py-4">
                            Credit Card
                        </td>
                        <td class="px-6 py-4">
                            2021-09-15
                        </td>
                        <td class="px-6 py-4 flex items-center">
                            <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div> Completed
                        </td>
                        <td class="px-6 py-4">
                            $2999
                        </td>
                        <td class="px-6 py-4">
                            <i class="fas fa-ellipsis-h text-gray-500 cursor-pointer hover:text-gray-700"></i>
                        </td>
                    </tr>

                    <tr class="border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            #25415
                        </th>
                        <td class="px-6 py-4">
                            John Doe
                        </td>
                        <td class="px-6 py-4">
                            Credit Card
                        </td>
                        <td class="px-6 py-4">
                            2021-09-15
                        </td>
                        <td class="px-6 py-4 flex items-center">
                            <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div> Completed
                        </td>
                        <td class="px-6 py-4">
                            $2999
                        </td>
                        <td class="px-6 py-4">
                            <i class="fas fa-ellipsis-h text-gray-500 cursor-pointer hover:text-gray-700"></i>
                        </td>
                    </tr>
                </tbody>
            </table>


        </CardLayout>

    </AdminLayout>
</template>
