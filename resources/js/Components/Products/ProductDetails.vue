<script setup>
    import { ref } from 'vue';

    const { product }   = defineProps(['product']);
    const selectedImage = ref(product.images[0].image_path);
</script>

<template>
    <div class="max-w-[1400px] mx-auto grid grid-cols-2 gap-8 py-8 items-center">
        <div class="flex items-center gap-4 w-full">
            <div class="w-20">
                <div class="flex justify-center">
                    <i class="fas fa-chevron-up text-gray-400 cursor-pointer"></i>
                </div>

                <div
                    v-for="imagem in product.images"
                    :key="imagem.id"
                    @click="selectedImage = imagem.image_path"
                    class="size-14 my-6 p-1 bg-white rounded-md cursor-pointer border border-gray-300 overflow-hidden mx-auto dark:bg-transparent dark:border-gray-700"
                >
                    <img
                        :src="`/storage/${imagem.image_path}`"
                        :alt="product.name"
                        class="max-w-full h-auto object-cover object-center"
                    />
                </div>

                <div class="flex justify-center">
                    <i class="fas fa-chevron-down text-gray-400 cursor-pointer"></i>
                </div>
            </div>

            <div class="w-full min-h-[550px] bg-white flex justify-center items-center rounded-md shadow-card-reviews border border-gray-100 dark:border-gray-700 dark:bg-transparent">
                <img
                    :src="`/storage/${selectedImage}`"
                    :alt="product.name"
                    class="max-w-full object-cover object-center h-auto max-h-[520px]"
                />
            </div>
        </div>

        <div>
            <h1 class="text-4xl font-bold text-gray-700 dark:text-white">{{ product.name }}</h1>
            <p class="text-xs text-gray-400 font-semibold">SKU: {{ product.sku }}</p>
            <p class="text-sm text-gray-500 mt-4 dark:text-gray-300">{{ product.description }}</p>

            <div class="flex items-center text-green-600 text-xs mt-2 gap-1 font-bold">
                <i class="fas fa-truck"></i>
                <p class="text-xs font-semibold uppercase">Free shipping</p>
            </div>

            <div class="flex items-center text-gray-400 text-xs mt-8">
                <i
                    v-for="star in 5"
                    :key="star"
                    :class="{
                        'fas fa-star': product.rating >= star,
                        'far fa-star': product.rating < star
                    }"
                    class="text-primary dark:text-secondary"
                ></i>
                <span class="ml-1 mt-[2px]">({{ product.review_count }})</span>
            </div>

            <div class="flex flex-col mt-2">
                <p class="text-xs text-gray-500 dark:text-gray-300">
                    From: <span class="line-through text-red-600/70 dark:text-purple-400/70">R$ {{ product.regular_price }}</span> per:
                </p>

                <span class="text-5xl font-bold text-primary dark:text-secondary">R$ {{ product.sale_price }}</span>
                <span class="text-gray-500">10x of R$ {{ (product.sale_price / 10).toFixed(2).replace('.', ',') }}</span>
            </div>

            <div class="flex items-center gap-4 mt-4 w-full">
                <button
                    class="bg-primary text-white text-sm font-bold py-2 px-4 rounded-[4px] hover:bg-primary-dark w-1/2 uppercase dark:bg-secondary"
                >
                    Buy now
                </button>

                <button
                    class="bg-white text-primary text-sm font-bold py-2 px-4 rounded-[4px] border border-primary hover:bg-primary hover:text-white w-1/2 uppercase dark:text-secondary dark:border-secondary dark:hover:bg-secondary dark:hover:border-secondary dark:hover:text-white"
                >
                    <i class="fas fa-shopping-cart"></i> Add to cart
                </button>
            </div>
        </div>
    </div>
</template>
