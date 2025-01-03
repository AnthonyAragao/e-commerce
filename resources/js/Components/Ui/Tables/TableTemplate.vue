<script setup>
    const { headers } = defineProps(['headers']);
</script>

<template>
     <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-500 uppercase dark:text-gray-400 border-t border-b border-gray-200 dark:border-gray-500">
            <tr>
                <th
                    scope="col"
                    class="px-6 py-3"
                    v-for="header in headers"
                    :key="header"
                >
                    {{ header }}
                </th>
            </tr>
        </thead>

        <tbody>
            <slot></slot>
        </tbody>
    </table>
</template>
