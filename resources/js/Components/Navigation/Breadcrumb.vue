<script setup>
    const {breadcrumbs} = defineProps(["breadcrumbs"]);
</script>

<template>
    <div class="space-x-2 mt-2 text-gray-400 font-semibold text-sm">

        <Link
            v-for="(breadcrumb, index) in breadcrumbs"
            :key="index"
            :href="breadcrumb.href"
            class="space-x-2"
        >
            <i v-if="index === 0" class="fas fa-home"></i>

            <span v-if="breadcrumb.href" class="cursor-pointer">
                {{ breadcrumb.name }}
            </span>

            <span v-if="index < breadcrumbs.length - 1">></span>

            <span
                v-if="!breadcrumb.href"
                class="text-primary dark:text-[#7364DB] font-bold cursor-default"
            >
                {{ breadcrumb.name }}
            </span>
        </Link>

    </div>
</template>

