<script setup>
    import UserLayout from '../../Components/Layouts/UserLayout.vue';
    import CardProduct from '../../Components/Ui/Cards/CardProduct.vue';

    const { product, relatedProducts } = defineProps([ 'product', 'relatedProducts']);
</script>

<template>
    <UserLayout>
        <!-- Product details -->
        <div class="max-w-[1400px] mx-auto grid grid-cols-2 gap-8 py-8 items-center">
            <div class="flex items-center gap-4 w-full">
                <div class="w-20">
                    <div class="flex justify-center">
                        <i class="fas fa-chevron-up text-gray-400 cursor-pointer"></i>
                    </div>

                    <div
                        v-for="img in 5"
                        :key="img"
                        class="size-16 my-6 rounded-[4px] cursor-pointer border border-gray-200 overflow-hidden"
                    >
                        <img
                            :src="`/storage/${product.images[0].image_path}`"
                            :alt="product.name"
                            class="max-w-full h-auto object-cover object-center"
                        />

                    </div>

                    <div class="flex justify-center">
                        <i class="fas fa-chevron-down text-gray-400 cursor-pointer"></i>
                    </div>
                </div>

                <div class="w-full">
                    <img
                        :src="`/storage/${product.images[0].image_path}`"
                        :alt="product.name"
                        class="max-w-full h-auto object-cover object-center"
                    />
                </div>
            </div>

            <div>
                <h1 class="text-4xl font-bold text-gray-700">{{ product.name }}</h1>
                <p class="text-xs text-gray-400 font-semibold">SKU: {{ product.sku }}</p>
                <p class="text-sm text-gray-500 mt-4">{{ product.description }}</p>

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
                        class="text-primary"
                    ></i>
                    <span class="ml-1 mt-[2px]">({{ product.review_count }})</span>
                </div>

                <div class="flex flex-col mt-2">
                    <p class="text-xs text-gray-400">
                        From: <span class="line-through text-red-600/70">R$ {{ product.regular_price }}</span> per:
                    </p>

                    <span class="text-5xl font-bold text-primary">R$ {{ product.sale_price }}</span>
                    <span class="text-gray-400">10x of R$ {{ (product.sale_price / 10).toFixed(2).replace('.', ',') }}</span>
                </div>

                <div class="flex items-center gap-4 mt-4 w-full">
                    <button
                        class="bg-primary text-white text-sm font-bold py-2 px-4 rounded-[4px] hover:bg-primary-dark w-1/2 uppercase"
                    >
                        Buy now
                    </button>

                    <button
                        class="bg-white text-primary text-sm font-bold py-2 px-4 rounded-[4px] border border-primary hover:bg-primary hover:text-white w-1/2 uppercase"
                    >
                        <i class="fas fa-shopping-cart"></i> Add to cart
                    </button>
                </div>
            </div>
        </div>

        <!-- products from the same category -->
        <div class="max-w-[1400px] mx-auto my-8">
            <div class="flex items-center gap-2">
                <i class="fas fa-box-open text-primary"></i>
                <h2 class="text-2xl font-bold text-gray-700 uppercase">products from the same category</h2>
            </div>

            <div class="grid grid-cols-4 gap-4 mt-4">
                <div class="col-span-4 grid grid-cols-[repeat(auto-fill,minmax(240px,1fr))] gap-4">
                    <CardProduct
                        v-for="product in relatedProducts"
                        :key="product.id"
                        :product="product"
                    />
                </div>
            </div>
        </div>

        <!-- Reviews section -->
        <div class="max-w-[1400px] mx-auto my-8">
            <div class="flex items-center gap-2">
                <i class="fas fa-star text-primary"></i>
                <h2 class="text-2xl font-bold text-gray-700 uppercase">user reviews</h2>
            </div>

            <div class="flex items-end gap-2 text-primary">
                <h2 class="text-6xl font-bold">
                    {{ product.rating }}
                </h2>
                <p class="text-xl mb-1">/5</p>
            </div>

            <p class="text-sm text-gray-700">({{ product.review_count }}) reviews</p>

            
            <div class="grid grid-cols-2 gap-x-6">
                <div
                    v-for="review in 4"
                    :key="review"
                    class="rounded-3xl w-full bg-white p-4 mt-4 shadow-card-reviews border border-[rgb(242, 243, 244)]"
                >
                    <p class="text-sm text-black font-semibold">John Doe</p>

                    <div class="flex flex-col gap-1 mt-2">
                        <div class="flex items-center gap-1">
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="far fa-star text-primary"></i>
                        </div>

                        <p class="text-xs text-gray-400">Reviewed on 2021-09-01</p>
                    </div>

                    <p class="text-sm text-gray-500 mt-2">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec
                        purus feugiat, molestie ipsum et, consectetur odio. Nullam sit amet
                        semper nulla. Nulla facilisi. Nullam nec nisi ac nunc ultricies
                        tincidunt. Nullam sit amet semper nulla. Nulla facilisi. Nullam nec
                        nisi ac nunc ultricies tincidunt.
                    </p>
                </div>
            </div>
        </div>
    </UserLayout>
</template>
