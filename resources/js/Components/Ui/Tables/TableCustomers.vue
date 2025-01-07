<script setup>
    import { reactive } from 'vue';
    import TableTemplate from './TableTemplate.vue';
    import TableCell from './TableCell.vue';

    const { headers, customers } = defineProps(['headers', 'customers']);
    const modals = reactive({})

    const toggleModal = (id) => {
        if (modals[id]) {
            closeAllModals();
            return;
        }

        closeAllModals();
        modals[id] = !modals[id];
    }

    const closeAllModals = () => {
        for (const key in modals) {
            modals[key] = false;
        }
    }
</script>

<template>
    <TableTemplate :headers="headers">
        <tr
            v-for="customer in customers.data"
            :key="customer.id"
            class="border-b dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-800 font-medium"
        >
            <TableCell isHeader="true">{{ customer.name }}</TableCell>
            <TableCell>{{ customer.email }}</TableCell>
            <TableCell>{{ customer.phone }}</TableCell>
            <TableCell>{{ customer.total_orders }}</TableCell>
            <TableCell>{{ customer.total_spent }}</TableCell>

            <TableCell :customClass="'relative'">
                <button
                    @click.stop="toggleModal(customer.id)"
                >
                    <i class="fas fa-ellipsis-h text-gray-500 cursor-pointer hover:text-gray-700 dark:hover:text-gray-400"></i>
                </button>

                <Transition name="fade">
                    <div
                        v-if="modals[customer.id]"
                        v-click-outside="closeAllModals"
                        class="absolute left-[-60px] w-fit mt-2 py-2 bg-white dark:bg-[#1F2128] border border-gray-200 dark:border-gray-700 rounded-md shadow-md z-10"
                        data-modal
                    >
                        <Link
                            :href="`/admin/orders/${customer.encrypted_id}`"
                            class="block px-4 text-gray-400 dark:text-gray-300 text-xs font-semibold"
                        >
                            View details
                        </Link>
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
