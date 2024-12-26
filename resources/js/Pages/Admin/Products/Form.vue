<script setup>
    import AdminLayout from '../../../Components/Layouts/AdminLayout.vue';
    import Breadcrumb from '../../../Components/Navigation/Breadcrumb.vue';
    import CardLayout from '../../../Components/Ui/Cards/CardLayout.vue';
    import TextInput from '../../../Components/Ui/Inputs/TextInput.vue';
    import TextAreaInput from '../../../Components/Ui/Inputs/TextAreaInput.vue';
    import SelectInput from '../../../Components/Ui/Selects/SelectInput.vue';
    import NumberInput from '../../../Components/Ui/Inputs/NumberInput.vue';
    import ProductGallery from '../../../Components/Products/ProductGallery.vue';
    import { useForm } from '@inertiajs/inertia-vue3';

    const { categories } = defineProps([ 'categories' ]);

    const form = useForm({
        name: '',
        category: '',
        description: '',
        regular_price: '',
        sale_price: '',
        sku: '',
        stock: 0,
        images: []
    });

    const submitForm = () => {
        form.post('/admin/products', {
            onSuccess: () => {
                form.reset();
            },
            onError: (errors) => {
                console.log(form.errors.name);
            }
        });
    }
</script>

<template>
    <AdminLayout>
        <h1 class="text-3xl font-bold">New Product</h1>

        <Breadcrumb :breadcrumbs="[
            { 'href': '/admin', 'name': 'Home' },
            { 'href': '/admin/products', 'name': 'Products' },
            { 'href': '', 'name': 'New Product' }
        ]" />

        <CardLayout
            customClass="pb-20"
        >
            <form @submit.prevent="submitForm">
                <div class="flex w-full gap-6">
                    <TextInput
                        v-model="form.name"
                        label="Name"
                        name="name"
                        placeholder="Product name"
                        :error="form.errors.name"
                    />

                   <SelectInput
                        label="Category"
                        name="category"
                        v-model="form.category"
                        :error="form.errors.category"
                    >
                        <option disabled selected value="">Select an option</option>
                        <option
                            v-for="category in categories"
                            :key="category.id"
                            :value="category.id"
                        >
                            {{ category.name }}
                        </option>
                    </SelectInput>
                </div>

                <div class="mt-10">
                    <TextAreaInput
                        v-model="form.description"
                        label="Description"
                        name="description"
                        placeholder="Product description"
                        :error="form.errors.description"
                    />
                </div>

                <div class="flex w-full gap-6 mt-10">
                    <NumberInput
                        v-model="form.regular_price"
                        label="Regular Price"
                        name="regular_price"
                        placeholder="0.00"
                        :error="form.errors.regular_price"
                    />

                    <NumberInput
                        v-model="form.sale_price"
                        label="Sale Price"
                        name="sale_price"
                        placeholder="0.00"
                        :error="form.errors.sale_price"
                    />
                </div>

                <div class="flex w-full gap-6 mt-10">
                    <TextInput
                        v-model="form.sku"
                        label="SKU"
                        name="sku"
                        placeholder="Product SKU"
                        :error="form.errors.sku"
                    />

                    <NumberInput
                        v-model="form.stock"
                        label="Stock Quantity"
                        name="stock"
                        placeholder="0"
                        :error="form.errors.stock"
                    />
                </div>

                <div class="mt-10">
                    <ProductGallery
                        v-model="form.images"
                        :error="form.errors.images"
                    />
                </div>


                <div class="mt-10">
                    <button
                        type="submit"
                        class="bg-[#7364DB] text-sm text-white px-6 py-2 rounded-md hover:bg-[#5B48A2] transition duration-300"
                    >
                        <i class="fas fa-save"></i> Save Product
                    </button>
                </div>
            </form>

        </CardLayout>
    </AdminLayout>
</template>
