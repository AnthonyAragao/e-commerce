<script setup>
    import { reactive } from 'vue';

    const { headers, orders } = defineProps(['headers', 'orders']);
    const modals = reactive({})

    const toggleModal = (id) => {
        closeAllModals();
        modals[id] = !modals[id];
    }

    const closeAllModals = () => {
        for (const key in modals) {
            modals[key] = false;
        }
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
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-500 uppercase dark:text-gray-400 border-t border-b border-gray-200 dark:border-gray-500">
            <tr>
                <th
                    scope="col"
                    class="px-6 py-3"
                    v-for="header in headers"
                    :key="header"
                >
                    {{ header }}
                </th>
            </tr>
        </thead>

        <tbody>
            <tr
                v-for="order in orders.data"
                :key="order.id"
                class="border-b dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-800 font-medium"
            >
                <th scope="row" class="px-6 py-4 text-gray-800 whitespace-nowrap dark:text-white">
                    #{{ order.id }}
                </th>
                <td class="px-6 py-4"> {{ order.user.name }} </td>
                <td class="px-6 py-4"> {{ order.payment.payment_method }} </td>
                <td class="px-6 py-4"> {{ order.order_date }} </td>
                <td class="px-6 py-4">
                    <span
                        class="px-4 py-2 rounded-full text-xs font-semibold flex items-center w-fit"
                        :class="statusClasses(order.status)"
                    >
                        <div
                            class="h-2 w-2 rounded-full me-2"
                            :class="indicatorClasses(order.status)"
                        ></div>  {{ order.status }}
                    </span>
                </td>
                <td class="px-6 py-4">${{ order.total_price }}</td>
                <td class="px-6 py-4 relative">
                    <button
                        @click.stop="toggleModal(order.id)"
                    >
                        <i class="fas fa-ellipsis-h text-gray-500 cursor-pointer hover:text-gray-700 dark:hover:text-gray-400"></i>
                    </button>

                    <Transition name="fade">
                        <div
                            v-if="modals[order.id]"
                            v-click-outside="closeAllModals"
                            class="absolute left-[-60px] w-fit mt-2 py-2 bg-white dark:bg-[#1F2128] border border-gray-200 dark:border-gray-700 rounded-md shadow-md z-10"
                            data-modal
                        >
                            <Link
                                :href="`/admin/orders/${order.id}`"
                                class="block px-4 text-gray-400 dark:text-gray-300 text-xs font-semibold"
                            >
                                View details
                            </Link>
                        </div>
                    </Transition>
                </td>
            </tr>
        </tbody>
    </table>
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
