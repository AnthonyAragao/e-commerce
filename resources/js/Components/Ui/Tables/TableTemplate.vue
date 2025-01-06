<script setup>
    const { headers, customClass } = defineProps(['headers', 'customClass']);
</script>

<template>
     <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-500 uppercase dark:text-gray-400 border-t border-b border-gray-200 dark:border-gray-500">
            <tr>
                <th
                    v-for="header in headers"
                    :key="header"
                    scope="col"
                    :class="['px-6 py-3', customClass]"
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
