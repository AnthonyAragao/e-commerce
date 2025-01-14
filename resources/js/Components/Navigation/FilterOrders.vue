<script setup>
    import SelectInput from '../Ui/Selects/SelectInput.vue';
</script>

<template>
    <div class="flex items-end justify-between mt-7 text-gray-500 font-medium">
        <div class="flex gap-4">
            <div class="w-[300px]">
                <SelectInput
                    name="category"
                    customClass='py-3 rounded-lg border border-gray-100 shadow-sm'
                >
                    <option value="">Status</option>
                    <option>this is a test</option>
                    <option>this is a test</option>
                </SelectInput>
            </div>

            <div class="w-[300px]">
                <SelectInput
                    name="category"
                    customClass='py-3 rounded-lg border border-gray-100 shadow-sm'
                >
                    <option value="">Payment Method</option>
                    <option>this is a test</option>
                    <option>this is a test</option>
                </SelectInput>
            </div>
        </div>

        <button
            class="bg-white px-6 py-3 rounded-lg border border-gray-100 shadow-sm transition duration-300 hover:bg-gray-50 hover:border-gray-100 dark:bg-[#1F2128] dark:border-gray-700 dark:text-white dark:hover:bg-gray-800"
        >
            <i class="fas fa-filter me-2"></i> Apply
        </button>
    </div>
</template>
