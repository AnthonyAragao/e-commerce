<script setup>
    const { link, isActive, icon, text } = defineProps(['link', 'isActive', 'icon', 'text']);
</script>

<template>
    <Link
        :href="link"
        class="grid grid-cols-6 items-center px-2 py-3 cursor-pointer text-gray-500 text-sm font-semibold rounded-xl hover:bg-primary dark:text-gray-200 dark:hover:bg-secondary hover:text-white transition duration-150"
        :class="{'bg-primary dark:bg-secondary text-white': isActive}"
    >
        <i :class="['mx-auto', icon]"></i>
        <span>{{ text }}</span>
    </Link>
</template>
