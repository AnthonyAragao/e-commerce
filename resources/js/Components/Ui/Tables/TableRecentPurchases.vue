<script setup>
    import { onMounted, reactive, ref } from "vue";
    import ButtonDetails from "../Buttons/ButtonDetails.vue";
    import TableTemplate from "./TableTemplate.vue";
    import TableCell from "./TableCell.vue";
    import ToggleModal from "../Modals/ToggleModal.vue";
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
                <TableCell customClass='flex items-center'>
                    <StatusBadge :status="order.status" />
                </TableCell>
                <TableCell> ${{ order.total_price }} </TableCell>
                <TableCell>
                    <ToggleModal :id="order.id">
                        <ButtonDetails :href="`/admin/orders/${order.encrypted_id}`" />
                    </ToggleModal>
                </TableCell>
            </tr>
        </template>
    </TableTemplate>
</template>
