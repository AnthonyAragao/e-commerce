<script setup>
    import { ref, onMounted } from 'vue';
    import { Chart, registerables } from 'chart.js';

    Chart.register(...registerables);

    const chartCanvas = ref(null);

    onMounted(() => {
        new Chart(chartCanvas.value, {
            type: 'line',
            data: {
                labels: ['jan', 'feb', 'mar', 'apr', 'may', 'jun', 'jul', 'aug', 'sep', 'oct', 'nov', 'dec'],
                datasets: [
                    {
                        label: 'completed',
                        data: [12, 14, 3, 5, 2, 3, 10, 15, 20, 14, 12, 9],
                        borderColor: 'rgba(75, 192, 192, 1)',
                        tension: 0.4,
                        borderWidth: 2,
                        pointRadius: 0,
                        fill:{
                            target: 'origin',
                            above: 'rgba(75, 192, 192, 0.1)',
                            below: 'rgba(75, 192, 192, 0.1)',
                        }
                    },
                    {
                        label: 'pending',
                        data: [5, 10, 12, 9, 8, 5, 11, 14, 13, 9, 4, 7],
                        borderColor: 'rgba(153, 102, 255, 1)',
                        tension: 0.4,
                        borderWidth: 2,
                        pointRadius: 0,
                        fill:{
                            target: 'origin',
                            above: 'rgba(153, 102, 255, 0.1)',
                            below: 'rgba(153, 102, 255, 0.1)',
                        }
                    },
                    {
                        label: 'unpaid',
                        data: [2, 4, 6, 8, 10, 4, 8, 7, 9, 11, 14, 12],
                        borderColor: 'rgba(255, 159, 64, 1)',
                        tension: 0.4,
                        borderWidth: 2,
                        pointRadius: 0,
                        fill:{
                            target: 'origin',
                            above: 'rgba(255, 159, 64, 0.1)',
                            below: 'rgba(255, 159, 64, 0.1)',
                        }
                    }
                ]
            },

            options: {
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        display: true,
                        ticks: {
                            display: false
                        },
                        grid: {
                            display: false
                        }
                    },
                    x: {
                        grid: {
                            display: true
                        },
                        ticks: {
                            display: true
                        }
                    }
                },
                plugins: {
                    tooltip: {
                        enabled: true,
                        mode: 'index',
                        intersect: false,
                    },
                    legend: {
                        display: true,
                        position: 'top',
                        align: 'start',
                        labels: {
                            boxWidth: 7,
                            boxHeight: 7,
                            font: {
                                size: 12,
                                weight: 'bold'
                            },
                        }
                    }
                },
                animation: {
                    duration: 1000,
                    easing: 'easeInOutQuint',
                }
            }
        });
    });
</script>

<template>
    <div>
        <canvas ref="chartCanvas" style="height: 380px; width: 100%;"></canvas>
    </div>
</template>
