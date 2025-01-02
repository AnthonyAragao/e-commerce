<script setup>
    import { onMounted, ref } from 'vue';
    import AdminLayout from '../../../Components/Layouts/AdminLayout.vue';
    import Breadcrumb from '../../../Components/Navigation/Breadcrumb.vue';
    import CardLayout from '../../../Components/Ui/Cards/CardLayout.vue';

    const { orders } = defineProps(['orders']);

    const loading = ref(true);
    const rows = ref([]);

    const headers = [
        { label: 'Order ID' },
        { label: 'Customer name' },
        { label: 'Payment Method' },
        { label: 'Date' },
        { label: 'Status' },
        { label: 'Total' },
        { label: 'Actions' },
    ];

    onMounted(() => { setTimeout(() => {
        rows.value = [
            {
                id: 25415,
                name: "John Doe",
                payment_method: "Credit Card",
                date: "2021-09-15",
                status: "Completed",
                price: 2999,
            },
            {
                id: 25416,
                name: "Jane Smith",
                payment_method: "PayPal",
                date: "2021-09-16",
                status: "Pending",
                price: 1999,
            },
            ];
            loading.value = false;
        }, 2000);
    });
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
                    <template v-if="loading">
                        <tr
                            v-for="i in 5"
                            :key="i"
                            class="border-b dark:border-gray-700 animate-pulse"
                        >
                            <td
                                v-for="header in headers"
                                :key="header.label"
                                class="px-6 py-4"
                            >
                                <div class="h-4 bg-gray-300 dark:bg-gray-600 rounded"></div>
                            </td>
                        </tr>
                    </template>

                    <template v-else>
                        <tr
                            v-for="row in rows"
                            :key="row.id"
                            class="border-b dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-700"
                        >
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                #{{ row.id }}
                            </th>
                            <td class="px-6 py-4">{{ row.name }}</td>
                            <td class="px-6 py-4">{{ row.payment_method }}</td>
                            <td class="px-6 py-4">{{ row.date }}</td>
                            <td class="px-6 py-4 flex items-center">
                                <div
                                    class="h-2.5 w-2.5 rounded-full me-2"
                                    :class="row.status === 'Completed' ? 'bg-green-500' : 'bg-red-500'"
                                ></div>
                                {{ row.status }}
                            </td>
                            <td class="px-6 py-4">${{ row.price }}</td>
                            <td class="px-6 py-4">
                                <i class="fas fa-ellipsis-h text-gray-500 cursor-pointer hover:text-gray-700"></i>
                            </td>
                        </tr>
                    </template>
                </tbody>
            </table>

        </CardLayout>
    </AdminLayout>
</template>
