<script setup>
    import { onMounted, reactive, ref } from "vue";
    import TableTemplate from "./TableTemplate.vue";
    import TableCell from "./TableCell.vue";
    import ButtonDetails from "../Buttons/ButtonDetails.vue";
    import StatusBadge from "../Badges/StatusBadge.vue";

    const isLoading = ref(false);
    const headers = [ "Order ID", "Products", "Date", "Customer Name", "Status", "Amount", "Actions" ];

    onMounted(() => {
        isLoading.value = true;
        setTimeout(() => {
            isLoading.value = false;
        }, 1000);
    })

    const orders = reactive({
        data: [
            {
                id: 1,
                user: { name: "John Doe" },
                product: "Apple Watch",
                payment: { payment_method: "Credit Card" },
                order_date: "2023-10-01",
                status: "pending",
                total_price: 100.0,
            },
            {
                id: 2,
                user: { name: "Jane Smith" },
                product: "iPhone 13",
                payment: { payment_method: "PayPal" },
                order_date: "2023-10-02",
                status: "completed",
                total_price: 150.0,
            },
        ],
    });

    const modals = reactive({});
    const modalPrevious = ref(null);

    const toggleModal = (id) => {
        if (modalPrevious.value !== null && modalPrevious.value !== id) {
            modals[modalPrevious.value] = false;
        }
        modals[id] = !modals[id];
        modalPrevious.value = modals[id] ? id : null;
    };

    const closeModalPrevious = () => {
        modals[modalPrevious.value] = false;
    };
</script>

<template>
    <TableTemplate :headers="headers">
        <template v-if="isLoading">
            <tr
                v-for="order in 8"
                :key="order"
                class="animate-pulse border-b dark:border-gray-700"
            >
                <TableCell
                    v-for="i in 7"
                    :key="i"
                >
                    <div class="h-4 bg-gray-200 rounded-full dark:bg-gray-700"></div>
                </TableCell>
            </tr>
        </template>


        <template v-else>
            <tr
                v-for="order in orders.data"
                :key="order.id"
                class="border-b dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-800 font-medium"
            >
                <TableCell isHeader="true"> #{{ order.id }}</TableCell>
                <TableCell> {{ order.product }} </TableCell>
                <TableCell> {{ order.payment.payment_method }} </TableCell>
                <TableCell>
                    <div class="flex items-center gap-2">
                        <img
                            :src="`https://randomuser.me/api/portraits/men/${Math.floor(Math.random() * 100)}.jpg`"
                            alt="User"
                            class="size-8 rounded-full cursor-pointer"
                        />
                        <span>{{ order.user.name }}</span>
                    </div>
                </TableCell>
                <TableCell :customClass="'flex items-center'">
                    <StatusBadge :status="order.status" />
                </TableCell>
                <TableCell> ${{ order.total_price }} </TableCell>
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
                            class="absolute -translate-y-[2px] -left-[90px] w-fit py-2 bg-white dark:bg-[#1F2128] border border-gray-200 dark:border-gray-700 rounded-md shadow-md z-10"
                            data-modal
                        >
                            <ButtonDetails
                                :href="`/admin/orders/${order.encrypted_id}`"
                            />
                        </div>
                    </Transition>
                </TableCell>
            </tr>
        </template>
    </TableTemplate>
</template>

<style scoped>
    .fade-enter-from {
        opacity: 0;
        transform: translateY(-30px);
    }
    .fade-enter-to {
        opacity: 1;
        transform: translateY(-2px);
    }
    .fade-enter-active,
    .fade-leave-active {
        transition: all 0.3s;
    }
    .fade-leave-from {
        opacity: 1;
        transform: translateY(-2px);
    }
    .fade-leave-to {
        opacity: 0;
        transform: translateY(-30px);
    }
</style>
