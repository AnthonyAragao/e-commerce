<script setup>
    import HeaderContent from "./HeaderContent.vue";
    import { ref , onMounted } from "vue";

    const showFixedHeader  = ref(false);
    const search           = ref("");

    const handleScroll = () => {
        const scrollPosition = window.scrollY;
        showFixedHeader.value = scrollPosition > 50;
    };

    onMounted(() => {
        window.addEventListener("scroll", handleScroll);
    });
</script>

<template>
    <nav class="bg-[#F5F5FA] dark:bg-zinc-900 h-[88px] flex items-center z-10 w-full">
        <HeaderContent
            :search="search"
            @search="search = $event"
        />
    </nav>

    <nav
        class="bg-[#F5F5FA] dark:bg-zinc-900 h-[88px] flex items-center z-10 w-full fixed left-1/2 top-0 -translate-x-1/2 -translate-y-full transition-transform duration-300"
        :class="{'translate-y-0': showFixedHeader}"
    >
        <HeaderContent
            :search="search"
            @search="search = $event"
        />
    </nav>
</template>

<style scoped>
    .group:hover .infotag {
        opacity: 1;
        transform: translateY(5px);
    }

    .infotag {
        position: absolute;
        bottom: -1.5rem;
        left: 70%;
        transform: translateX(-60%) translateY(15px);
        background-color: #333;
        color: #fff;
        padding: 0.2rem 0.5rem;
        border-radius: 0.25rem;
        font-size: 0.75rem;
        white-space: nowrap;
        opacity: 0;
        transition: opacity 0.3s, transform 0.3s;
    }
</style>
