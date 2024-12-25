<script setup>
    import { ref } from 'vue';

    const {modelValue, label, name, placeholder, required, customClass } = defineProps([
        "modelValue",
        "label",
        "name",
        "placeholder",
        "required",
        "customClass"
    ]);

    const emit = defineEmits(["update:modelValue"]);

    const formattedValue = ref(modelValue || "");

    const sanitizeInput = (event) => {
        const value = event.target.value;
        const sanitizedValue = value.replace(/[^0-9.]/g, "");
        formattedValue.value = sanitizedValue;

        emit('update:modelValue', sanitizedValue);
    };
</script>

<template>
    <div class="flex flex-col w-full">
        <label
            :for="name"
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
            class="px-3 py-2 rounded-lg border-2 border-gray-100 mt-1 focus:outline-none focus:border-gray-300 dark:bg-[#1F2128] dark:border-[#313442] dark:text-white dark:focus:border-[#7364DB]"
            v-model="formattedValue"
            @input="sanitizeInput"
        />
    </div>
</template>
