<script setup>
    const { headers, orders } = defineProps(['headers', 'orders']);
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
                <td class="px-6 py-4 flex items-center">
                    <div
                        class="h-2.5 w-2.5 rounded-full me-2"
                        :class="{
                            'bg-yellow-500': order.status === 'pending',
                            'bg-red-400'   : order.status === 'declined',
                            'bg-green-500' : order.status !== 'pending' && order.status !== 'declined'
                        }"
                    ></div>
                    {{ order.status }}
                </td>
                <td class="px-6 py-4">${{ order.total_price }}</td>
                <td class="px-6 py-4 relative">
                    <button
                        @click="console.log('click')"
                    >
                        <i class="fas fa-ellipsis-h text-gray-500 cursor-pointer hover:text-gray-700 dark:hover:text-gray-400"></i>
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</template>
