<script setup>
    const {label, name, placeholder, required, customClass } = defineProps([
        "label",
        "name",
        "placeholder",
        "required",
        "customClass"
    ]);
</script>

<template>
    <div class="flex flex-col w-full">
        <label
            for="{{ name }}"
            class="block text-base font-bold text-gray-800 dark:text-gray-100"
        >
            {{ label }}
        </label>

        <textarea
            :name="name"
            :id="name"
            :placeholder="placeholder"
            :required="required"
            :class="customClass"
            class="w-full h-32 px-3 py-2 rounded-lg border-2 border-gray-100 mt-1 focus:outline-none focus:border-gray-300 dark:bg-[#1F2128] dark:border-[#313442] dark:text-white dark:focus:border-[#7364DB] resize-none"
        ></textarea>
    </div>

</template>
