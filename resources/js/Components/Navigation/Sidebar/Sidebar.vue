<script setup>
    import SidebarLink from './SidebarLink.vue';
    import { ref, watch } from 'vue';

    const emit = defineEmits(['toggle-dark-mode']);
    const { isDarkModeProps } = defineProps(['isDarkModeProps']);

    const isDarkMode = ref(isDarkModeProps);
    const ballPosition = ref('');

    ballPosition.value = isDarkMode.value ? 'left-0 bg-[#7364DB]' : 'left-7 bg-orange-400';

    watch(isDarkMode, (newValue) => {
        setTimeout(() => {
            ballPosition.value = newValue ? 'left-0 bg-[#7364DB]' : 'left-7 bg-orange-400 ';
        }, 0);
    });

    const toggleDarkMode = () => {
        isDarkMode.value = !isDarkMode.value;
        emit('toggle-dark-mode');
    };
</script>

<template>
   <aside
        class="fixed w-56 h-screen bg-white shadow-md dark:bg-[#1F2128] border-r-2 dark:border-[#313442]"
    >
        <div class="p-4">
            <p class="text-lg font-bold text-gray-500 dark:text-white">Dashboard</p>

            <nav class="flex flex-col py-4 space-y-2 cursor-pointer text-sm font-semibold mt-4">
                <SidebarLink
                    href="/admin/dashboard"
                    icon="fa-solid fa-chart-line"
                    text="Dashboard"
                    :isActive="$page.url.startsWith('/admin/dashboard')"
                />

                <SidebarLink
                    href="/admin/products"
                    icon="fas fa-box"
                    text="Products"
                    :isActive="$page.url.startsWith('/admin/products')"
                />

                <SidebarLink
                    href="/admin/orders"
                    icon="fas fa-shopping-cart"
                    text="Orders"
                    :isActive="$page.url.startsWith('/admin/orders')"
                />

                <SidebarLink
                    href="/admin/customers"
                    icon="fas fa-users"
                    text="Customers"
                    :isActive="$page.url.startsWith('/admin/customers')"
                />

                <SidebarLink
                    href="/admin/reviews"
                    icon="fas fa-star"
                    text="Reviews"
                    :isActive="$page.url.startsWith('/admin/reviews')"
                />

                <SidebarLink
                    href="/admin/settings"
                    icon="fas fa-cog"
                    text="Settings"
                    :isActive="$page.url.startsWith('/admin/settings')"
                />
            </nav>
        </div>

        <div class="p-4 absolute bottom-0 w-full">
            <div class="flex items-center justify-center gap-4 py-4 rounded-xl bg-[#E8EDF2] dark:bg-[#313442] border border-gray-300/70 dark:border-gray-600">
                <i class="fas fa-moon text-purple-500"></i>

                <div
                    class="relative w-12 h-4 bg-gray-300 rounded-full cursor-pointer grid grid-cols-6 items-center transition-all duration-300 dark:bg-[#2C2C35]"
                    @click="toggleDarkMode"
                >
                    <div :class="['absolute w-5 h-5  rounded-full transition-all duration-500', ballPosition]"></div>
                </div>

                <i class="fas fa-sun text-orange-400"></i>
            </div>
        </div>
    </aside>
</template>
