<script setup>
    const { label, name, required, customClass } = defineProps([
        "label",
        "name",
        "required",
        "customClass"
    ]);
</script>

<template>
    <div class="w-full">
        <label
            :for="name"
            class="block text-base font-bold text-gray-800 dark:text-gray-100"
        >
            {{ label }}
        </label>
        <select
            :name="name"
            :id="name"
            :required="required"
            :class="customClass"
            class="w-full px-3 py-2 mt-1 rounded-lg border-2 border-gray-100 focus:outline-none focus:border-gray-300 dark:bg-[#1F2128] dark:border-[#313442] dark:text-white dark:focus:border-[#7364DB]"
        >
            <slot></slot>
        </select>
    </div>
</template>
