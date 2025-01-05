<script setup>
    import AdminLayout from "../../Components/Layouts/AdminLayout.vue";
    import Breadcrumb from "../../Components/Navigation/Breadcrumb.vue";
    import CardDashSells from "../../Components/Ui/Cards/CardDashSells.vue";
    import CardLayout from "../../Components/Ui/Cards/CardLayout.vue";
    import TableRecentPurchases from "../../Components/Ui/Tables/TableRecentPurchases.vue";
    import SalesPerformance from "../../Components/Dashboard/SalesPerformance.vue";
    import LatestClients from "../../Components/Dashboard/LatestClients.vue";
    import ChartDoughnut from "../../Components/Ui/Charts/ChartDoughnut.vue";
    import ChartStackedBars from "../../Components/Ui/Charts/ChartStackedBars.vue";
    import ChartBar from "../../Components/Ui/Charts/ChartBar.vue";
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
            <h2 class="text-base font-bold mb-4">Recent Purchases</h2>
            <TableRecentPurchases />
        </CardLayout>


        <div class="flex gap-8 w-full">
            <div class="w-1/3">
                <ChartBar />
            </div>
            <div class="w-1/3">
                <ChartDoughnut />
            </div>
            <div class="w-1/3">
               <ChartStackedBars />
            </div>
        </div>
    </AdminLayout>
</template>
