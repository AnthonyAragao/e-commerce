<script setup>
    const { label, icon, customClass, isSubmitting } = defineProps([
        'label',
        'icon',
        'customClass',
        'isSubmitting',
    ]);
</script>

<template>
    <button
        type="submit"
        :disabled="isSubmitting"
        :class="`bg-primary dark:bg-[#7364DB] text-sm text-white px-6 py-2 rounded-md  hover:bg-red-600 dark:hover:bg-[#5B48A2] transition duration-300 ${customClass}`"
    >
        <i v-if="isSubmitting" class="fas fa-spinner fa-spin mr-2"></i>
        <i v-else-if="icon" :class="icon"></i>
        {{ isSubmitting ? 'Saving...' : label }}
    </button>
</template>
