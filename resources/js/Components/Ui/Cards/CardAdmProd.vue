<script setup>
    import { ref } from 'vue';

    const modalEditRemove = ref(false);
</script>

<template>
    <div
        class="w-[300px] flex flex-col justify-between p-4 h-[300px] bg-white dark:border-gray-700 rounded-md border-[1.5px]  border-gray-300 dark:bg-[#1F2128] dark:border-[1.5px]"
    >
        <div>
            <div class="flex gap-2 relative">
                <img
                    src="/img/exemple.png"
                    alt=""
                    class=" border-[1.5px] border-gray-300 dark:border-[#b3b3b3] p-[.2px] rounded-md w-20 h-20 object-cover"
                >

                <div class="flex">
                    <div class="flex flex-col gap-2">
                        <div>
                            <h3 class="text-[11px] font-bold dark:text-gray-200 mt-[2.8px]">Apple iPhone X 64GB Pro Max 8GB MSKSOWKSL </h3>
                            <span class="text-[11px] text-gray-500">Silver</span>
                        </div>
                        <span class="text-[13px] font-semibold dark:text-gray-200">$105.55</span>
                    </div>
                </div>

                <button
                    @click="modalEditRemove = !modalEditRemove"
                    class="border-[1.5px] border-gray-300 dark:border-gray-500 flex items-center bg-[#f5f5fa] rounded-md size-6 pl-[1px] dark:bg-[#313442]"
                >
                     <i class="fas fa-ellipsis-v p-2 rotate-90 text-xs dark:text-gray-400 text-gray-500 mr-1"></i>
                </button>

                <Transition name="fade">
                    <div
                        v-if="modalEditRemove"
                        class="absolute w-24 flex h-12 right-0 top-7 border-[1.5px] rounded-md text-end py-[1px] px-2 bg-[#f5f5fa] dark:bg-[#313442] dark:border-gray-500 flex-col"
                    >
                        <a

                            href="#"
                            class="text-sm font-semibold dark:text-gray-300 hover:dark:text-gray-100 hover:text-gray-900 text-gray-500 transition-colors duration-300"
                        >
                            <i class="fas fa-pen text-[13px]"></i>
                            Editar
                        </a>

                        <a
                            href="#"
                            class="text-sm font-semibold  hover:dark:text-red-500 dark:text-red-500/80 text-red-500/90 hover:text-red-600/90 transition-colors duration-300"
                        >
                            <i class="fas fa-trash text-[13px]"></i>
                            Remover
                        </a>
                    </div>
              </Transition>
            </div>

            <div class="mt-1">
                <h3 class="zinc-900 text-md font-medium dark:text-gray-200">Summary</h3>
                <p class="text-xs text-gray-500 dark:text-[#d1d0d0]">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
            </div>
        </div>

        <div class=" bg-[#f5f5fa] dark:bg-[#313442] p-3 rounded-md border-[1.5px] dark:border-gray-600  border-gray-200">
            <div
                class="flex justify-between dark:border-gray-500  pb-2 border-b-[1.5px] border-gray-200 dark:text-gray-300"
            >
                <p class="text-sm ">Sales </p>
                <div class=" flex items-center gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-3" fill="#50d1b2" viewBox="0 0 384 512"><path d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2 160 448c0 17.7 14.3 32 32 32s32-14.3 32-32l0-306.7L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z"/></svg>
                    <span class="text-xs text-gray-500 dark:text-gray-400"> 2025</span>
                </div>
            </div>

            <div
                class="flex justify-between mt-2"
            >
                <p class="text-sm  ">Amount </p>
                <div class="flex items-center gap-1">
                    <div
                        class="w-11 rounded-md h-1 bg-[#c6cbd9] after:content-[''] after:block after:w-4/5 after:h-1 after:rounded-md after:bg-[#50d1b2]"
                    ></div>
                    <span class="text-xs text-gray-500 dark:text-gray-400"> 2025</span>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
    .fade-enter-from {
        opacity: 0;
        transform: translateY(-10px);
    }
    .fade-enter-to {
        opacity: 1;
        transform: translateY(0);
    }
    .fade-enter-active,
    .fade-leave-active {
        transition: all 0.3s;
    }
    .fade-leave-from {
        opacity: 1;
        transform: translateY(0);
    }
    .fade-leave-to {
        opacity: 0;
        transform: translateY(-10px);
    }
</style>
