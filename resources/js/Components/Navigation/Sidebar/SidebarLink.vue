<script setup>
    const { link, isActive, icon, text } = defineProps(['link', 'isActive', 'icon', 'text']);
</script>

<template>
    <Link
        :href="link"
        class="grid grid-cols-6 px-2 py-3 rounded-xl items-center  hover:bg-[#7364DB] hover:text-white transition duration-300"
        :class="{'bg-[#7364DB] text-white': isActive}"
    >
        <i :class="['mx-auto', icon]"></i>
        <span>{{ text }}</span>
    </Link>
</template>
