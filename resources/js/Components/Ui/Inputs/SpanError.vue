<script setup>
    const {error} = defineProps(['error']);
</script>

<template>
    <span
        v-if="error"
        class="text-red-500 text-sm mt-1 font-semibold dark:text-red-400"
    >
        {{ error }}
    </span>
</template>
