<script setup>
</script>

<template>
    <Nav class="bg-[#F5F5FA] h-[88px] flex items-center  fixed z-10 left-1/2 top-0 -translate-x-1/2 ">
        <div class="flex h-[80%] dark:bg-zinc-900 justify-between w-[1420px] mx-auto p-4
        items-center gap-2">
            <div class=" h-12  flex p-3 rounded-lg bg-[#ffff]">
                <button>
                    <i  class="fas fa-bars"></i>
                </button>
            </div>
                <div class="flex h-12 w-[66%] justify-center  px-3  rounded-lg relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-6 pointer-events-none">
                            <i class="fas fa-search text-gray-400"></i>
                        </div>
                        <input
                            placeholder="Search on the store"
                            type="search"
                            class="py-[14px] pl-8 pr-2 bg-[#ffff] text-sm   rounded-md w-full focus:outline-none   dark:bg-[#313442] dark:text-white "
                        />
                </div>

                <div class="bg-[#ffff] p-3 rounded-lg h-12 text-[13px] flex flex-col font-semibold text-gray-500 justify-center"
                ><img src="" alt="">
               <div class="flex gap-1"> <a class="hover:text-gray-800" href="">ENTRE</a><span class="font-normal">ou</span></div>
                    <a class="hover:text-gray-800" href="#">CADASTRA-SE</a></div>

                    <div class="flex gap-4 h-12 items-center rounded-lg bg-[#fff] p-3">
                    <a href="#" class="relative group">
                        <img src="" alt="">
                        <!-- ícone de SAC -->
                        <i class="fas fa-headset"></i>
                        <span class="infotag">SAC</span>
                    </a>
                    <a href="#" class="relative group">
                        <img src="" alt="">
                        <!-- ícone de Favoritos -->
                        <i class="fas fa-heart"></i>
                        <span class="infotag">Favoritos</span>
                    </a>
                    <a href="#" class="relative group">
                        <img src="" alt="">
                        <!-- ícone de Carrinho -->
                        <i class="fas fa-shopping-cart"></i>
                        <span class="infotag">Carrinho</span>
                    </a>
                </div>

        </div>
    </Nav>
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
    transform: translateX(-70%) translateY(20px);
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
