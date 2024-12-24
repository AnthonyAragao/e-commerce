<script setup>
    import { Link } from '@inertiajs/inertia-vue3';
    import AdminLayout from '../../../Components/Layouts/AdminLayout.vue';
    import Breadcrumb from '../../../Components/Navigation/Breadcrumb.vue';
    import CardLayout from '../../../Components/Ui/Cards/CardLayout.vue';
    import CardAdmProd from '../../../Components/Ui/Cards/CardAdmProd.vue';

    const { products } = defineProps(["products"]);
</script>

<template>
    <AdminLayout>
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-3xl font-bold">Products</h1>
                <!-- caminho da pagina -->
                <Breadcrumb :breadcrumbs="[
                    { 'href': '/admin', 'name': 'Home' },
                    { 'href': '', 'name': 'Products' }
                ]" />
            </div>

            <Link
                href="/admin/products/create"
                class="text-sm bg-[#7364DB] text-white px-4 py-1 rounded-md shadow-md font-bold hover:bg-[#5B4CDB] transition duration-300"
            >
                <i class="fas fa-plus"></i> Add Product
            </Link>
        </div>

        <CardLayout>
            <CardAdmProd />
        </CardLayout>
    </AdminLayout>
</template>
