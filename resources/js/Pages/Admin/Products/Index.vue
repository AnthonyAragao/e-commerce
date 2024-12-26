<script setup>
    import { Link } from '@inertiajs/inertia-vue3';
    import AdminLayout from '../../../Components/Layouts/AdminLayout.vue';
    import Breadcrumb from '../../../Components/Navigation/Breadcrumb.vue';
    import CardLayout from '../../../Components/Ui/Cards/CardLayout.vue';
    import CardAdmProduct from '../../../Components/Ui/Cards/CardAdmProduct.vue';
    import Success from '../../../Components/Ui/Notifications/Success.vue';
    import { onMounted, ref } from 'vue';

    const { products } = defineProps(["products"]);

    const success = ref(false);

    onMounted(() => {
        // Adicionar logica aqui
        success.value = true;
    });
</script>

<template>
    <AdminLayout>
        <Success
            v-if="success"
            message="Product created successfully"
            duration="3000"
        />

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
            <div class="flex flex-wrap gap-5">
                <CardAdmProduct
                    v-for="product in products"
                    :key="product.id"
                    :product="product"
                />
            </div>
        </CardLayout>
    </AdminLayout>
</template>
