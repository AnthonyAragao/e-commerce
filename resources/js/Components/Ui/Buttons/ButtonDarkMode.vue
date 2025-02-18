<script setup>
    import { useDarkMode } from "../../../composables/useDarkMode";
    const { isDarkMode, toggleDarkMode } = useDarkMode();
</script>

<template>
    <button
        @click="toggleDarkMode()"
        class="p-2 size-12 rounded-lg bg-white  border-[1.5px] border-gray-200 dark:border-gray-700 dark:bg-[#1F2128] hover:scale-105 "
    >
        {{ isDarkMode ? "🌙" : "☀️" }}
    </button>
</template>
