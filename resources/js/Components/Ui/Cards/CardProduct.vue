<script setup>
    import { ref } from 'vue';

    const { product }      = defineProps(["product"]);
    const hoveredProductId = ref(null);

    const handleMouseEnter = (id) => hoveredProductId.value = id;
    const handleMouseLeave = ()   => hoveredProductId.value = null;
</script>

<template>
    <div
        class="bg-white border-[1.5px] border-gray-200 dark:border-gray-700 dark:bg-[#1F2128] rounded-[4px] p-4 h-[478px] overflow-hidden group relative shadow-sm hover:shadow-[0_2px_4px_0_rgba(0,0,0,0.05),0_1px_2px_0_rgba(0,0,0,0.05)] "
        @mouseenter="handleMouseEnter(product.id)"
        @mouseleave="handleMouseLeave"
    >
        <div class="flex items-center">
            <Transition name="stars-fade">
                <div
                    class="flex items-center transition-all w-full animated hover-scale text-gray-400 text-xs ml-auto"
                >
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
            </Transition>

            <Transition name="icon-fade">
                <div
                    v-if="hoveredProductId === product.id"
                    class="flex items-center text-lg text-gray-400 ml-auto gap-2"
                >
                    <!-- <span class="text-sm hover:text-primary hover-scale">Reviews</span> -->
                    <!-- <i class="fas fa-shopping-cart hover:text-primary cursor-pointer hover-scale"></i> -->
                    <button>
                        <i class="fa-solid fa-heart hover:text-primary dark:hover:text-secondary cursor-pointer hover-scale"></i>
                    </button>
                </div>
            </Transition>
        </div>

        <div class="mt-6 flex justify-center">
            <img
                :src="`/storage/${product.images[0].image_path}`"
                :alt="product.name"
                class="w-auto max-w-full h-[10.125rem] object-cover object-center"
            />
        </div>

        <div class="mt-4">
            <h2 class="text-sm font-semibold text-gray-800 line-clamp-3 dark:text-gray-300">
                {{ product.description }}
            </h2>
            <div class="mt-6 flex flex-col text-xs text-gray-600 dark:text-gray-400">
                <div class="flex items-center justify-between">
                    <p class="line-through text-red-600/70 dark:text-purple-600">R$ {{ product.regular_price }}</p>
                    <p class="font-bold text-[10px]">{{ product.stock }} units left</p>
                </div>

                <p class="text-xl font-bold text-primary dark:text-secondary">
                    R$ {{ product.sale_price }}
                </p>

                <p>One time payment</p>
                <p>
                    or up to
                    <span class="font-bold">10x of R$ {{ (product.sale_price / 10).toFixed(2).replace('.', ',') }}</span>
                </p>
            </div>

            <div class="absolute bottom-3 left-1/2 -translate-x-1/2 w-[90%] flex gap-2">
                <button
                    class="py-3 bg-primary dark:bg-secondary w-full text-white rounded-[4px] flex items-center justify-center gap-1 hover:bg-[#E22D05] "
                >
                    <i
                        v-if="hoveredProductId === product.id"
                        class="fas fa-shopping-cart text-white"
                    ></i>
                    <span class="font-bold text-xs">CART</span>
                </button>

                <Link
                    :href="`/products/${product.slug}`"
                    class="py-3 bg-zinc-900 w-full text-white rounded-[4px] flex items-center justify-center gap-1 hover:bg-zinc-950 "
                >
                    <i
                        v-if="hoveredProductId === product.id"
                        class="fas fa-dollar-sign text-white"
                    ></i>
                    <span class="font-bold text-xs ">BUY NOW</span>
                </Link>
            </div>
        </div>
    </div>
</template>

<style scoped>
    .stars-fade-enter-active {
        transition: opacity 0.3s ease;
    }

    .stars-fade-leave-active {
        display: none;
    }

    .icon-fade-enter-from {
        opacity: 0;
        transform: scale(0.9);
    }

    .icon-fade-enter-to {
        opacity: 1;
        transform: scale(1);
    }

    .icon-fade-leave-active {
        transition: opacity 0s;
    }

    .hover-scale {
        animation: scale-bounce 0.5s ease-in;
    }

    @keyframes scale-bounce {
        0% {
            transform: scaleY(0);
        }
        25% {
            transform: scaleY(1.1);
        }
        50% {
            transform: scaleY(0.9);
        }
        100% {
            transform: scaleY(1);
        }
    }
    @keyframes fadeOutIn {
        0% {
            transform: scaleY(0);
        }
        1% {

            transform: scaleY(0);
        }
        34%{

            transform: scaleY(1.1);
        }
        67%{

            transform: scaleY(0.9);
        }
        100%{

            transform: scaleY(1);
        }
    }

    .group:hover .animated {
        animation:  fadeOutIn 0.5s ease-in-out;
    }
</style>
