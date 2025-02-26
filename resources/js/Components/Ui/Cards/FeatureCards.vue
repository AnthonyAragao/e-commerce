<script setup>
    import FeatureCard from "@/Components/Ui/Cards/FeatureCard.vue";
</script>

<template>
     <div class="max-w-[1400px] mx-auto grid grid-cols-6 gap-4 absolute -bottom-32 left-0 right-0 z-10">
        <FeatureCard
            title="Safe and Secure"
            image="/img/escudo.png"
            description="You can be sure that your data is safe with us"
            buttonText="How it works"
            buttonLink="#"
        />

        <FeatureCard
            title="Secure payment"
            image="/img/pagamento-seguro.png"
            description="We have the best payment methods for you to make your purchase safely"
            buttonText="Show more"
            buttonLink="#"
        />

        <FeatureCard
            title="Best sellers"
            image="/img/carrinho-de-compras.png"
            description="Check out our best sellers. Take advantage of the discounts."
            buttonText="Go to the store"
            buttonLink="#"
        />

        <FeatureCard
            title="Our categories"
            image="/img/opcoes.png"
            description="We have a wide variety of products for you to choose from"
            buttonText="View categories"
            buttonLink="#"
        />

        <FeatureCard
            title="Low Prices"
            image="/img/preco-baixo.png"
            description="We have the best prices for you to save"
            buttonText="View More"
            buttonLink="#"
        />

        <FeatureCard
            title="Free shipping"
            image="/img/frete.png"
            description="We offer free shipping throughout Brazil"
            buttonText="Learn more"
            buttonLink="#"
        />
    </div>
</template>
