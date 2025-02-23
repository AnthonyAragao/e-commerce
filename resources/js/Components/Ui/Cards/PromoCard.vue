<script setup>
    import { defineProps } from "vue";
    const { title, subtitle, buttonText, image } = defineProps([ "title", "subtitle", "buttonText", "image" ]);
</script>

<template>
    <div class="h-[300px] bg-white rounded-md shadow-md flex justify-between items-center overflow-hidden border border-gray-100 dark:bg-[#1F2128] dark:border-gray-700">
        <div class="mx-10 w-48">
            <p v-if="subtitle" class="uppercase text-gray-500 font-semibold tracking-[.5rem] text-xs">
                {{ subtitle }}
            </p>
            <h2 class="text-2xl font-semibold text-gray-600 dark:text-white uppercase mt-4">
                {{ title }}
            </h2>

            <button class="mt-4 bg-primary text-white w-full py-2 rounded-md text-sm dark:bg-secondary">
                {{ buttonText }}
            </button>
        </div>

        <img :src="image" alt="" class="h-full object-cover object-center w-[300px]">
    </div>
</template>
