<script setup>
    const { pagination } = defineProps(["pagination" ]);
</script>

<template>
    <nav class="space-x-1">
        <template v-for="(link, index) in pagination.links" :key="index">
            <!-- Previous Button -->
            <Link
                v-if="link.label.includes('Previous') && link.url !== null"
                :href="link.url"
                preserve-scroll
                class="px-4 py-2 text-sm font-bold rounded-lg text-gray-500 border border-gray-300 cursor-default transition duration-150 dark:text-gray-200 dark:bg-gray-700 dark:border-gray-800"
                :class="{
                    [`hover:bg-primary hover:text-white hover:border-primary dark:hover:bg-secondary dark:hover-border-secondary cursor-pointer`]: link.url !== null,
                }"
            >
                <i class="fa-solid fa-arrow-left mr-1"></i> Previous
            </Link>

            <!-- Next Button -->
            <Link
                v-if="link.label.includes('Next')"
                :href="link.url"
                preserve-scroll
                class="px-4 py-2 text-sm font-bold rounded-lg text-gray-500 border border-gray-300 cursor-default transition duration-150 dark:text-gray-200 dark:bg-gray-700 dark:border-gray-800"
                :class="{
                    [`hover:bg-primary hover:text-white hover:border-primary dark:hover:bg-secondary cursor-pointer`]: link.url !== null,
                }"
            >
                Next <i class="fa-solid fa-arrow-right ml-1"></i>
            </Link>

            <!-- Numbered Links -->
            <Link
                v-if="!link.label.includes('Previous') && !link.label.includes('Next')"
                :href="link.url"
                preserve-scroll
                class="px-4 py-2 text-sm font-bold rounded-lg text-gray-700 dark:text-white"
                :class="{
                    [`hover:bg-primary dark:hover:bg-secondary hover:text-white`]: !link.active,
                    [`bg-primary dark:bg-secondary  text-white`]: link.active,
                }"
            >
                {{ link.label }}
            </Link>
        </template>
    </nav>
</template>
