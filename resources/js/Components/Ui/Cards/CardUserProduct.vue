<script setup>
    const { products } = defineProps(["products"]);
</script>

<template>
    <div
        class="grid grid-cols-[repeat(auto-fit,_minmax(240px,_1fr))] gap-4 col-span-4 col-start-2"
    >
        <div
            v-for="product in products.data"
            :key="product.id"
            class="bg-white rounded-[4px] p-4 h-[478px] overflow-hidden relative shadow-md hover:shadow-xl cursor-pointer"
        >
            <div class="flex items-center justify-between">
                <div class="flex items-center text-gray-400 text-xs ">
                    <i
                        v-for="star in 5"
                        :key="star"
                        class="fas fa-star"
                        :class="{ 'text-primary': product.rating >= star }"
                    ></i>
                    <span class="ml-1 mt-[2px]">({{ product.review_count }})</span>
                </div>

                <div class="flex items-center text-xl text-gray-400">
                    <i class="fas fa-shopping-cart hover:text-primary cursor-pointer"></i>
                    <button>
                        <i class="fa-solid fa-heart ml-2 hover:text-primary"></i>
                    </button>
                </div>
            </div>

            <div class="mt-6 flex justify-center">
                <img
                    :src="`/storage/${product.images[0].image_path}`"
                    :alt="product.name"
                    class="w-auto max-w-full h-[10.125rem] object-cover object-center"
                />
            </div>

            <div class="mt-4">
                <h2 class="text-sm font-semibold text-gray-800 line-clamp-3">
                    {{ product.description }}
                </h2>
                <div class="mt-6 flex flex-col text-xs text-gray-600">
                    <div class="flex items-center justify-between">
                        <p class="line-through">R$ {{ product.regular_price }}</p>
                        <p class="font-bold text-[10px]">{{ product.stock }} units left</p>
                    </div>

                    <p class="text-xl font-bold text-primary">
                        R$ {{ product.sale_price }}
                    </p>

                    <p>On view in Pix</p>
                    <p>
                        or up to
                        <span class="font-bold">10x of R$ {{ (product.sale_price / 10).toFixed(2).replace('.', ',') }}</span>
                    </p>
                </div>

                <div class="absolute bottom-3 left-1/2 -translate-x-1/2 w-[90%]">
                    <button
                        class="py-3 bg-primary w-full text-white rounded-[4px] flex items-center justify-center gap-1"
                    >
                        <i class="fas fa-shopping-cart text-white"></i>
                        <span class="font-bold text-xs ">BUY</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>
