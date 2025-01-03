<script  setup>
    import { computed } from 'vue';

    const { isHeader, customClass} = defineProps(['isHeader', 'customClass']);

    const classes = computed(() =>
        `${isHeader
            ? 'px-6 py-4 text-gray-800 whitespace-nowrap dark:text-white'
            : 'px-6 py-4'
        } ${customClass}`
    );
</script>

<template>
    <td :class="classes">
        <slot></slot>
    </td>
</template>


