<script setup>
    import UserLayout from "../../Components/Layouts/UserLayout.vue";
    import CardUserProduct from "../../Components/Ui/Cards/CardUserProduct.vue";

    const { products, categories } = defineProps([ "products", "categories" ])
</script>

<template>
    <UserLayout>
        <div class="pb-10 max-w-[1400px] mx-auto grid grid-cols-5 gap-4">
            <aside class="col-span-1 bg-white shadow-sm rounded-md p-4">
                <h2 class="text-lg font-semibold text-gray-900">Related categories</h2>
                <ul class="mt-6">
                    <li
                        v-for="category in categories"
                        :key="category.id"
                        class="mt-1 text-gray-500 text-sm hover:text-gray-800 cursor-pointer"
                    >
                        <Link :href="`/categories/${category.slug}`">
                            {{ category.name }}
                        </Link>
                    </li>
                </ul>
            </aside>

            <CardUserProduct :products="products" />
        </div>
    </UserLayout>
</template>
