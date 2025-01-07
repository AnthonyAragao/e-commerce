<script setup>
    import { reactive , ref} from 'vue';
    import TableTemplate from './TableTemplate.vue';
    import TableCell from './TableCell.vue';

    const { headers, customers } = defineProps(['headers', 'customers']);

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
                    class="w-full h-full text-start cursor-pointer"
                >
                    <i class="fas fa-ellipsis-h text-gray-500 hover:text-gray-700 dark:hover:text-gray-400"></i>
                </button>

                <Transition name="fade">
                    <div
                        v-if="modals[customer.id]"
                        v-click-outside="closeModalPrevious"
                        class="absolute -translate-y-[8px] -left-[90px] w-fit py-2 bg-white dark:bg-[#1F2128] border border-gray-200 dark:border-gray-700 rounded-md shadow-md z-10"
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
