<script setup>
    const { title, amount, percentage, footer, iconClass, iconBackground } = defineProps([
        'title',
        'amount',
        'percentage',
        'footer',
        'iconClass',
        'iconBackground'
    ]);
</script>

<template>
    <div
        class="bg-white py-3 px-4 w-1/4 h-26 rounded-xl flex flex-col gap-1 border-[1px] border-gray-200 dark:border-gray-700 dark:bg-[#1F2128]
    ">
        <div class="flex justify-between">
            <h3 class="text-xs text-gray-500">
                {{ title }}
            </h3>
            <i class="text-gray-500 fas fa-ellipsis-v"></i>
        </div>

        <div class="flex justify-between items-center mt-1">
            <div class="flex items-center gap-2">
                <div
                    :class="iconBackground"
                    class="w-8 h-8 p-5 rounded-lg flex items-center justify-center"
                >
                    <i :class="iconClass" class="text-white text-xl"></i>
                </div>

                <h4 class="font-semibold text-[14px] dark:text-gray-200">
                    {{ amount }}
                </h4>
            </div>

            <div class="flex gap-2 items-center">
                <i class="text-[#50d1b2] text-xl fas fa-chart-line"></i>

                <span class="text-base text-[#50d1b2] font-bold">
                    {{ percentage }}
                </span>
            </div>
        </div>

        <span class="text-end text-gray-500 text-[11px]">{{ footer }}</span>
    </div>
</template>

