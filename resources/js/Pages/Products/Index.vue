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
        </div>
    </UserLayout>
</template>
