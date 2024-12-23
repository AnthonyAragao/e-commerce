<script setup>
    import AdminLayout from '../../../Components/Layouts/AdminLayout.vue';

    const { products } = defineProps(["products"]);
</script>

<template>
    <AdminLayout>
        <h1 class="text-3xl font-bold">Products</h1>

        <!-- caminho da pagina -->
        <div class="space-x-2 mt-2 text-gray-400 font-semibold text-sm">
            <inertia-link href="/admin/dashboard">
                <i class="fas fa-home"></i> Home
            </inertia-link>
            <span class="text-gray-400">></span>
            <span class="text-[#7364DB] font-bold">Products</span>
        </div>
    </AdminLayout>
</template>
