<script setup>
    import { useForm } from '@inertiajs/inertia-vue3';
    import SelectInput from '../Ui/Selects/SelectInput.vue';
    import DateInput from '../Ui/Inputs/DateInput.vue';

    const { statuses, paymentMethods, filters } = defineProps([ 'statuses', 'paymentMethods', 'filters' ]);

    const form = useForm({
        status: filters.status || '',
        paymentMethod: filters.paymentMethod || '',
        dateFrom: filters.dateFrom || '',
        dateTo: filters.dateTo || '',
    });

    const applyFilters = () => form.get('/admin/orders');

    const resetFilters = () => {
        form.status = '';
        form.paymentMethod = '';
        form.dateFrom = '';
        form.dateTo = '';
        form.get('/admin/orders');
    }
</script>

<template>
    <div class="flex items-end justify-between mt-7 text-gray-500 font-medium">
        <div class="grid grid-cols-[repeat(auto-fill,minmax(240px,1fr))] gap-4 w-full">
            <div class="">
                <SelectInput
                    label="Status:"
                    v-model="form.status"
                    name="status"
                    customClass='border-gray-200/70'
                >
                    <option value="" disabled>Status</option>
                    <option
                        v-for="status in statuses"
                        :key="status"
                        :value="status"
                    >
                        {{ status }}
                    </option>
                </SelectInput>
            </div>

            <div class="">
                <SelectInput
                    label="Payment method:"
                    name="paymentMethod"
                    v-model="form.paymentMethod"
                    customClass='border-gray-200/70'
                >
                    <option value="" disabled>Payment Method</option>
                    <option
                        v-for="paymentMethod in paymentMethods"
                        :key="paymentMethod"
                        :value="paymentMethod"
                    >
                        {{ paymentMethod }}
                    </option>
                </SelectInput>
            </div>

            <div class="">
                <DateInput
                    label="Date from:"
                    name="dateFrom"
                    v-model="form.dateFrom"
                    customClass='border-gray-200/70'
                />
            </div>

            <div class="">
                <DateInput
                    label="Date to:"
                    name="dateTo"
                    v-model="form.dateTo"
                    customClass='border-gray-200/70'
                />
            </div>
        </div>

        <div class="flex gap-2">
            <button @click="applyFilters"
                class="bg-white px-6 py-2 rounded-lg border border-gray-200 shadow-sm transition duration-300 hover:bg-gray-50 dark:bg-[#1F2128] dark:border-gray-700 dark:text-white dark:hover:bg-gray-800"
            >
                <i class="fas fa-filter me-2"></i> Apply
            </button>

            <button @click="resetFilters"
                class="bg-white px-6 py-2 rounded-lg border border-gray-200 shadow-sm transition duration-300 hover:bg-gray-50 dark:bg-[#1F2128] dark:border-gray-700 dark:text-white dark:hover:bg-gray-800"
            >
                <i class="fas fa-sync-alt me-2"></i> Reset
            </button>
        </div>
    </div>
</template>
