<script setup>
    import UserLayout from '../../Components/Layouts/UserLayout.vue';
    import ProductsFromTheSameCategory from '../../Components/Products/ProductsFromTheSameCategory.vue';
    import UserReviews from '../../Components/Products/UserReviews.vue';
    import ProductDetails from '../../Components/Products/ProductDetails.vue';

    const { product, relatedProducts } = defineProps([ 'product', 'relatedProducts']);
</script>

<template>
    <UserLayout>
        <ProductDetails
            :product="product"
        />

        <ProductsFromTheSameCategory
            :products="relatedProducts"
        />

        <UserReviews
            :product="product"
        />
    </UserLayout>
</template>
