<script setup>
    import CardProduct from '../Ui/Cards/CardProduct.vue';
    const { products } = defineProps(['products']);
</script>

<template>
    <div class="max-w-[1400px] mx-auto my-10">
        <div class="flex items-center gap-2">
            <i class="fas fa-box-open text-primary"></i>
            <h2 class="text-2xl font-bold text-gray-700 uppercase">products from the same category</h2>
        </div>

        <div class="grid grid-cols-4 gap-4 mt-4">
            <div class="col-span-4 grid grid-cols-[repeat(auto-fill,minmax(240px,1fr))] gap-4">
                <CardProduct
                    v-for="product in products"
                    :key="product.id"
                    :product="product"
                />
            </div>
        </div>
    </div>
</template>
