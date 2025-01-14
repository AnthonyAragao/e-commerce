<script setup>
    import TableTemplate from './TableTemplate.vue';
    import TableCell from './TableCell.vue';

    const { headers, items } = defineProps(['headers', 'items']);
</script>

<template>
    <span class="text-base font-bold tracking-wide mb-4">Products</span>

    <TableTemplate :headers="headers">
        <tr
            v-for="item in items"
            :key="item.id"
            class="border-b dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-800 font-medium"
        >
            <TableCell>
                <div class="flex items-center gap-2">
                    <img
                        :src="`/storage/${item.product.images[0].image_path}`"
                        alt="product"
                        class="size-10 object-cover rounded-lg"
                    />
                    {{ item.product.name }}
                </div>
            </TableCell>
            <TableCell>${{ item.price }}</TableCell>
            <TableCell>{{ item.quantity }}</TableCell>
            <TableCell>${{ item.price * item.quantity }}</TableCell>
        </tr>
    </TableTemplate>
</template>
