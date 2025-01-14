<script setup>
    const { address } = defineProps(["address"]);
</script>

<template>
    <div class="w-1/3 flex gap-2">
        <div class="w-4 h-4 p-6 rounded-full bg-gray-300 flex justify-center items-center dark:bg-gray-700">
            <i class="fas fa-paper-plane text-xl"></i>
        </div>

        <div class="flex flex-col text-gray-400 text-sm">
            <p class="font-bold text-black dark:text-white mb-1 text-base">Deliver to</p>
            <p><span class="font-semibold dark:text-gray-300">Postal Code:</span> {{ address.postal_code }}</p>
            <p><span class="font-semibold dark:text-gray-300">Address:</span>
                {{ address.address_line }}, {{ address.city }}, {{ address.state }}, {{ address.country }}
            </p>

            <button
                class="text-blue-500 text-xs mt-2 font-semibold bg-gray-200 w-fit px-4 py-1 rounded-md dark:bg-gray-700"
            >
                View Profile
            </button>
        </div>
    </div>
</template>
