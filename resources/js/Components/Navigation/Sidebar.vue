<script setup>
    import { usePage } from '@inertiajs/inertia-vue3';
    const page = usePage()
</script>

<template>
   <aside
        class="h-screen bg-white w-56 text-[#9696AC] flex flex-col justify-between shadow-md z-10"
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
                    href="/admin/users"
                    class="px-4 py-3 rounded-xl flex items-center space-x-2 hover:bg-[#7364DB] hover:text-white transition duration-300"
                    :class="{'bg-[#7364DB] text-white': $page.url.startsWith('/admin/users')}"
                >
                    <i class="fas fa-users"></i> <span>Users</span>
                </Link>
            </nav>
        </div>

        <div class="p-4">
            <button class="
                w-full px-4 py-3 font-bold text-left rounded-xl hover:bg-[#7364DB] hover:text-white transition duration-300"
            >
                Logout
            </button>
        </div>
    </aside>
</template>
