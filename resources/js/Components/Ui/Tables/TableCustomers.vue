<script setup>
    import ButtonDetails from "../Buttons/ButtonDetails.vue";
    import TableTemplate from "./TableTemplate.vue";
    import TableCell from "./TableCell.vue";
    import ToggleModal from "../Modals/ToggleModal.vue";

    const { headers, customers } = defineProps(["headers", "customers"]);
</script>

<template>
    <TableTemplate :headers="headers">
        <tr
            v-for="customer in customers.data"
            :key="customer.id"
            class="border-b dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-800 font-medium"
        >
            <TableCell isHeader="true">
                <div class="flex items-center gap-2">
                    <img
                        :src="`https://randomuser.me/api/portraits/men/${Math.floor(Math.random() * 100)}.jpg`"
                        alt="User"
                        class="w-8 h-8 rounded-full cursor-pointer"
                    />
                    <span>{{ customer.name }}</span>
                </div>
            </TableCell>
            <TableCell>{{ customer.email }}</TableCell>
            <TableCell>{{ customer.phone }}</TableCell>
            <TableCell>{{ customer.total_orders }}</TableCell>
            <TableCell>{{ customer.total_spent }}</TableCell>
            <TableCell>
                <ToggleModal :id="customer.id">
                    <ButtonDetails :href="`/admin/customers/${customer.encrypted_id}`" />
                </ToggleModal>
            </TableCell>
        </tr>
    </TableTemplate>
</template>
