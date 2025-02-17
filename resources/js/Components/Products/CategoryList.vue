<script setup>
    const { categories } = defineProps(["categories"]);
</script>

<template>
    <div class="bg-white  border-[1.5px] border-gray-200 dark:border-gray-700 dark:bg-[#1F2128] shadow-sm rounded-[4px] p-4 h-fit">
        <h2 class="text-lg font-semibold text-gray-700 dark:text-gray-300">Categories list</h2>
        <ul class="mt-2">
            <li
                v-for="category in categories"
                :key="category.id"
                class="mt-1 text-gray-500 text-sm hover:text-gray-800 cursor-pointer
                dark:text-gray-400 dark:hover:text-gray-300"
            >
                <Link :href="`/categories/${category.slug}`">
                    {{ category.name }}
                </Link>
            </li>
        </ul>
    </div>
</template>
