<script setup>
    import { reactive, ref } from 'vue';
    import TableTemplate from './TableTemplate.vue';
    import TableCell from './TableCell.vue';
    import ButtonDetails from '../Buttons/ButtonDetails.vue';
    const { headers, orders } = defineProps(['headers', 'orders']);

    const modals = reactive({})
    const modalPrevious = ref(null);

    const toggleModal = (id) => {
        if (modalPrevious.value !== null) {
            modals[modalPrevious.value] = false;
        }
        if (modalPrevious.value !== id) {
            modals[id] = true;
            modalPrevious.value = id;
        } else {
            modalPrevious.value = null;
        }
    }

    const closeModalPrevious = () => {
        modals[modalPrevious.value] = false;
    }

    const statusClasses = (status) => {
        return {
            'bg-yellow-200/70 text-yellow-600 dark:text-yellow-400 dark:bg-yellow-200/40'   : status === 'pending',
            'bg-red-300/40 text-red-400'                                                    : status === 'declined',
            'bg-green-200/80 text-green-500 dark:bg-green-200/20'                           : status !== 'pending' && status !== 'declined'
        }
    }

    const indicatorClasses = (status) => {
        return {
            'bg-yellow-500' : status === 'pending',
            'bg-red-400'    : status === 'declined',
            'bg-green-500'  : status !== 'pending' && status !== 'declined'
        }
    }
</script>

<template>
    <TableTemplate :headers="headers">
        <tr
            v-for="order in orders.data"
            :key="order.id"
            class="border-b dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-800 font-medium"
        >
            <TableCell isHeader="true">#{{ order.id }}</TableCell>
            <TableCell>{{ order.user.name }}</TableCell>
            <TableCell>{{ order.payment.payment_method }}</TableCell>
            <TableCell>{{ order.order_date }}</TableCell>
            <TableCell>
                <span
                    class="px-4 py-2 rounded-full text-xs font-semibold flex items-center w-fit"
                    :class="statusClasses(order.status)"
                >
                    <div class="h-2 w-2 rounded-full me-2" :class="indicatorClasses(order.status)"></div>
                    {{ order.status }}
                </span>
            </TableCell>
            <TableCell>${{ order.total_price }}</TableCell>
            <TableCell :customClass="'relative'">
                <button
                    @click.stop="toggleModal(order.id)"
                    class="w-full h-full text-start cursor-pointer"
                >
                    <i class="fas fa-ellipsis-h text-gray-500 hover:text-gray-700 dark:hover:text-gray-400"></i>
                </button>

                <Transition name="fade">
                    <div
                        v-if="modals[order.id]"
                        v-click-outside="closeModalPrevious"
                        class="absolute -translate-y-[8px] -left-[90px] w-fit py-2 bg-white dark:bg-[#1F2128] border border-gray-200 dark:border-gray-700 rounded-md shadow-md z-10"
                        data-modal
                    >
                        <!-- <Link
                            :href="`/admin/orders/${order.encrypted_id}`"
                            class="block px-4 text-gray-400 dark:text-gray-300 text-xs font-semibold"
                        >
                            View details
                        </Link> -->
                        <ButtonDetails
                            :href="`/admin/orders/${order.encrypted_id}`"
                        />
                    </div>
                </Transition>
            </TableCell>
        </tr>
    </TableTemplate>
</template>

<style scoped>
    .fade-enter-from {
        opacity: 0;
        transform: translateY(-30px);
    }
    .fade-enter-to {
        opacity: 1;
        transform: translateY(-8px);
    }
    .fade-enter-active,
    .fade-leave-active {
        transition: all 0.3s;
    }
    .fade-leave-from {
        opacity: 1;
        transform: translateY(-8px);
    }
    .fade-leave-to {
        opacity: 0;
        transform: translateY(-30px);
    }
</style>
