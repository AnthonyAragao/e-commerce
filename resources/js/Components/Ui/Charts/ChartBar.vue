<script setup>
    import { ref, onMounted } from 'vue';
    import { Chart, registerables } from 'chart.js';
    import CardLayout from '../Cards/CardLayout.vue';

    Chart.register(...registerables);

    const barChart = ref(null);

    onMounted(() => {
        new Chart(barChart.value, {
            type: 'bar',
            data: {
                labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                datasets: [
                    {
                        label: 'Sales (Units)',
                        data: [20, 40, 30, 50, 60, 90, 70],
                        backgroundColor: [
                            'rgba(124, 58, 237, 0.8)',
                            'rgba(124, 58, 237, 0.8)',
                            'rgba(124, 58, 237, 0.8)',
                            'rgba(124, 58, 237, 0.8)',
                            'rgba(124, 58, 237, 0.8)',
                            'rgba(124, 58, 237, 1)',
                            'rgba(124, 58, 237, 1)',
                        ],
                        borderRadius: 20,
                        borderWidth: 0,
                    },
                ],
            },
            options: {
                maintainAspectRatio: false,
                scales: {
                    x: {
                        grid: {
                            display: false,
                        },
                        ticks: {
                            color: '#6b7280',
                            font: {
                                size: 12,
                            },
                        },
                    },
                    y: {
                        grid: {
                            display: false,
                        },
                        ticks: {
                            display: true,
                        },
                    },
                },
                plugins: {
                    legend: {
                        display: false,
                    },
                    tooltip: {
                        enabled: true,
                        mode: 'index',
                        intersect: false,
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
            <span>Market Overview</span>
        </div>

        <div class="mt-8">
            <canvas ref="barChart" style="height: 300px; width: 100%;"></canvas>
        </div>
    </CardLayout>
</template>

