<script setup>
    import { provide } from "vue";
    import UserLayout from "@/Components/Layouts/UserLayout.vue";
    import CardProduct from "@/Components/Ui/Cards/CardProduct.vue";
    import BannerSwiper from "@/Components/Ui/Banner/BannerSwiper.vue";

    const { products, categories } = defineProps([ "products", "categories" ])
    provide("categories", categories)
</script>

<template>
    <Head title="E-commerce" />

    <UserLayout>
        <div class="relative">
            <BannerSwiper />

            <div class="max-w-[1400px] mx-auto grid grid-cols-6 gap-4 absolute -bottom-32 left-0 right-0 z-10">
                <div
                    v-for="index in 6"
                    :key="index"
                    class="bg-white border-[1.5px] border-gray-200 dark:border-gray-700 dark:bg-[#1F2128] rounded-[4px] p-4 h-[300px] overflow-hidden group relative shadow-sm hover:shadow-[0_2px_4px_0_rgba(0,0,0,0.05),0_1px_2px_0_rgba(0,0,0,0.05)] "
                >
                    <h2 class="text-sm font-semibold dark:text-white">Title {{ index }} here</h2>

                    <img src="/img/exemple.png" alt="example" class="w-full mt-2"/>

                    <p class="text-xs mt-4 text-gray-500 dark:text-gray-400 text-center">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, voluptates.
                    </p>

                    <button
                        class="absolute bottom-4 left-1/2 transform -translate-x-1/2 w-36 py-2 text-xs bg-orange-200/40 text-primary dark:bg-secondary dark:text-white border border-orange-300/30 dark:border-secondary rounded-[4px] transition-transform duration-300 group-hover:transform group-hover:-translate-y-1"
                    >
                        View More
                    </button>
                </div>
            </div>
        </div>

        <div class="max-w-[1400px] mx-auto mt-44 mb-10 grid grid-cols-[repeat(auto-fill,minmax(240px,1fr))] gap-4">
            <CardProduct
                v-for="(product, index) in products.data.slice(0, 5)"
                :key="index"
                :product="product"
            />
        </div>


        <!-- Adicionar em um componente separado depois -->
        <div class="max-w-[1400px] mx-auto mb-20 grid grid-cols-2 gap-4">
            <div class="h-[300px] bg-white rounded-md shadow-md flex justify-between items-center overflow-hidden border border-gray-100 dark:bg-[#1F2128] dark:border-gray-700">

                <div class="mx-10 w-48">
                    <h2 class="text-2xl font-semibold text-gray-600 dark:text-white uppercase">
                        activate coupons
                    </h2>

                    <button class="mt-4 bg-primary text-white w-full py-2 rounded-md text-sm dark:bg-secondary">
                        Activate
                    </button>
                </div>

                <img src="/img/cupon.jpg" alt=""  class="h-full object-cover object-center w-[300px]">
            </div>


            <div class="h-[300px] bg-white rounded-md shadow-md flex justify-between items-center overflow-hidden border border-gray-100 dark:bg-[#1F2128] dark:border-gray-700">
                <div class="mx-10 w-48">
                    <p class="uppercase text-gray-500 font-semibold tracking-[.5rem] text-xs">enjoy</p>
                    <h2 class="text-2xl font-semibold text-gray-600 dark:text-white uppercase mt-4">
                        offers of the day
                    </h2>

                    <button class="mt-4 bg-primary text-white w-full py-2 rounded-md text-sm dark:bg-secondary">
                        View Offers
                    </button>
                </div>

                <img src="/img/offer.jpg" alt="" class="h-full object-cover object-center w-[300px]">
            </div>
        </div>
    </UserLayout>
</template>
