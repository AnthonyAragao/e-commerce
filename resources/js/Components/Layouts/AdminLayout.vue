<script setup>
    import { provide, ref } from 'vue';
    import { useDarkMode } from '../../composables/useDarkMode';
    import Sidebar from '../Navigation/Sidebar/Sidebar.vue';
    import HeaderAdmin from '../Navigation/Headers/HeaderAdmin.vue';
    import Footer from '../Layouts/Footer.vue';

    const activeModal    = ref(null);
    const setActiveModal = (id) => activeModal.value = id;

    provide("activeModal", activeModal);
    provide("setActiveModal", setActiveModal)

    const { isDarkMode, toggleDarkMode, isDarkModeRef } = useDarkMode();
</script>

<template>
    <div class="grid grid-cols-[224px,1fr]" :class="{'dark': isDarkMode}">
        <Sidebar
            :isDarkModeProps="isDarkModeRef"
            @toggle-dark-mode="toggleDarkMode"
        />

        <div class="col-start-2 dark:bg-zinc-900 dark:text-white">
            <HeaderAdmin />

            <main class="p-7 mt-16 min-h-[calc(100vh-4rem)]">
                <slot></slot>
            </main>

            <Footer />
        </div>
    </div>
</template>
