<script setup>
    const { modelValue, label, name, required, customClass } = defineProps([
        "modelValue",
        "label",
        "name",
        "required",
        "customClass"
    ]);
    const emit = defineEmits(["update:modelValue"]);
</script>

<template>
    <div class="flex flex-col w-full">
        <label for="date" class="block text-base font-bold text-gray-800 dark:text-gray-100">
            {{ label }}
        </label>

        <div class="relative">
            <input
                type="date"
                :id="name"
                :name="name"
                :required="required"
                :class="customClass"
                :value="modelValue"
                @input="emit('update:modelValue', $event.target.value)"
                class="px-3 py-2 w-full rounded-lg border-2 border-gray-100 mt-1 focus:outline-none focus:border-gray-300 dark:bg-[#1F2128] dark:border-[#313442] dark:text-white dark:focus:border-[#7364DB] appearance-none custom-date-input"
            >

            <i
                class="fas fa-calendar-alt absolute right-3 top-7 transform -translate-y-1/2 text-gray-500 dark:text-white pointer-events-none"></i>
        </div>
    </div>
</template>

<style scoped>
    .custom-date-input::-webkit-calendar-picker-indicator {
        opacity: 0;
    }
</style>
