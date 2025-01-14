<script setup>
    import AdminLayout from '../../../Components/Layouts/AdminLayout.vue';
    import Breadcrumb from '../../../Components/Navigation/Breadcrumb.vue';
    import CardLayout from '../../../Components/Ui/Cards/CardLayout.vue';
    import TableOrderProducts from '../../../Components/Ui/Tables/TableOrderProducts.vue';
    import CustomerInfo from '../../../Components/Orders/CustomerInfo.vue';
    import OrderInfo from '../../../Components/Orders/OrderInfo.vue';
    import DeliverTo from '../../../Components/Orders/DeliverTo.vue';

    const { order } = defineProps(['order']);

    const breadcrumbs = [
        { 'href': '/admin', 'name': 'Home' },
        { 'href': '/admin/orders', 'name': 'Orders' },
        { 'href': '', 'name': 'Details' }
    ];

    const headers = ['Product Name', 'Price', 'Quantity', 'Total'];

    const getStatusClass = (status) => {
        const classes = {
            pending     : 'text-yellow-500 dark:text-yellow-400',
            processing  : 'text-blue-400',
            completed   : 'text-green-400',
            declined    : 'text-red-400',
            paid        : 'text-green-400',
            failed      : 'text-red-400',
        };

        return classes[status] || 'text-gray-400';
    };
</script>

<template>
    <AdminLayout>
        <h1 class="text-3xl font-bold">Orders Details</h1>

        <Breadcrumb :breadcrumbs="breadcrumbs"/>

        <CardLayout customClass='mt-7'>
            <span class="font-bold">Orders ID: #{{ order.id }}</span>

            <div class="flex justify-between items-center mt-4 text-gray-400">
                <div class="text-sm font-semibold">
                    <i class="fas fa-calendar-alt mr-1"></i>
                    {{ new Date(order.created_at).toLocaleString('pt-BR', {  year: 'numeric', month: 'short', day: 'numeric', hour: '2-digit', minute: '2-digit' }) }}
                </div>

                <button type="button" class="bg-gray-200 cursor-pointer px-4 py-2 rounded-md dark:bg-gray-700"
                >
                    <i class="fas fa-print text-xl"></i>
                </button>
            </div>

            <span
                :class="getStatusClass(order.status)"
                class="text-sm font-semibold tracking-wide"
            >
                {{ order.status }}
            </span>


            <div class="flex gap-4 mt-4 py-4 border-t">
                <CustomerInfo :customer="order.user" />
                <OrderInfo :payment="order.payment" />
                <DeliverTo :address="order.address" />
            </div>

            <CardLayout customClass='w-[400px] py-4 flex flex-col'>
                <span class="text-sm font-bold tracking-wide">Payment info</span>
                <div class="flex items-center gap-1 mt-2">
                    <i class="fab fa-cc-visa text-2xl"></i>
                    <span class="text-gray-400 text-sm font-semibold">Visa **** 1234</span>
                </div>
                <span class="text-gray-400 font-semibold text-sm"> Payment method: {{ order.payment.payment_method }} </span>
                <span class="text-gray-400 font-semibold text-sm"> Payment status: {{ order.payment.payment_status }} </span>
            </CardLayout>

            <div class="flex flex-col">
                <TableOrderProducts :headers="headers" :items="order.items" />

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
                            <span
                                :class="getStatusClass(order.payment.payment_status)"
                                class="text-sm"
                            >
                                {{ order.payment.payment_status }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </CardLayout>
    </AdminLayout>
</template>
