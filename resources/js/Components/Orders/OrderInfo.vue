<script setup>
    const { payment } = defineProps(["payment"]);
</script>

<template>
    <div class="w-1/3 flex gap-2">
        <div class="w-4 h-4 p-6 rounded-full bg-gray-300 flex justify-center items-center dark:bg-gray-700">
            <i class="fas fa-shopping-bag text-xl"></i>
        </div>

        <div class="flex flex-col text-gray-400 text-sm">
            <p class="font-bold text-black dark:text-white mb-1 text-base">Order info</p>
            <p><span class="font-semibold dark:text-gray-300">Shipping:</span> Next express</p>
            <p><span class="font-semibold dark:text-gray-300">Pay method:</span> {{ payment.payment_method }}</p>
            <p><span class="font-semibold dark:text-gray-300">Status:</span> {{ payment.payment_status }}</p>

            <button
                class="text-blue-500 text-xs mt-2 font-semibold bg-gray-200 w-fit px-4 py-1 rounded-md dark:bg-gray-700"
            >
                Donwload Info
            </button>
        </div>
    </div>
</template>
