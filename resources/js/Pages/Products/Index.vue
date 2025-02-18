<script setup>
    import UserLayout from "@/Components/Layouts/UserLayout.vue";
    import CardProduct from "@/Components/Ui/Cards/CardProduct.vue";
    import CategoryList from "@/Components/Products/CategoryList.vue";

    const { products, categories } = defineProps([ "products", "categories" ])
</script>

<template>
    <Head title="Products" />

    <UserLayout>
        <div class="pb-10 max-w-[1400px] mx-auto grid grid-cols-5 gap-4">
            <aside class="col-span-1 flex flex-col gap-4">
                <CategoryList :categories="categories" />
            </aside>

            <div class="col-span-4 grid grid-cols-[repeat(auto-fill,minmax(240px,1fr))] gap-4">
                <CardProduct
                    v-for="(product, index) in products.data.slice(0, 4)"
                    :key="index"
                    :product="product"
                />
            </div>
        </div>
    </UserLayout>
</template>
