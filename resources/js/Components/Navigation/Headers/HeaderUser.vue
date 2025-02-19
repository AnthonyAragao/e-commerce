<script setup>
import HeaderContent from "./HeaderContent.vue";
import { ref, onMounted } from "vue";

const { categories } = defineProps(["categories"]);

const isRotated = ref(false);
const showFixedHeader = ref(false);
const search = ref("");

const handleScroll = () => {
    const scrollPosition = window.scrollY;
    showFixedHeader.value = scrollPosition > 50;
};

const toggleRotate = () => {
    isRotated.value = !isRotated.value;

};


onMounted(() => {
    window.addEventListener("scroll", handleScroll);
});
</script>

<template>
    <nav
        class="bg-[#F5F5FA] dark:bg-zinc-900 h-[99px] flex flex-col items-center w-full"
    >
        <HeaderContent  :search="search" @search="search = $event" />

            <div v-show="categories" class="w-[1400px] mx-auto flex items-center gap-3">
                <h4 @click="toggleRotate" :class="{'text-primary dark:text-secondary' : isRotated}" class="cursor-pointer text-gray-900 hover:text-primary text-base dark:text-gray-300 dark:hover:text-secondary my-2">Categorias
                    <i  :class="{ '-rotate-90': isRotated }" class="fas fa-caret-down"></i>
                </h4>
                <ul v-if="isRotated" class="flex gap-2 my-2  justify-between">
                    <li
                        v-for="category in categories"
                        :key="category.id"
                        class=" text-gray-500 text-sm hover:text-primary cursor-pointer dark:text-gray-400 hover:scale-105 dark:hover:text-secondary"
                    >
                        <Link :href="`/categories/${category.slug}`">
                            {{ category.name.split(' ').map(word => word.charAt(0).toUpperCase() + word.slice(1)).join(' ') }}
                        </Link>
                    </li>
                </ul>
            </div>

    </nav>

    <nav
        class="bg-[#F5F5FA] dark:bg-zinc-900 h-[88px] flex items-center z-20 w-full fixed left-1/2 top-0 -translate-x-1/2 -translate-y-full transition-transform duration-300"
        :class="{ 'translate-y-0': showFixedHeader }"
    >
        <HeaderContent :search="search" @search="search = $event" />
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
