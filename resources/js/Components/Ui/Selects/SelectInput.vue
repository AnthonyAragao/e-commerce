<script setup>
    import SpanError from '../Inputs/SpanError.vue';

    const { modelValue, label, name, required, customClass, error } = defineProps([
        "modelValue",
        "label",
        "name",
        "required",
        "customClass",
        "error"
    ]);

    const emit = defineEmits(["update:modelValue"]);
</script>

<template>
    <div class="w-full relative">
        <label
            :for="name"
            class="block text-base font-bold text-gray-800 dark:text-gray-100"
        >
            {{ label }}
        </label>
        <select
            :id="name"
            :name="name"
            :required="required"
            :class="customClass"
            :value="modelValue"
            @input="emit('update:modelValue', $event.target.value)"
            class="appearance-none w-full px-3 py-2 mt-1 rounded-lg cursor-pointer border-2 border-gray-100 focus:outline-none focus:border-gray-300 dark:bg-[#1F2128] dark:border-[#313442] dark:text-white dark:focus:border-[#7364DB]"
        >
            <slot></slot>
        </select>

        <!-- seta personalizada -->
        <div class="absolute top-10 right-0 flex items-center pr-3 pointer-events-none">
            <svg class="w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M5.293 9.293a1 1 0 011.414 0L10 12.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </div>

        <SpanError :error="error"/>
    </div>
</template>
