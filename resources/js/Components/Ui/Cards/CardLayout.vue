<script setup>
    const { customClass } = defineProps(['customClass']);
</script>

<template>
    <div
        :class="customClass"
        class="bg-white my-8 p-6 rounded-xl border border-gray-400/20 shadow-sm dark:bg-[#1F2128] dark:text-white dark:border dark:border-[#313442]"
    >
        <slot></slot>
    </div>
</template>
