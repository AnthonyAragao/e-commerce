<script setup>
    import ButtonDetails from "../Buttons/ButtonDetails.vue";
    import TableTemplate from "./TableTemplate.vue";
    import TableCell from "./TableCell.vue";
    import ToggleModal from "../Modals/ToggleModal.vue";
    import StatusBadge from "../Badges/StatusBadge.vue";

    const { headers, orders } = defineProps(["headers", "orders"]);
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
                <StatusBadge :status="order.status" />
            </TableCell>
            <TableCell>${{ order.total_price }}</TableCell>
            <TableCell>
                <ToggleModal :id="order.id">
                    <ButtonDetails :href="`/admin/orders/${order.encrypted_id}`" />
                </ToggleModal>
            </TableCell>
        </tr>
    </TableTemplate>
</template>
