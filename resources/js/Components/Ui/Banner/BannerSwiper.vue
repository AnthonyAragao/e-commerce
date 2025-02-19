<script setup>
    import { Swiper, SwiperSlide } from "swiper/vue";
    import { Autoplay } from "swiper/modules";
    import "swiper/css";

    const banners = [
        "/img/banner-1.webp",
        "/img/banner-2.webp",
        "/img/banner-3.webp",
    ];
</script>

<template>
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

        <div class="bg-gradient-to-b from-transparent to-[#F5F5FA] dark:to-[#18181B] w-full h-[40%] absolute bottom-0 z-10"></div>
    </Swiper>
</template>
