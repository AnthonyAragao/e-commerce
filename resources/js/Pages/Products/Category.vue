<script setup>
    import UserLayout from "@/Components/Layouts/UserLayout.vue";
    import CardProduct from "@/Components/Ui/Cards/CardProduct.vue";
    import Pagination from "@/Components/Navigation/Pagination.vue";
    import CategoryList from "@/Components/Products/CategoryList.vue";

    const { products, categories } = defineProps([ "products", "categories" ])
</script>

<template>
    <Head title="Products" />

    <UserLayout categories="">
        <div class="pb-10 max-w-[1400px] mx-auto grid grid-cols-5 gap-4">
            <aside class="col-span-1 flex flex-col gap-4">
                <CategoryList :categories="categories" />

                <div class="bg-white  border-[1.5px] border-gray-200 dark:border-gray-700 dark:bg-[#1F2128] shadow-sm rounded-[4px] p-4 h-fit">
                    <h2 class="text-lg font-semibold text-gray-700 dark:text-gray-300">Price</h2>
                    <p class="text-sm mt-2 text-gray-500 dark:text-gray-400">Price range</p>

                    <div class="mt-2">
                        <!-- add here with library noUiSlider -->
                    </div>
                </div>
            </aside>

            <div class="col-span-4 grid grid-cols-[repeat(auto-fill,minmax(240px,1fr))] gap-4">
                <CardProduct
                    v-for="product in products.data"
                    :key="product.id"
                    :product="product"
                />
            </div>

            <div class="col-span-4 col-start-2 mt-4">
                <Pagination :pagination="products"/>
            </div>
        </div>
    </UserLayout>
</template>
