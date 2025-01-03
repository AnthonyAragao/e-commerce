<script setup>
    import Sidebar from '../Navigation/Sidebar.vue';
    import HeaderAdmin from '../Navigation/HeaderAdmin.vue';
    import Footer from '../Layouts/Footer.vue';
    import { useDark, useToggle } from '@vueuse/core';
    import { ref } from 'vue';

    const isDarkMode = useDark({
        storageKey: 'dark-mode',
        valueDark: 'dark',
        valueLight: 'light',
    });

    const toggleDarkMode = useToggle(isDarkMode);
    const isDarkModeRef = ref(isDarkMode.value);
</script>

<template>
    <div class="flex  bg-[#F5F5FA]" :class="{'dark': isDarkMode}" >

        <Sidebar
            :isDarkModeProps="isDarkModeRef"
            @toggle-dark-mode="toggleDarkMode"
        />

        <div class="flex-1 flex flex-col dark:bg-zinc-900 dark:text-white ml-56">
            <HeaderAdmin />

            <main class="p-7 mt-16 min-h-[calc(100vh-4rem)]">
                <slot></slot>
            </main>
           <Footer />
        </div>
    </div>
</template>


