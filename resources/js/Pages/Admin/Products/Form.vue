<script setup>
    import AdminLayout from '../../../Components/Layouts/AdminLayout.vue';
    import Breadcrumb from '../../../Components/Navigation/Breadcrumb.vue';
    import CardLayout from '../../../Components/Ui/Cards/CardLayout.vue';
    import TextInput from '../../../Components/Ui/Inputs/TextInput.vue';
    import TextAreaInput from '../../../Components/Ui/Inputs/TextAreaInput.vue';
    import SelectInput from '../../../Components/Ui/Selects/SelectInput.vue';
    import NumberInput from '../../../Components/Ui/Inputs/NumberInput.vue';

    const { categories } = defineProps([ 'categories' ]);
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
            customClass="pb-28"
        >

            <form action="" method="post">
                <div class="flex w-full gap-6">
                    <TextInput
                        label="Name"
                        name="name"
                        placeholder="Product name"
                        required
                    />

                   <SelectInput
                        label="Category"
                        name="category"
                        required
                    >
                        <option disabled selected value="">-- Select an option --</option>
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
                        label="Description"
                        name="description"
                        placeholder="Product description"
                        required
                    />
                </div>

                <div class="flex w-full gap-6 mt-10">
                    <NumberInput
                        label="Regular Price"
                        name="regular_price"
                        placeholder="0.00"
                        required
                    />

                    <NumberInput
                        label="Sale Price"
                        name="sale_price"
                        placeholder="0.00"
                        required
                    />
                </div>

                <div class="flex w-full gap-6 mt-10">
                    <TextInput
                        label="SKU"
                        name="sku"
                        placeholder="Product SKU"
                        required
                    />

                    <NumberInput
                        label="Stock Quantity"
                        name="stock"
                        placeholder="0"
                        required
                    />
                </div>

            </form>

        </CardLayout>
    </AdminLayout>
</template>
