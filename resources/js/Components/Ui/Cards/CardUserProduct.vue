<script setup>
    import { ref } from 'vue';

    const { product }      = defineProps(["product"]);
    const hoveredProductId = ref(null);

    const handleMouseEnter = (id) => hoveredProductId.value = id;
    const handleMouseLeave = ()   => hoveredProductId.value = null;
</script>

<template>
    <div
        class="bg-white rounded-[4px] p-4 h-[478px] overflow-hidden relative shadow-sm hover:shadow-[0_2px_4px_0_rgba(0,0,0,0.05),0_1px_2px_0_rgba(0,0,0,0.05)] cursor-pointer"
        @mouseenter="handleMouseEnter(product.id)"
        @mouseleave="handleMouseLeave"
    >
        <div class="flex items-center">
            <Transition name="stars-fade">
                <div
                    v-if="hoveredProductId !== product.id"
                    class="flex items-center text-gray-400 text-xs ml-auto hover-scale"
                >
                    <i
                        v-for="star in 5"
                        :key="star"
                        :class="{
                            'fas fa-star': product.rating >= star,
                            'far fa-star': product.rating < star
                        }"
                        class="text-primary"
                    ></i>
                    <span class="ml-1 mt-[2px]">({{ product.review_count }})</span>
                </div>
            </Transition>

            <Transition name="icon-fade">
                <div
                    v-if="hoveredProductId === product.id"
                    class="flex items-center text-lg text-gray-400 ml-auto gap-2"
                >
                    <i class="fas fa-shopping-cart hover:text-primary cursor-pointer hover-scale"></i>
                    <button>
                        <i class="fa-solid fa-heart hover:text-primary cursor-pointer hover-scale"></i>
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

                <p>One time payment</p>
                <p>
                    or up to
                    <span class="font-bold">10x of R$ {{ (product.sale_price / 10).toFixed(2).replace('.', ',') }}</span>
                </p>
            </div>

            <div class="absolute bottom-3 left-1/2 -translate-x-1/2 w-[90%]">
                <button
                    class="py-3 bg-primary w-full text-white rounded-[4px] flex items-center justify-center gap-1"
                >
                    <i
                        v-if="hoveredProductId === product.id"
                        class="fas fa-shopping-cart text-white"
                    ></i>
                    <span class="font-bold text-xs ">BUY</span>
                </button>
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
</style>
