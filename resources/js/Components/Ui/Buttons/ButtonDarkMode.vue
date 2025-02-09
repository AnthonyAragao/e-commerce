<script setup>
    import { useDark, useToggle } from "@vueuse/core";

    const isDarkMode = useDark({
        storageKey: "dark-mode",
        valueDark: "dark",
        valueLight: "light",
    });

    const toggleDarkMode = useToggle(isDarkMode);
</script>

<template>
    <button
        @click="toggleDarkMode()"
        class="p-2 size-12 rounded-lg bg-white  border-[1.5px] border-gray-200 dark:border-gray-700 dark:bg-[#1F2128]"
    >
        {{ isDarkMode ? "🌙" : "☀️" }}
    </button>
</template>
