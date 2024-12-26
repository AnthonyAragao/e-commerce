<script setup>
    const {label, icon, customClass} = defineProps(['label', 'icon', 'customClass']);
</script>

<template>
    <button
        type="submit"
        :class="`bg-[#7364DB] text-sm text-white px-6 py-2 rounded-md hover:bg-[#5B48A2] transition duration-300 ${customClass}`"
    >
        <i v-if="icon" :class="icon"></i>
            {{ label }}
    </button>
</template>
