<script setup>
    import AdminLayout from '../../../Components/Layouts/AdminLayout.vue';
    import Breadcrumb from '../../../Components/Navigation/Breadcrumb.vue';
    import CardLayout from '../../../Components/Ui/Cards/CardLayout.vue';
    import CardAdmProduct from '../../../Components/Ui/Cards/CardAdmProduct.vue';
    import Alert from '../../../Components/Ui/Notifications/Alert.vue';
    import ProductDeleteModal from '../../../Components/Ui/Modals/ProductDeleteModal.vue';
    import Pagination from '../../../Components/Navigation/Pagination.vue';
    import { ref } from 'vue';
import { Head } from '@inertiajs/inertia-vue3';

    const { products, flash } = defineProps(["products", "flash"]);

    const breadcrumbs = [
        { 'href': '/admin', 'name': 'Home' },
        { 'href': '', 'name': 'Products' }
    ];

    const isModalVisible = ref(false);
    const idProduct = ref(null);

    const removeProduct = (id) => {
        isModalVisible.value = true;
        idProduct.value = id;
    }
</script>

<template>
    <AdminLayout>
        <Head title="Products" />

        <Alert
            :key="flash.key"
            :message="flash.message"
            duration="1500"
        />

        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-3xl font-bold">Products</h1>
                <Breadcrumb :breadcrumbs="breadcrumbs" />
            </div>

            <Link
                href="/admin/products/create"
                class="text-sm bg-[#7364DB] text-white px-4 py-1 rounded-md shadow-md font-bold hover:bg-[#5B4CDB] transition duration-300"
            >
                <i class="fas fa-plus"></i> Add Product
            </Link>
        </div>

        <CardLayout>
            <div class="flex flex-wrap justify-center gap-4">
                <CardAdmProduct
                    v-for="product in products.data"
                    :key="product.id"
                    :product="product"
                    @deleteProduct="removeProduct"
                />
            </div>
        </CardLayout>

        <Pagination :pagination="products" class="mb-4"/>
    </AdminLayout>

    <!-- Modal delete product -->
    <ProductDeleteModal
        v-if="isModalVisible"
        :idProduct="idProduct"
        @close="isModalVisible = false"
        @confirm="isModalVisible = false"
    />
</template>
