<script setup>
    import CardProduct from "@/Components/Ui/Cards/CardProduct.vue";
    const { title, icon, products } = defineProps([ "title", "icon", "products" ]);
</script>

<template>
    <div class="max-w-[1400px] mx-auto  mb-10">
        <h1 class="text-gray-800 uppercase font-semibold text-2xl dark:text-gray-300 mb-2">
            <i :class="`${icon} text-primary dark:text-secondary`"></i> {{ title }}
        </h1>

        <div class="grid grid-cols-[repeat(auto-fill,minmax(240px,1fr))] gap-4">
            <CardProduct
                v-for="product in products"
                :key="product.id"
                :product="product"
            />
        </div>
    </div>
</template>
