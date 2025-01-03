<script setup>
import AdminLayout from "../../Components/Layouts/AdminLayout.vue";
import Breadcrumb from "../../Components/Navigation/Breadcrumb.vue";
import CardDashSells from "../../Components/Ui/Cards/CardDashSells.vue";
import CardLayout from "../../Components/Ui/Cards/CardLayout.vue";
import CardLatestClients from "../../Components/Ui/Cards/CardLatestClients.vue";
import TableRecentPurchases from "../../Components/Ui/Tables/TableRecentPurchases.vue";
import { onMounted } from "vue";


onMounted(() => {
  // Gráfico de linhas
  const ctxLine = document.getElementById('myChart').getContext('2d');
  new Chart(ctxLine, {
    type: 'line',
    data: {
        labels: ['jan', 'feb', 'mar', 'apr', 'may', 'jun', 'jul', 'aug', 'sep', 'oct', 'nov', 'dec'],
        datasets: [
            {
                label: 'completed',
                data: [12, 14, 3, 5, 2, 3, 10, 15, 20, 14, 12, 9],
                borderWidth: 1,
                borderColor: 'rgba(75, 192, 192, 1)',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
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
                borderWidth: 1,
                borderColor: 'rgba(153, 102, 255, 1)',
                backgroundColor: 'rgba(153, 102, 255, 0.2)',
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
                borderWidth: 1,
                borderColor: 'rgba(255, 159, 64, 1)',
                backgroundColor: 'rgba(255, 159, 64, 0.2)',
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

  // Gráfico de barras
  const ctxBar = document.getElementById('barChart').getContext('2d');
  new Chart(ctxBar, {
    type: 'bar',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 5, 2, 3],
        borderWidth: 1,
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)'
        ],
        borderColor: [
          'rgba(255, 99, 132, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
        ]
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });

  // Gráfico de doughnut
  const ctxDoughnut = document.getElementById('doughnutChart').getContext('2d');
  new Chart(ctxDoughnut, {
    type: 'doughnut',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: 'Votes',
        data: [12, 19, 3, 5, 2, 3],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)'
        ],
        borderColor: [
          'rgba(255, 99, 132, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false
    }
  });

  // Gráfico de montanha (área)
  const ctxArea = document.getElementById('areaChart').getContext('2d');
  new Chart(ctxArea, {
    type: 'line',
    data: {
      labels: ['0', '5', '10', '15', '20', '25'],
      datasets: [
        {
          label: '# of Votes',
          data: [12, 19, 3, 5, 2, 3],
          borderWidth: 1,
          borderColor: 'rgba(75, 192, 192, 1)',
          backgroundColor: 'rgba(75, 192, 192, 0.2)',
          fill: true
        },
        {
          label: '# of Likes',
          data: [5, 10, 15, 20, 25, 30],
          borderWidth: 1,
          borderColor: 'rgba(153, 102, 255, 1)',
          backgroundColor: 'rgba(153, 102, 255, 0.2)',
          fill: true
        },
        {
          label: '# of Shares',
          data: [2, 4, 6, 8, 10, 12],
          borderWidth: 1,
          borderColor: 'rgba(255, 159, 64, 1)',
          backgroundColor: 'rgba(255, 159, 64, 0.2)',
          fill: true
        }
      ]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
});
</script>

<template>
    <AdminLayout>
        <h1 class="text-3xl font-bold">Dashboard</h1>

        <Breadcrumb
            :breadcrumbs="[
                { href: '/admin', name: 'Home' },
                { href: '', name: 'Dashboard' },
            ]"
        />

        <CardDashSells />

        <div class="flex gap-6 w-full">
            <CardLayout class="w-full py-4">
                <div
                    class="flex justify-between font-bold relative before:content-[''] before:w-full before:h-[1px] before:-bottom-2 before:absolute before:bg-gray-200 dark:before:bg-gray-700 text-gray-800 dark:text-gray-200"
                >
                    Sales Perfomance
                    <div class="flex gap-2 pb-2 text-xs">
                        <button
                            type=""
                            class="relative before:content-[''] before:w-full before:h-[1px] before:-bottom-4 before:absolute before:bg-purple-600 text-purple-600 before:dark:bg-purple-400 dark:text-purple-400">
                            Today's
                        </button>
                        <button>Monthly</button>
                        <i class="text-gray-500 fas fa-ellipsis-v"></i>
                    </div>
                </div>
                <div class=" text-red-300 mt-4">
                    <div>
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
            </CardLayout>
            <CardLayout class="w-[60%]">
                <div>
                    <div class="flex gap-2 justify-between mb-2">
                        Latest Clients
                        <i class="text-gray-500 fas fa-ellipsis-v mt-1"></i>
                    </div>
                    <CardLatestClients />
                    <CardLatestClients />
                    <CardLatestClients />
                    <CardLatestClients />
                    <CardLatestClients />
                    <CardLatestClients />
                    <CardLatestClients />
                </div>
            </CardLayout>
        </div>
        <CardLayout class="mt-2">
            <div>
                <p>Compras Recentes</p>
                <TableRecentPurchases />
            </div>
        </CardLayout>
        <div class="flex gap-6">
            <CardLayout  class="w-[350px] mt-2 flex flex-col justify-end" >
                <canvas id="barChart"></canvas>
            </CardLayout>
            <CardLayout class="w-[350px] mt-2">
                <canvas id="doughnutChart"></canvas>
            </CardLayout>
            <CardLayout class="w-[350px] mt-2">
                <canvas id="areaChart"></canvas>
            </CardLayout>
        </div>
    </AdminLayout>
</template>
