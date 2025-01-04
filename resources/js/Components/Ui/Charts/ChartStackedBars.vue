<script setup>
    import CardLayout from '../Cards/CardLayout.vue';
    import { ref, onMounted } from 'vue';
    import { Chart, registerables } from 'chart.js';

    Chart.register(...registerables);

    const barChart = ref(null);

    onMounted(() => {
        new Chart(barChart.value, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [
                    {
                        label: 'Smartphones',
                        data: [5000, 7000, 6000, 8000, 9000, 10000, 11000, 10500, 9500, 11500, 12000, 12500],
                        backgroundColor: 'rgba(75, 192, 192, 0.8)',
                    },
                    {
                        label: 'Laptops',
                        data: [3000, 4000, 3500, 4500, 5000, 5500, 6000, 5800, 5300, 6100, 6500, 7000],
                        backgroundColor: 'rgba(153, 102, 255, 0.8)',
                    },
                    {
                        label: 'Accessories',
                        data: [2000, 2500, 2400, 2600, 2700, 2800, 3000, 3100, 2900, 3200, 3300, 3400],
                        backgroundColor: 'rgba(255, 159, 64, 0.8)',
                    },
                ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        mode: 'index',
                        intersect: false,
                    },
                },
                scales: {
                    x: {
                        stacked: true,
                        grid: {
                            display: false,
                        },
                    },
                    y: {
                        stacked: true,
                        ticks: {
                            beginAtZero: true,
                            callback: (value) => `$${value}`,
                        },
                    },
                },
            },
        });
    });
</script>

<template>
    <CardLayout class="mt-2">
        <div
            class="flex font-bold relative before:content-[''] before:w-full before:h-[1px] before:-bottom-4 before:absolute before:bg-gray-200 dark:before:bg-gray-700 text-gray-800 dark:text-gray-200"
        >
            <span>Monthly Revenue by Product Categories</span>
        </div>

        <div class="mt-8">
            <canvas ref="barChart" style="height: 300px; width: 100%;"></canvas>
        </div>
    </CardLayout>
</template>
