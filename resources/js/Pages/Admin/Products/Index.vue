<script setup>
    import { Link } from '@inertiajs/inertia-vue3';
    import AdminLayout from '../../../Components/Layouts/AdminLayout.vue';
    import Breadcrumb from '../../../Components/Navigation/Breadcrumb.vue';
    import CardLayout from '../../../Components/Ui/Cards/CardLayout.vue';
    import CardAdmProduct from '../../../Components/Ui/Cards/CardAdmProduct.vue';
    import Alert from '../../../Components/Ui/Notifications/Alert.vue';
    import ProductDeleteModal from '../../../Components/Ui/Modals/ProductDeleteModal.vue';
    import { onMounted, ref } from 'vue';

    const { products, flash } = defineProps(["products", "flash"]);

    const success = ref(false);
    const isModalVisible = ref(true);

    onMounted(() => {
        if (flash !== null) {
            success.value = true;
        }
    });

    const handleDelete = () => {
        isModalVisible.value = false;
        console.log('Product deleted');
    }
</script>

<template>
    <AdminLayout>
        <Alert
            v-if="success"
            :message="flash"
            duration="3000"
        />

        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-3xl font-bold">Products</h1>

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
            <div class="flex flex-wrap justify-center gap-4">
                <CardAdmProduct
                    v-for="product in products"
                    :key="product.id"
                    :product="product"
                />
            </div>
        </CardLayout>

    </AdminLayout>

    <!-- Modal delete product -->
    <ProductDeleteModal
        v-if="isModalVisible"
        @close="isModalVisible = false"
        @confirm="handleDelete"
    />

</template>
