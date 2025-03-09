<script setup>
    const { title, image, description, buttonText, buttonLink } = defineProps([ "title", "image", "description", "buttonText", "buttonLink" ]);
</script>

<template>
    <div
        class="bg-white border-[1.5px] border-gray-200 dark:border-gray-700 dark:bg-[#1F2128] rounded-[4px] p-4 h-[300px] overflow-hidden group relative shadow-sm hover:shadow-[0_2px_4px_0_rgba(0,0,0,0.05),0_1px_2px_0_rgba(0,0,0,0.05)] "
    >
        <h2 class="text-sm font-semibold dark:text-white text-center">
            {{ title }}
        </h2>

        <div class="mt-2 h-32 flex justify-center">
            <img :src="image" alt="" class="h-full"/>
        </div>

        <p class="text-xs mt-4 text-gray-500 dark:text-gray-400 text-center px-4">
            {{ description }}
        </p>

        <a
            :href="buttonLink"
            class="absolute bottom-4 left-1/2 transform -translate-x-1/2 w-36 py-2 text-xs text-center bg-gradient-to-r from-primary
             to-[#C00000] text-white  dark:from-secondary dark:to-[#412aa8] dark:text-white border border-primary dark:border-secondary rounded-[4px] transition-transform duration-300 group-hover:transform group-hover:-translate-y-1"
        >
            {{ buttonText }}
        </a>
    </div>
</template>
