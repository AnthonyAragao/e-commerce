<script setup>
    import CardLayout from '../Ui/Cards/CardLayout.vue';
    import LineChart from '../Ui/Charts/ChartLine.vue';
</script>

<template>
    <CardLayout class="w-full py-4">
        <div
            class="flex justify-between font-bold relative before:content-[''] before:w-full before:h-[1px] before:-bottom-3 before:absolute before:bg-gray-200 dark:before:bg-gray-700 text-gray-800 dark:text-gray-200"
        >
            Sales Perfomance
            <div class="flex gap-2 pb-2 text-xs">
                <button
                    type="button"
                    class="relative before:content-[''] before:w-full before:h-[1px] before:-bottom-5 before:absolute before:bg-purple-600 text-purple-600 before:dark:bg-purple-400 dark:text-purple-400">
                    Today's
                </button>
                <button>Monthly</button>
                <i class="text-gray-500 fas fa-ellipsis-v"></i>
            </div>
        </div>

        <div class="mt-4">
            <LineChart />
        </div>
    </CardLayout>
</template>
