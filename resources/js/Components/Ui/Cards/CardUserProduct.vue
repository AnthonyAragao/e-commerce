<script setup>
import { ref } from "vue";

const { products } = defineProps(["products"]);


const rating = ref(2);

const setRating = (value) => {
    rating.value = value;
};


</script>

<template>
    <div
        class="grid grid-cols-[repeat(auto-fit,_minmax(240px,_1fr))] gap-4 col-span-4 col-start-2"
    >
        <div
            v-for="product in products.data"
            :key="product.id"
            class="bg-white shadow-md rounded-lg p-4 h-[480px] overflow-hidden relative"
        >
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <i
                        v-for="star in 5"
                        :key="star"
                        class="fas fa-star text-gray-400"
                        :class="{ 'text-yellow-500': rating >= star }"
                        @click="setRating(star)"
                    ></i>
                </div>
                <div class="flex items-center text-xl">
                    <!-- carrinho e um coração -->
                    <i class="fas fa-shopping-cart text-gray-400 hover:text-yellow-500 cursor-pointer"></i>
                    <button

                    >
                        <i
                            class="fa-solid fa-heart text-gray-400 ml-2 hover:text-yellow-500 "

                        ></i>
                    </button>
                </div>
            </div>

            <img
                :src="product.image"
                alt="product.name"
                class="w-full mt-4 h-48 object-cover object-center"
            />

            <div class="mt-4">
                <h2 class="text-xl font-semibold text-gray-800">
                    {{ product.name }}
                </h2>

                <span class="text-base font-semibold text-gray-600">
                    {{ product.sale_price }}
                </span>
                <div class="absolute bottom-4 left-1/2 -translate-x-1/2 w-[90%]">
                    <button
                        class="px-4 py-2 bg-orange-500 w-full text-white rounded-md hover:bg-blue-600"
                    >
                    <i class="fas fa-shopping-cart text-white "></i>
                        Buy
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>
