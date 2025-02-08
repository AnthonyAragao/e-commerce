<script setup>
    const { product } = defineProps(['product']);
</script>

<template>
    <div class="max-w-[1400px] mx-auto mt-24 mb-10">
        <div class="flex items-center gap-2">
            <i class="fas fa-star text-primary dark:text-secondary"></i>
            <h2 class="text-2xl font-bold text-gray-700 uppercase dark:text-gray-100">user reviews</h2>
        </div>

        <div class="flex items-center gap-12 my-4">
            <div class="flex items-end gap-2 text-primary dark:text-secondary">
                <h2 class="text-6xl font-bold">
                    {{ product.rating }}
                </h2>
                <p class="text-xl mb-1 font-semibold">/5</p>
            </div>

            <div>
                <p class="text-sm text-gray-700 dark:text-gray-300">({{ product.review_count }}) reviews</p>
                <i
                    v-for="star in 5"
                    :key="star"
                    :class="{
                        'fas fa-star' : product.rating >= star,
                        'far fa-star' : product.rating < star
                    }"
                    class="text-primary dark:text-secondary"
                ></i>
            </div>
        </div>

        <div class="grid grid-cols-2 gap-x-6">
            <div
                v-for="(review, index) in product.reviews.slice(0, 4)"
                :key="index"
                class="rounded-3xl w-full bg-white p-4 mt-6 min-h-44 shadow-card-reviews border border-[rgb(242, 243, 244)] dark:border-gray-700 dark:bg-[#1F2128]"
            >
                <p class="text-sm text-black font-semibold dark:text-white">{{ review.user.name }}</p>

                <div class="flex flex-col gap-1 mt-2">
                    <div class="flex items-center gap-1">
                        <i
                            v-for="star in 5"
                            :key="star"
                            :class="{
                                'fas fa-star' : review.rating >= star,
                                'far fa-star' : review.rating < star
                            }"
                            class="text-primary dark:text-secondary"
                        ></i>
                    </div>

                    <p class="text-xs text-gray-400 dark:text-gray-300">Reviewed on {{ new Date(review.created_at).toLocaleDateString() }}</p>
                </div>

                <p class="text-sm text-gray-500 mt-2 dark:text-white">
                    {{ review.comment }}
                </p>
            </div>
        </div>

        <div
            v-if="product.reviews.length > 4"
            class="w-full text-center mt-10"
        >
            <a href="#" class="text-primary text-sm mt-4 font-bold uppercase dark:text-secondary">See all reviews</a>
        </div>
    </div>
</template>
