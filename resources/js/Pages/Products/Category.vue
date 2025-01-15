<script setup>
    import UserLayout from "../../Components/Layouts/UserLayout.vue";
    const {products} = defineProps(["products"])

    const breadcrumbs = [
        { 'href': '/', 'name': 'Home' },
        { 'href': '', 'name': 'Customers' }
    ];

</script>

<template>
    <UserLayout>

        <div class=" py-10 max-w-[1400px] mx-auto grid grid-cols-5 gap-4">
        <aside class="col-span-1 bg-white shadow-md rounded-lg p-4">
            <h2 class="text-xl font-semibold text-gray-800">Categories</h2>
            <ul class="mt-4">
            <li class="py-2 text-gray-600 hover:text-gray-800 cursor-pointer">All</li>
            <li class="py-2 text-gray-600 hover:text-gray-800 cursor-pointer">Electronics</li>
            <li class="py-2 text-gray-600 hover:text-gray-800 cursor-pointer">Clothes</li>
            <li class="py-2 text-gray-600 hover:text-gray-800 cursor-pointer">Shoes</li>
            <li class="py-2 text-gray-600 hover:text-gray-800 cursor-pointer">Books</li>
            </ul>
        </aside>

        <div class="flex col-span-4 col-start-2 flex-wrap gap-4">
            <div v-for="product in products.data" :key="product.id" class="bg-white shadow-md rounded-lg p-4 w-[240px] h-[480px] overflow-hidden transition-transform transform hover:scale-105 ">
            <img :src="product.image" alt="product.name" class="w-full h-48 object-cover object-center">
            <div class="mt-4">
                <h2 class="text-xl font-semibold text-gray-800">{{ product.name }}</h2>
                <p class="mt-2 text-gray-600">{{ product.description }}</p>
                <div class="mt-4 flex justify-between items-center">
                <span class="text-xl font-semibold text-gray-800">{{ product.price }}</span>
                <button class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Add to Cart</button>
                </div>
            </div>
            </div>
        </div>
    </div>

    </UserLayout>
</template>




