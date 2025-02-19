<script setup>
    import UserLayout from "@/Components/Layouts/UserLayout.vue";
    import CardProduct from "@/Components/Ui/Cards/CardProduct.vue";
    import CategoryList from "@/Components/Products/CategoryList.vue";
    import { Swiper, SwiperSlide } from "swiper/vue";
    import { Autoplay } from "swiper/modules";
    import "swiper/css";

    const { products, categories } = defineProps([ "products", "categories" ])

    const banners = [
        "/img/banner-1.webp",
        "/img/banner-2.webp",
        "/img/banner-3.webp",
    ];
</script>

<template>
    <Head title="Products" />

    <UserLayout>
        <Swiper
            :modules="[Autoplay]"
            :slides-per-view="1"
            :loop="true"
            :autoplay="{ delay: 3000, disableOnInteraction: false }"
            class="w-full h-fit mb-10 relative"
        >
            <SwiperSlide v-for="(banner, index) in banners" :key="index">
                <img
                    :src="banner"
                    :alt="'Banner ' + (index + 1)"
                    class="w-full object-cover"
                />
            </SwiperSlide>

            <div class="bg-gradient-to-b from-transparent to-[#ebebeb] w-full h-[30%] absolute bottom-0  z-10"></div>
        </Swiper>



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
