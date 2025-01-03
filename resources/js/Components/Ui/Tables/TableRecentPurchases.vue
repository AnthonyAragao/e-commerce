<script setup>
    import { reactive } from 'vue';
    import TableTemplate from './TableTemplate.vue';
    import TableCell from './TableCell.vue';

    const headers = ['Order ID', 'Products', 'Date', 'Customer Name', 'Status', 'Amount', 'Actions'];
    const orders = reactive({
        data: [
            {
                id: 1,
                user: { name: 'John Doe' },
                payment: { payment_method: 'Credit Card' },
                order_date: '2023-10-01',
                status: 'pending',
                total_price: 100.00
            },
            {
                id: 2,
                user: { name: 'Jane Smith' },
                payment: { payment_method: 'PayPal' },
                order_date: '2023-10-02',
                status: 'completed',
                total_price: 150.00
            },
        ]
    });

    const modals = reactive({});

    const toggleModal = (id) => {
        for (const key in modals) {
            modals[key] = false;
        }

        modals[id] = !modals[id];
    };
</script>

<template>
    <TableTemplate :headers="headers">
        <tr
            v-for="order in orders.data"
            :key="order.id"
            class="border-b dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-800 font-medium"
        >
            <TableCell isHeader="true"> #{{ order.id }}</TableCell>
            <TableCell> {{ order.user.name }} </TableCell>
            <TableCell> {{ order.payment.payment_method }} </TableCell>
            <TableCell> {{ order.order_date }} </TableCell>
            <TableCell :customClass="'flex items-center'">
                <div
                    class="h-2.5 w-2.5 rounded-full me-2"
                    :class="{
                        'bg-yellow-500': order.status === 'pending',
                        'bg-red-400'   : order.status === 'declined',
                        'bg-green-500' : order.status !== 'pending' && order.status !== 'declined'
                    }"
                ></div>
                {{ order.status }}

            </TableCell>
            <TableCell> ${{ order.total_price }} </TableCell>
            <TableCell :customClass="'relative'">
                <button
                    @click.stop="toggleModal(order.id)"
                >
                    <i class="fas fa-ellipsis-h text-gray-500 cursor-pointer hover:text-gray-700 dark:hover:text-gray-400"></i>
                </button>

                <Transition name="fade">
                    <div
                        v-if="modals[order.id]"
                        v-click-outside="() => (modals[order.id] = false)"
                        class="absolute left-[-60px] w-fit mt-2 py-2 bg-white dark:bg-[#1F2128] border border-gray-200 dark:border-gray-700 rounded-md shadow-md z-10"
                    >
                        <a
                            :href="`/admin/orders/${order.id}`"
                            class="block px-4 text-gray-400 dark:text-gray-300 text-xs font-semibold"
                        >
                            View details
                        </a>
                    </div>
                </Transition>
            </TableCell>
        </tr>
    </TableTemplate>
</template>

<style scoped>
    .fade-enter-from {
        opacity: 0;
        transform: translateY(-10px);
    }
    .fade-enter-to {
        opacity: 1;
        transform: translateY(0);
    }
    .fade-enter-active,
    .fade-leave-active {
        transition: all 0.3s;
    }
    .fade-leave-from {
        opacity: 1;
        transform: translateY(0);
    }
    .fade-leave-to {
        opacity: 0;
        transform: translateY(-10px);
    }
</style>
