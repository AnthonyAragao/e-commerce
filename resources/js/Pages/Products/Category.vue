<script setup>
    import UserLayout from "../../Components/Layouts/UserLayout.vue";
    import CardProduct from "../../Components/Ui/Cards/CardProduct.vue";
    import Pagination from "../../Components/Navigation/Pagination.vue";

    const { products, categories } = defineProps([ "products", "categories" ])
</script>

<template>
    <UserLayout>
        <div class="pb-10 max-w-[1400px] mx-auto grid grid-cols-5 gap-4">
            <aside class="col-span-1 flex flex-col gap-4">
                <div class="bg-white shadow-sm rounded-[4px] p-4 h-fit">
                    <h2 class="text-lg font-semibold text-gray-700">Categories list</h2>
                    <ul class="mt-2">
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
                </div>

                <div class="bg-white shadow-sm rounded-[4px] p-4 h-fit">
                    <h2 class="text-lg font-semibold text-gray-700">Price</h2>
                    <p class="text-sm mt-2 text-gray-500">Price range</p>

                    <div class="mt-2">
                        <!-- add here with library noUiSlider -->
                    </div>
                </div>
            </aside>

            <div class="col-span-4 col-start-2 grid grid-cols-[repeat(auto-fit,_minmax(240px,_1fr))] gap-4">
                <CardProduct
                    v-for="product in products.data"
                    :key="product.id"
                    :product="product"
                />

                <div class="col-span-4 flex justify-center mt-8">
                    <Pagination
                        :pagination="products"
                        color="#F23005"
                    />
                </div>
            </div>
        </div>
    </UserLayout>
</template>
