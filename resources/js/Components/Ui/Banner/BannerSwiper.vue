<script setup>
    import { Swiper, SwiperSlide } from "swiper/vue";
    import { Autoplay, Navigation, Pagination  } from "swiper/modules";
    import "swiper/css";
    import "swiper/css/navigation";
    import "swiper/css/pagination";

    const banners = [
        "/img/banner-1.webp",
        "/img/banner-2.webp",
        "/img/banner-3.webp",
        "/img/banner-4.webp",
        "/img/banner-5.webp",
        "/img/banner-6.webp",
    ];
</script>

<template>
    <Swiper
        :modules="[Autoplay, Navigation, Pagination]"
        :slides-per-view="1"
        :loop="true"
        :autoplay="{ delay: 3000, disableOnInteraction: false }"
        navigation
        :pagination="{
            type: 'bullets',
        }"
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


<style>
    .swiper-button-next,
    .swiper-button-prev {
        background-color: rgba(0, 0, 0, 0.7);
        border-radius: 50%;
        width: 60px;
        height: 60px;
        opacity: 0;
    }

    .swiper:hover .swiper-button-next,
    .swiper:hover .swiper-button-prev {
        opacity: 1!important;
    }

    .swiper-button-next:hover,
    .swiper-button-prev:hover {
        background-color: rgba(0, 0, 0, 1);
    }

    .swiper-button-next::after,
    .swiper-button-prev::after {
        font-size: 24px;
        color: white;
    }

    .swiper-pagination {
        position: absolute;
        bottom: 180px!important;
    }

    .swiper-pagination-bullet {
        width: 10px;
        height: 10px;
        border: 2px solid #fff!important;
        background-color: #000;
    }

    .swiper-pagination-bullet-active {
        background-color: #fff;
        border-color: #000;
    }
</style>
