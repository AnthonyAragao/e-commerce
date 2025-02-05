<script setup>
    import { watch, ref } from 'vue';
    import ButtonDarkMode from '../../Ui/Buttons/ButtonDarkMode.vue';

    const { search }  = defineProps(['search']);
    const emit        = defineEmits(['search']);
    const searchValue = ref(search);

    watch(() => search, (value) => {
        searchValue.value = value;
    });


</script>

<template>
    <div
        class="flex h-[80%] dark:bg-zinc-900 justify-between w-[1420px] mx-auto p-2 items-center gap-2"
    >
        <!-- <button
            type="button"
            class="flex items-center justify-center h-12 w-12 rounded-[4px] bg-[#ffff] dark:bg-[#313442] dark:text-white border border-gray-200/70"
        >
            <i class="fas fa-bars"></i>
        </button> -->
        <div class="h-12 w-12">
            <ButtonDarkMode />
        </div>

        <div class="flex-1 h-12  justify-center  rounded-[4px] relative">
            <div
                class="absolute inset-y-0 -left-3 flex items-center pl-6 pointer-events-none"
            >
                <i class="fas fa-search text-gray-400"></i>
            </div>
            <input
                placeholder="Search on the store"
                type="search"
                v-model="searchValue"
                @input="emit('search', $event.target.value)"
                class="py-[13px] pl-8 pr-2 bg-[#ffff] text-sm rounded-[4px] w-full focus:outline-none border border-gray-200/70 dark:bg-[#313442] dark:text-white"
            />
        </div>

        <div class="flex items-center gap-2 bg-[#ffff] p-3 rounded-[4px] h-12 text-[13px]  text-gray-500 border border-gray-200/70 text-xs">
            <img src="/img/user-svg.svg" alt="" class="size-7" />

            <div>
                <div class="flex gap-1">
                    <Link class="hover:text-gray-800 font-bold" href="/login">LOGIN</Link>
                    <span>or</span>
                </div>
                <a class="hover:text-gray-800 font-bold" href="#">REGISTER</a>
            </div>
        </div>

        <div class="flex gap-10 h-12 items-center rounded-[4px] bg-[#fff] p-4 border border-gray-200/70">
            <a href="#" class="relative group">
                <img src="/img/headset-svg.svg" alt="sac" class="size-5" />
                <span class="infotag">SAC</span>
            </a>
            <a href="#" class="relative group">
                <img src="/img/heart-svg.svg" alt="favorites" class="size-5" />
                <span class="infotag">Favorites</span>
            </a>
            <a href="#" class="relative group">
                <img src="/img/cart-svg.svg" alt="cart" class="size-6" />
                <span class="infotag">Cart</span>
            </a>
        </div>
    </div>
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
