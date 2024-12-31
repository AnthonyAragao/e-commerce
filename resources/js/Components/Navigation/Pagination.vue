<script setup>
    const {pagination} = defineProps(["pagination"]);
</script>

<template>
   <nav class="space-x-1">
        <template v-for="(link, index) in pagination.links" :key="index">
            <Link
                v-if="link.label.includes('Previous') && link.url !== null"
                :href="link.url"
                preserve-scroll
                class="px-4 py-2 text-sm font-bold rounded-lg text-gray-500 border border-gray-300 cursor-default transition duration-150 dark:text-gray-200 dark:bg-gray-700 dark:border-gray-800"
                :class="{ 'hover:bg-[#7364DB] hover:text-white hover:border-[#7364DB] dark:hover:bg-[#7364DB] cursor-pointer': link.url !== null }"
            >
                <i class="fa-solid fa-arrow-left mr-1"></i> Previous
            </Link>

            <Link
                v-if="link.label.includes('Next')"
                :href="link.url"
                preserve-scroll
                class="px-4 py-2 text-sm font-bold rounded-lg text-gray-500 border border-gray-300 cursor-default transition duration-150 dark:text-gray-200 dark:bg-gray-700 dark:border-gray-800"
                :class="{ 'hover:bg-[#7364DB] hover:text-white hover:border-[#7364DB] dark:hover:bg-[#7364DB] cursor-pointer': link.url !== null }"

            >
                Next <i class="fa-solid fa-arrow-right ml-1"></i>
            </Link>

            <Link
                v-if="!link.label.includes('Previous') && !link.label.includes('Next')"
                :href="link.url"
                preserve-scroll
                class="px-4 py-2 text-sm font-bold rounded-lg text-gray-700 hover:bg-[#7364DB] hover:text-white dark:text-white"
                :class="{ 'bg-[#7364DB] text-white': link.active }"
            >
                {{ link.label }}
            </Link>
        </template>
    </nav>
</template>
