<script setup>
    import { provide } from "vue";
    import UserLayout from "@/Components/Layouts/UserLayout.vue";
    import BannerSwiper from "@/Components/Ui/Banner/BannerSwiper.vue";
    import ProductSection from "@/Components/Products/ProductSection.vue";
    import PromoCard from "@/Components/Ui/Cards/PromoCard.vue";

    const { bestSellersProducts, latestProducts, categories } = defineProps([ "bestSellersProducts", "latestProducts", "categories" ]);
    provide("categories", categories);
</script>

<template>
    <Head title="E-commerce" />

    <UserLayout>
        <div class="relative mb-44">
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

        <ProductSection
            title="best sellers"
            icon="fas fa-fire"
            :products="bestSellersProducts"
        />

        <ProductSection
            title="new Arrivals"
            icon="fas fa-star"
            :products="latestProducts"
        />

        <div class="max-w-[1400px] mx-auto mb-20 grid grid-cols-2 gap-8">
            <PromoCard
                title="Activate Coupons"
                buttonText="Activate"
                image="/img/cupon.jpg"
            />

            <PromoCard
                subtitle="enjoy"
                title="offers of the day"
                buttonText="View Offers"
                image="/img/offer.jpg"
            />
        </div>
    </UserLayout>
</template>
