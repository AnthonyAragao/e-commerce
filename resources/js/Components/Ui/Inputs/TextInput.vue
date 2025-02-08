<script setup>
    import SpanError from './SpanError.vue';

    const { modelValue, label, name, placeholder, required, customClass, error} = defineProps([
        "modelValue",
        "label",
        "name",
        "placeholder",
        "required",
        "customClass",
        "error",
    ]);

    const emit = defineEmits(["update:modelValue"]);
</script>

<template>
    <div class="flex flex-col w-full">
        <label
            for="{{ name }}"
            class="block text-base font-bold text-gray-800 dark:text-gray-100"
        >
            {{ label }}
        </label>

        <input
            type="text"
            :id="name"
            :name="name"
            :placeholder="placeholder"
            :required="required"
            :class="customClass"
            :value="modelValue"
            @input="$emit('update:modelValue', $event.target.value)"
            class="px-3 py-2 rounded-lg border-2 border-gray-300 mt-1 focus:outline-none focus:border-gray-400 dark:bg-[#1F2128] dark:border-[#313442] dark:text-white dark:focus:border-[#7364DB]"
        >

        <SpanError :error="error"/>
    </div>
</template>
