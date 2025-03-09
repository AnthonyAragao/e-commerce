<script setup>
    import { ref, onMounted } from "vue";
    import HeaderContent from "./HeaderContent.vue";
    import CategoryList from "./CategoryList.vue";

    const showFixedHeader = ref(false);
    const search          = ref("");

    const handleScroll = () => {
        const scrollPosition = window.scrollY;
        showFixedHeader.value = scrollPosition > 50;
    };

    onMounted(() => {
        window.addEventListener("scroll", handleScroll);
    });
</script>

<template>
    <nav
        class="bg-[#F5F5FA] dark:bg-zinc-900 py-3 flex flex-col items-center w-full"
    >
        <HeaderContent
            :search="search"
            @search="search = $event"
        />
        <CategoryList />
    </nav>

    <nav
        class="bg-[#F5F5FA] dark:bg-zinc-900 py-3 flex items-center z-20 w-full fixed top-0 -translate-y-full transition-transform duration-300"
        :class="{ 'translate-y-0': showFixedHeader }"
    >
        <HeaderContent
            :search="search"
            @search="search = $event"
        />
    </nav>
</template>
