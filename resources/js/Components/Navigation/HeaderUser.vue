<script setup>
</script>

<template>
    <Nav class="bg-white h-[88px] flex items-center  ">
        <div class="flex h-[80%] dark:bg-zinc-900 justify-between w-[1400px] mx-auto p-4
        items-center gap-2">
        <div class="  flex p-3 rounded-lg bg-[#F5F5FA]">
            <button>Hamburguer</button>
        </div>
            <div class="flex w-[66%] justify-center  px-3  rounded-lg relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-6 pointer-events-none">
                        <i class="fas fa-search text-gray-400"></i>
                    </div>
                    <input
                        placeholder="Search on the store"
                        type="search"
                        class="py-[14px] pl-8 bg-[#F5F5FA] text-sm   rounded-md w-full focus:outline-none   dark:bg-[#313442] dark:text-white "
                    />

            </div>
            <div class="bg-[#F5F5FA] p-3 rounded-lg"
            ><img src="" alt="">
            <a href="">ENTRE</a><span>ou</span>
            <a href="#">CADASTRA-SE</a></div>

            <div class="flex gap-4">
                    <a href="#">
                        <img src="" alt="">
                        T
                    </a>
                    <a href="#">
                        <img src="" alt="">
                        D
                    </a>
                    <a href="#">
                        <img src="" alt="">
                        H
                    </a>

            </div>
        </div>
    </Nav>
</template>

<style scoped>
</style>
