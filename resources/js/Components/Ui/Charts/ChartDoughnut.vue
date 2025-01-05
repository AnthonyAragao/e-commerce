<script setup>
    import CardLayout from '../Cards/CardLayout.vue';
    import { ref, onMounted } from 'vue';
    import { Chart, registerables } from 'chart.js';

    Chart.register(...registerables);

    const doughnutChart = ref(null);

    onMounted(() => {
        new Chart(doughnutChart.value, {
            type: 'doughnut',
            data: {
                labels: ['Smartphones', 'Laptops', 'Headphones', 'Smartwatches', 'Tablets'],
                datasets: [
                    {
                        label: 'Sales',
                        data: [450, 300, 200, 150, 100],
                        backgroundColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(124, 58, 237, 1)'
                        ],
                        borderColor: ['#fff', '#fff', '#fff', '#fff', '#fff'],
                        borderWidth: 2,
                        hoverOffset: 3,
                    },
                ],
            },
            options: {
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: true,
                        position: 'right',
                    },
                },
                animation: {
                    animateScale: true,
                    animateRotate: true,
                    duration: 2000,
                }
            },
        });
    });
</script>

<template>
    <CardLayout class="mt-2">
        <div
            class="flex font-bold relative before:content-[''] before:w-full before:h-[1px] before:-bottom-4 before:absolute before:bg-gray-200 dark:before:bg-gray-700 text-gray-800 dark:text-gray-200"
        >
            <span>Best selling products</span>
        </div>

        <div class="mt-8">
            <canvas ref="doughnutChart" style="height: 300px; width: 100%;"></canvas>
        </div>
    </CardLayout>
</template>


