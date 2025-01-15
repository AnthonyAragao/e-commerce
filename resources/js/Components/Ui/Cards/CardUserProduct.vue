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
            class="bg-white shadow-md rounded-lg p-4 h-[480px] overflow-hidden"
        >
            <div class="flex items-center">
                <i
                    v-for="star in 5"
                    :key="star"
                    class="fas fa-star text-gray-400"
                    :class="{ 'text-yellow-500': rating >= star }"
                    @click="setRating(star)"
                ></i>
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

                <div class="mt-4 flex justify-between items-center">
                    <span class="text-xl font-semibold text-gray-800">
                        {{product.price}}
                    </span>
                    <button class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">
                        Add to Cart
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>
