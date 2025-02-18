<script setup>
    import { computed } from 'vue';

    const { status } = defineProps(["status"]);

    const statusClasses = computed(() => {
        return {
            "bg-yellow-200/70 text-yellow-600 dark:text-yellow-400 dark:bg-yellow-200/30" : status === "pending",
            "bg-red-300/30 dark:bg-red-300/20 text-red-400"                               : status === "declined",
            "bg-green-200/80 text-green-500 dark:bg-green-200/20"                         : status === "completed",
            "bg-blue-200/70 text-blue-500 dark:text-blue-300 dark:bg-blue-200/30"         : status === "processing",
        };
    });

    const indicatorClasses = computed(() => {
        return {
            "bg-yellow-500" : status === "pending",
            "bg-red-400"    : status === "declined",
            "bg-green-500"  : status === "completed",
            "bg-blue-400"   : status === "processing",
        };
    })
</script>

<template>
    <span
        class="px-4 py-2 rounded-full text-xs font-semibold flex items-center w-fit"
        :class="statusClasses"
    >
        <div
            class="size-2 rounded-full me-2"
            :class="indicatorClasses"
        ></div>
        {{ status }}
    </span>
</template>
