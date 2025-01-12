<script setup>
    import AdminLayout from '../../../Components/Layouts/AdminLayout.vue';
    import Breadcrumb from '../../../Components/Navigation/Breadcrumb.vue';
    import CardLayout from '../../../Components/Ui/Cards/CardLayout.vue';
    import TableTemplate from '../../../Components/Ui/Tables/TableTemplate.vue';
    import TableCell from '../../../Components/Ui/Tables/TableCell.vue';

    const { order } = defineProps(['order']);

    const headers = ['Product Name', 'Price', 'Quantity', 'Total'];
</script>

<template>
    <AdminLayout>
        <h1 class="text-3xl font-bold">Orders Details</h1>

        <Breadcrumb :breadcrumbs="[
            { 'href': '/admin', 'name': 'Home' },
            { 'href': '/admin/orders', 'name': 'Orders' },
            { 'href': '', 'name': 'Details' }
        ]" />

        <CardLayout :customClass="'mt-7'">
            <span class="font-bold">Orders ID: #{{ order.id }}</span>

            <div class="flex justify-between items-center mt-4 text-gray-400">
                <div class="text-sm font-semibold">
                    <i class="fas fa-calendar-alt mr-1"></i> Mon, Jan 28, 2022, 8:40 PM
                </div>

                <div class="bg-gray-200 cursor-pointer px-4 py-2 rounded-md dark:bg-gray-700">
                    <i class="fas fa-print text-xl"></i>
                </div>
            </div>

            <span class="text-green-400 text-sm font-semibold tracking-wide">Peding</span>


            <div class="flex gap-4 w-full mt-4 py-4 border-t">
                <div class="w-1/3 flex gap-2">
                    <div class="w-4 h-4 p-6 rounded-full bg-gray-300 flex justify-center items-center dark:bg-gray-700">
                        <i class="fas fa-user text-xl"></i>
                    </div>

                    <div class="flex flex-col">
                        <span class="text-sm font-bold">Customer</span>
                        <span class="text-gray-400 text-sm">Full name: {{ order.user.name }}</span>
                        <span class="text-gray-400 text-sm">Email: {{ order.user.email }}</span>
                        <span class="text-gray-400 text-sm">Phone: {{ order.user.phone }}</span>

                        <button
                            class="text-blue-500 text-xs mt-2 font-semibold bg-gray-200 w-fit px-4 py-1 rounded-md dark:bg-gray-700"
                        >
                            View Profile
                        </button>
                    </div>
                </div>

                <div class="w-1/3 flex gap-2">
                    <div class="w-4 h-4 p-6 rounded-full bg-gray-300 flex justify-center items-center dark:bg-gray-700">
                        <i class="fas fa-shopping-bag text-xl"></i>
                    </div>

                    <div class="flex flex-col">
                        <span class="text-sm font-bold">Order info</span>
                        <span class="text-gray-400 text-sm">Shipping: Next express</span>
                        <span class="text-gray-400 text-sm">Pay method: {{ order.payment.payment_method }}</span>
                        <span class="text-gray-400 text-sm">Status: {{ order.status }}</span>

                        <button
                            class="text-blue-500 text-xs mt-2 font-semibold bg-gray-200 w-fit px-4 py-1 rounded-md dark:bg-gray-700"
                        >
                            Donwload Info
                        </button>
                    </div>
                </div>

                <div class="w-1/3 flex gap-2">
                    <div class="w-4 h-4 p-6 rounded-full bg-gray-300 flex justify-center items-center dark:bg-gray-700">
                        <i class="fas fa-paper-plane text-xl"></i>
                    </div>

                    <div class="flex flex-col">
                        <span class="text-sm font-bold">Deliver to</span>
                        <span class="text-gray-400 text-sm">Address: Santa Ana, llinias 58645</span>
                        <span class="text-gray-400 text-sm">2972 Wstheimer RD</span>
                        <span class="text-gray-400 text-sm">Block 9A</span>

                        <button
                            class="text-blue-500 text-xs mt-2 font-semibold bg-gray-200 w-fit px-4 py-1 rounded-md dark:bg-gray-700"
                        >
                            View Profile
                        </button>
                    </div>
                </div>
            </div>

            <CardLayout :customClass="'w-[400px] py-4 flex flex-col '">
                <span class="text-sm font-bold tracking-wide">Payment info</span>
                <div class="flex items-center gap-1 mt-2">
                    <i class="fab fa-cc-visa text-2xl"></i>
                    <span class="text-gray-400 text-sm font-semibold">Visa **** 1234</span>
                </div>
                <span class="text-gray-400 font-semibold text-sm">Bussines name: Jane Cooper LLC</span>
                <span class="text-gray-400 font-semibold text-sm">Phone: 310 09985 6578 52</span>
            </CardLayout>

            <div class="flex flex-col gap-2">
                <span class="text-base font-bold tracking-wide">Products</span>

                <TableTemplate :headers="headers">
                    <tr
                        v-for="item in order.items"
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

                <div class="w-[300px] ml-auto my-7 text-gray-400">
                    <div class="flex justify-between font-semibold">
                        <span class="text-sm tracking-wide">Subtotal:</span>
                        <span>${{ order.total_price }}</span>
                    </div>

                    <div class="flex justify-between">
                        <span class="text-base font-bold tracking-wide">Total:</span>
                        <span class="text-lg font-semibold">${{ order.total_price }}</span>
                    </div>

                    <div class="flex justify-between items-center">
                        <span class="text-sm tracking-wide">Status:</span>
                        <div class="px-4 py-1 rounded-lg text-xs font-semibold flex items-center w-fit bg-gray-200 dark:bg-gray-700">
                            <span class="text-green-400 text-sm">{{ order.payment.payment_status }}</span>
                        </div>
                    </div>
                </div>
            </div>


        </CardLayout>
    </AdminLayout>
</template>
