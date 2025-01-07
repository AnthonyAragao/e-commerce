<script setup>

    const {href} = defineProps(['href']);


</script>
<template>
    <Link
        :href="href"
        class="block px-4 text-gray-400 dark:text-gray-300 text-xs font-semibold"
    >
        View details
    </Link>
</template>
