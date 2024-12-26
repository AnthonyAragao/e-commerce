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
    <div class="w-full">
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
            @input="emit('update:modelValue', $event.target.value)"
            class="w-full px-3 py-2 mt-1 rounded-lg border-2 border-gray-100 focus:outline-none focus:border-gray-300 dark:bg-[#1F2128] dark:border-[#313442] dark:text-white dark:focus:border-[#7364DB]"
        >
            <slot></slot>
        </select>

        <SpanError :error="error"/>
    </div>
</template>
