<script setup>
import AdminLayout from "../../Components/Layouts/AdminLayout.vue";
import Breadcrumb from "../../Components/Navigation/Breadcrumb.vue";
import CardDashSells from "../../Components/Ui/Cards/CardDashSells.vue";
import CardLayout from "../../Components/Ui/Cards/CardLayout.vue";
import CardLatestClients from "../../Components/Ui/Cards/CardLatestClients.vue";
import TableRecentPurchases from "../../Components/Ui/Tables/TableRecentPurchases.vue";
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
                    class="flex justify-between relative before:content-[''] before:w-full before:h-[1px] before:-bottom-2 before:absolute before:bg-gray-200 dark:before:bg-gray-700 text-gray-800 dark:text-gray-200"
                >
                    Sales Perfomance
                    <div class="flex gap-2 pb-2 text-xs">
                        <button
                            type=""
                            class="relative before:content-[''] before:w-full before:h-[1px] before:-bottom-4 before:absolute before:bg-purple-600 text-purple-600 before:dark:bg-purple-400 dark:text-purple-400"
                        >
                            Today's
                        </button>
                        <button>Monthly</button>

                        <i class="text-gray-500 fas fa-ellipsis-v"></i>
                    </div>
                </div>
                <div class="w-[980px] text-red-300 mt-4">Grafico Temporario</div>
            </CardLayout>

            <CardLayout class="w-[400px]">
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
        <div>
            <p>Graficos</p>
        </div>
    </AdminLayout>
</template>
