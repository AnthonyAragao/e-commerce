<script setup>
    import { usePage } from '@inertiajs/inertia-vue3';

    const page = usePage()
    const emit = defineEmits(['toggle-dark-mode']);
</script>

<template>
   <aside
        class="fixed h-screen bg-white w-56 text-[#9696AC] flex flex-col justify-between shadow-md z-10 dark:bg-[#1F2128] dark:border-r-2 dark:border-[#313442]"
    >
        <div class="p-4">
            <div class="text-lg font-bold">
                Dashboard
            </div>

            <nav class="flex flex-col py-4 space-y-2 cursor-pointer text-sm font-semibold mt-4">
                <Link
                    href="/admin/dashboard"
                    class="px-4 py-3 rounded-xl flex items-center space-x-2 hover:bg-[#7364DB] hover:text-white transition duration-300"
                    :class="{'bg-[#7364DB] text-white': $page.url.startsWith('/admin/dashboard')}"
                >
                    <i class="fa-solid fa-chart-line"></i> <span>Dashboard</span>
                </Link>

                <Link
                    href="/admin/products"
                    class="px-4 py-3 rounded-xl flex items-center space-x-2 hover:bg-[#7364DB] hover:text-white transition duration-300"
                    :class="{'bg-[#7364DB] text-white': $page.url.startsWith('/admin/products')}"
                >
                    <i class="fas fa-box"></i> <span>Products</span>
                </Link>

                <Link
                    href="/admin/orders"
                    class="px-4 py-3 rounded-xl flex items-center space-x-2 hover:bg-[#7364DB] hover:text-white transition duration-300"
                    :class="{'bg-[#7364DB] text-white': $page.url.startsWith('/admin/orders')}"
                >
                    <i class="fas fa-shopping-cart"></i> <span>Orders</span>
                </Link>

                <Link
                    href="/admin/payments"
                    class="px-4 py-3 rounded-xl flex items-center space-x-2 hover:bg-[#7364DB] hover:text-white transition duration-300"
                    :class="{'bg-[#7364DB] text-white': $page.url.startsWith('/admin/payments')}"
                >
                    <i class="fas fa-money-check-alt"></i> <span>Payments</span>
                </Link>

                <Link
                    href="/admin/transactions"
                    class="px-4 py-3 rounded-xl flex items-center space-x-2 hover:bg-[#7364DB] hover:text-white transition duration-300"
                    :class="{'bg-[#7364DB] text-white': $page.url.startsWith('/admin/transactions')}"
                >
                    <i class="fas fa-exchange-alt"></i> <span>Transactions</span>
                </Link>

                <Link
                    href="/admin/clients"
                    class="px-4 py-3 rounded-xl flex items-center space-x-2 hover:bg-[#7364DB] hover:text-white transition duration-300"
                    :class="{'bg-[#7364DB] text-white': $page.url.startsWith('/admin/clients')}"
                >
                    <i class="fas fa-users"></i> <span>Clients</span>
                </Link>
            </nav>
        </div>


        <div class="p-4">
            <div
                class="flex justify-between items-center bg-[#E8EDF2] py-4 px-12 rounded-xl dark:bg-[#313442]"
            >
                <!--  Icone da lua -->
                <i class="fas fa-moon text-purple-500"></i>

                <!--  Toggle  -->
                <div
                    class="relative w-12 h-4 bg-gray-300 rounded-full cursor-pointer flex items-center transition-all duration-300 dark:bg-[#2C2C35]"
                    @click="$emit('toggle-dark-mode')"
                >
                    <div
                        class="absolute w-5 h-5 bg-[#7364DB] rounded-full transition-all duration-300 left-7 dark:left-0"
                    >
                    </div>
                </div>

                <!--  Icone do Sol -->
                <i class="fas fa-sun text-orange-400"></i>
            </div>
        </div>
    </aside>
</template>
