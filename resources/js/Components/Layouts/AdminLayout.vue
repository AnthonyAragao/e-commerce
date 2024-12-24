<script setup>
    import Sidebar from '../Navigation/Sidebar.vue';
    import HeaderAdmin from '../Navigation/HeaderAdmin.vue';
    import { useDark, useToggle } from '@vueuse/core';

    const isDarkMode = useDark({
        storageKey: 'dark-mode',
        valueDark: 'dark',
        valueLight: 'light',
    });

    const toggleDarkMode = useToggle(isDarkMode);
</script>

<template>
    <div class="flex bg-[#F5F5FA]" :class="{'dark': isDarkMode}" >
        <Sidebar @toggle-dark-mode="toggleDarkMode" />

        <div class="flex-1 flex flex-col dark:bg-zinc-900 dark:text-white">
            <HeaderAdmin />

            <main class="p-7">
                <slot></slot>
            </main>
        </div>
    </div>
</template>


