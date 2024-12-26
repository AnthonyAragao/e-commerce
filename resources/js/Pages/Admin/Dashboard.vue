<script setup>
    import AdminLayout from '../../Components/Layouts/AdminLayout.vue';
    import Breadcrumb from '../../Components/Navigation/Breadcrumb.vue';
    import CardDashSells from '../../Components/Ui/Cards/CardDashSells.vue';
</script>

<template>
    <AdminLayout>
        <h1 class="text-3xl font-bold">Dashboard</h1>
        <!-- caminho da pagina -->

        <Breadcrumb :breadcrumbs="[
            { 'href': '/admin', 'name': 'Home' },
            { 'href': '', 'name': 'Dashboard' }
        ]" />
        <div>
            <CardDashSells />
        </div>
        <div>
            <div>Sales Perfomance</div>
            <div>Latest Clients</div>
        </div>
        <div>
            <p>Compras Recentes</p>
        </div>
        <div>
            <p>Graficos</p>
        </div>



    </AdminLayout>
</template>
