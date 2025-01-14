<script setup>
    const { customer } = defineProps(["customer"]);
</script>

<template>
    <div class="w-1/3 flex gap-2">
        <div class="w-4 h-4 p-6 rounded-full bg-gray-300 flex justify-center items-center dark:bg-gray-700">
            <i class="fas fa-user text-xl"></i>
        </div>

        <div class="flex flex-col text-gray-400 text-sm">
            <p class="font-bold text-black dark:text-white mb-1 text-base">Customer</p>
            <p><span class="font-semibold dark:text-gray-300">Full name:</span> {{ customer.name }}</p>
            <p><span class="font-semibold dark:text-gray-300">Email:</span> {{ customer.email }}</p>
            <p><span class="font-semibold dark:text-gray-300">Phone:</span> {{ customer.phone }}</p>

            <button
                class="text-blue-500 text-xs mt-2 font-semibold bg-gray-200 w-fit px-4 py-1 rounded-md dark:bg-gray-700"
            >
                View Profile
            </button>
        </div>
    </div>
</template>
