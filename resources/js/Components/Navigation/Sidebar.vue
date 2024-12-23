<script setup>
    import { usePage } from '@inertiajs/inertia-vue3';
    const page = usePage()
</script>

<template>
   <aside
        class="h-screen bg-[#111828] w-60 text-white flex flex-col justify-between"
    >
        <div class="p-4">
            <div class="text-lg font-bold border-b border-gray-700 p-4">
                Admin Dashboard
            </div>

            <nav class="flex flex-col py-4 space-y-2 cursor-pointer text-sm font-semibold">
                <inertia-link
                    href="/admin/products"
                    class="px-4 py-3 rounded-xl flex items-center space-x-2 hover:bg-[#1D2939] transition duration-300"
                    :class="{'bg-[#1D2939]':  $page.url.startsWith('/admin/products')}"
                >
                    <i class="fas fa-box"></i> <span>Products</span>
                </inertia-link>

                <inertia-link
                    href="/admin/orders"
                    class="px-4 py-3 rounded-xl flex items-center space-x-2 hover:bg-[#1D2939] transition duration-300"
                    :class="{'bg-[#1D2939]':  $page.url.startsWith('/admin/orders')}"
                >
                    <i class="fas fa-shopping-cart"></i> <span>Orders</span>
                </inertia-link>

                <inertia-link
                    href="/admin/users"
                    class="px-4 py-3 rounded-xl flex items-center space-x-2 hover:bg-[#1D2939] transition duration-300"
                    :class="{'bg-[#1D2939]':  $page.url.startsWith('/admin/users')}"
                >
                    <i class="fas fa-users"></i> <span>Users</span>
                </inertia-link>
            </nav>
        </div>

        <div class="p-4 border-t border-gray-700">
            <button class="
                w-full px-4 py-3 font-bold text-left rounded-2xl hover:bg-gray-700 transition duration-300"
            >
                Logout
            </button>
        </div>
    </aside>
</template>
