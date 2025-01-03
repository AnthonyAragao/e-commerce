<script setup>
    import { ref } from 'vue';

    const { product } = defineProps(["product"]);
    const emit = defineEmits(["deleteProduct"]);
    const modalEditRemoveProduct = ref(false);

    const removeProduct = (id) => {
        modalEditRemoveProduct.value = false;
        emit("deleteProduct", id);
    }
</script>

<template>
    <div
        class="w-[300px] h-[300px] flex flex-col justify-between p-4 rounded-md bg-white border-[1.5px] border-gray-200 dark:border-gray-700 dark:bg-[#1F2128]"
    >
        <div>
            <div class="flex gap-2 relative">
                <img
                    :src="`/storage/${product.images[0].image_path}`"
                    :alt="product.name"
                    class="border-[1.5px] border-gray-300 dark:border-[#b3b3b3] p-[.2px] rounded-md w-20 h-20 object-cover"
                >

                <div class="flex">
                    <div class="flex flex-col gap-2">
                        <div>
                            <h3 class="text-[11px] font-bold dark:text-gray-200 mt-[2.8px] line-clamp-2">
                                {{ product.name }}
                            </h3>
                            <span class="text-[11px] text-gray-500">Silver</span>
                        </div>

                        <span class="text-[13px] font-semibold dark:text-gray-200">
                            R$ {{ product.sale_price }}
                        </span>
                    </div>
                </div>

                <button
                    @click.stop="modalEditRemoveProduct = !modalEditRemoveProduct"
                    class="border-[1.5px] border-gray-200 dark:border-gray-500 flex items-center bg-[#f5f5fa] rounded-md size-6 pl-[1px] dark:bg-[#313442] ml-auto"
                >
                    <i class="fas fa-ellipsis-v p-2 rotate-90 text-xs dark:text-gray-400 text-gray-500 mr-1"></i>
                </button>

                <Transition name="fade">
                    <div
                        v-if="modalEditRemoveProduct"
                        v-click-outside="() => modalEditRemoveProduct = false"
                        class="absolute w-24 flex h-12 right-0 top-7 border-[1.5px] rounded-md text-end pb-[1px] pt-[3px] px-2 bg-[#f5f5fa] dark:bg-[#313442] dark:border-gray-500 flex-col"
                    >
                        <Link
                            :href="`/admin/products/${product.slug}/edit`"
                            class="text-sm font-semibold dark:text-gray-300 hover:dark:text-gray-100 hover:text-gray-900 text-gray-500 transition-colors duration-300"
                        >
                            <i class="fas fa-pen text-[13px]"></i> Editar
                        </Link>

                        <a
                            @click.prevent="removeProduct(product.id)"
                            href="#"
                            class="text-sm font-semibold  hover:dark:text-red-500 dark:text-red-500/80 text-red-500/90 hover:text-red-600/90 transition-colors duration-300"
                        >
                            <i class="fas fa-trash text-[13px]"></i> Remover
                        </a>
                    </div>
                </Transition>
            </div>

            <div class="mt-1">
                <h3 class="zinc-900 text-md font-medium dark:text-gray-200">Summary</h3>
                <p class="text-xs text-gray-500 dark:text-[#d1d0d0] line-clamp-4">
                    {{ product.description }}
                </p>
            </div>
        </div>

        <div class="bg-[#F5F5FA] dark:bg-[#313442] p-3 rounded-md border-[1.7px] dark:border-gray-600  border-gray-200 shadow-sm">
            <div
                class="flex justify-between dark:border-gray-500 pb-2 border-b-[1.5px] border-gray-200"
            >
                <p class="text-sm dark:text-gray-300">Sales </p>

                <div class=" flex items-center gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-3" fill="#50d1b2" viewBox="0 0 384 512"><path d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2 160 448c0 17.7 14.3 32 32 32s32-14.3 32-32l0-306.7L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z"/></svg>

                    <span class="text-xs text-gray-500 dark:text-gray-400">
                        {{ product.sales }}
                    </span>
                </div>
            </div>

            <div class="flex justify-between mt-2 ">
                <p class="text-sm dark:text-gray-300">Amount </p>
                <div class="flex items-center gap-1">
                    <div
                        class="w-11 rounded-md h-1 bg-[#c6cbd9] after:content-[''] after:block after:w-4/5 after:h-1 after:rounded-md after:bg-[#50d1b2]"
                    ></div>

                    <span class="text-xs text-gray-500 dark:text-gray-400">
                        {{ product.stock }}
                    </span>
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
