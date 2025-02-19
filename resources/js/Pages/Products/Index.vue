<script setup>
    import UserLayout from "@/Components/Layouts/UserLayout.vue";
    import CardProduct from "@/Components/Ui/Cards/CardProduct.vue";
    import CategoryList from "@/Components/Products/CategoryList.vue";
    import BannerSwiper from "@/Components/Ui/Banner/BannerSwiper.vue";

    const { products, categories } = defineProps([ "products", "categories" ])
</script>

<template>
    <Head title="Products" />

    <UserLayout>
        <div class="relative">
            <BannerSwiper />

            <div class="max-w-[1400px] w-full mx-auto grid grid-cols-6 gap-4 absolute -bottom-32 left-0 right-0 z-10">
                <div
                    v-for="index in 6"
                    :key="index"
                    class="bg-white border-[1.5px] border-gray-200 dark:border-gray-700 dark:bg-[#1F2128] rounded-[4px] p-4 h-[300px] overflow-hidden group relative shadow-sm hover:shadow-[0_2px_4px_0_rgba(0,0,0,0.05),0_1px_2px_0_rgba(0,0,0,0.05)] "
                >

                </div>
            </div>
        </div>

        <div class="mt-40 pb-10 max-w-[1400px] mx-auto grid grid-cols-5 gap-4">
            <div class="col-span-5 grid grid-cols-[repeat(auto-fill,minmax(240px,1fr))] gap-4">
                <CardProduct
                    v-for="(product, index) in products.data.slice(0, 5)"
                    :key="index"
                    :product="product"
                />
            </div>

            <aside class="col-span-1 flex flex-col gap-4">
                <CategoryList :categories="categories" />
            </aside>
        </div>


    </UserLayout>
</template>
