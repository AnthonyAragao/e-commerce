<script setup>
import AdminLayout from "../../Components/Layouts/AdminLayout.vue";
import Breadcrumb from "../../Components/Navigation/Breadcrumb.vue";
import CardDashSells from "../../Components/Ui/Cards/CardDashSells.vue";
import CardLayout from "../../Components/Ui/Cards/CardLayout.vue";
import TableRecentPurchases from "../../Components/Ui/Tables/TableRecentPurchases.vue";
import SalesPerformance from "../../Components/Dashboard/SalesPerformance.vue";
import LatestClients from "../../Components/Dashboard/LatestClients.vue";
import { onMounted } from "vue";


onMounted(() => {
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
            <SalesPerformance />
            <LatestClients />
        </div>

        <CardLayout class="mt-2">
            <div>
                <h2 class="text-base font-bold mb-4">Recent Purchases</h2>
                <TableRecentPurchases />
            </div>
        </CardLayout>



        <div class="flex w-full gap-2">
            <div class="w-1/3">
                <CardLayout  class="mt-2 flex flex-col justify-end" >
                    <canvas id="barChart"></canvas>
                </CardLayout>
            </div>
            <div class="w-1/3">
                <CardLayout class=" mt-2">
                    <canvas id="doughnutChart"></canvas>
                </CardLayout>
            </div>

            <div class="w-1/3">
                <CardLayout class=" mt-2">
                    <canvas id="areaChart"></canvas>
                </CardLayout>
            </div>
        </div>
    </AdminLayout>
</template>
