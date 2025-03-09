<script setup>
    import { provide } from "vue";
    import UserLayout from "@/Components/Layouts/UserLayout.vue";
    import BannerSwiper from "@/Components/Ui/Banner/BannerSwiper.vue";
    import ProductSection from "@/Components/Products/ProductSection.vue";
    import PromoCard from "@/Components/Ui/Cards/PromoCard.vue";
    import FeatureCards from "@/Components/Ui/Cards/FeatureCards.vue";

    const { bestSellersProducts, latestProducts, categories } = defineProps([ "bestSellersProducts", "latestProducts", "categories" ]);
    provide("categories", categories);
</script>

<template>
<<<<<<< HEAD
    <Head title="Products" />

    <UserLayout>
        <div class="pb-10 max-w-[1400px] mx-auto grid grid-cols-5 gap-4">
            <aside class="col-span-1 flex flex-col gap-4">
                <div class="bg-white  border-[1.5px] border-gray-200 dark:border-gray-700 dark:bg-[#1F2128] shadow-sm rounded-[4px] p-4 h-fit">
                    <h2 class="text-lg font-semibold text-gray-700 dark:text-gray-300">Categories list</h2>
                    <ul class="mt-2">
                        <li
                            v-for="category in categories"
                            :key="category.id"
                            class="mt-1 text-gray-500 text-sm hover:text-gray-800 cursor-pointer
                            dark:text-gray-400 dark:hover:text-gray-300"
                        >
                            <Link :href="`/categories/${category.slug}`">
                                {{ category.name }}
                            </Link>
                        </li>
                    </ul>
                </div>


            </aside>
<!--
            <div class="flex col-span-4 col-start-2 flex-wrap gap-4">
                <div
                    v-for="product in products.data"
                    :key="product.id"
                    class="bg-white shadow-md rounded-lg p-4 w-[240px] h-[480px] overflow-hidden transition-transform transform hover:scale-105"
                >
                    <img :src="product.image" alt="product.name" class="w-full h-48 object-cover object-center">

                    <div class="mt-4">
                        <h2 class="text-xl font-semibold text-gray-800">{{ product.name }}</h2>
                        <p class="mt-2 text-gray-600">{{ product.description }}</p>
                        <div class="mt-4 flex justify-between items-center">
                            <span class="text-xl font-semibold text-gray-800">{{ product.price }}</span>
                            <button class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div> -->
            
=======
    <Head title="E-commerce" />

    <UserLayout>
        <div class="relative mb-44">
            <BannerSwiper />
            <FeatureCards />
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
>>>>>>> fcdf89186ab434d97f6bba3b9ed6ff12f0116cd2
        </div>
    </UserLayout>
</template>
