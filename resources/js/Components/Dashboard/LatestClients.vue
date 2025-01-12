<script setup>
    import { onMounted, ref } from 'vue';
    import CardLayout from '../Ui/Cards/CardLayout.vue';

    const isLoading  = ref(false);

    onMounted(() => {
        isLoading.value = true;
        setTimeout(() => {
            isLoading.value = false;
        }, 1000)
    })
</script>

<template>
    <CardLayout class="w-[60%] py-4">
        <div
            class="flex justify-between items-center mb-6 relative before:content-[''] before:w-full before:h-[1px] before:-bottom-3 before:absolute before:bg-gray-200 dark:before:bg-gray-700"
        >
            <span class="text-gray-800 dark:text-gray-200 font-bold">Latest Clients</span>
            <i class="text-gray-500 fas fa-ellipsis-v"></i>
        </div>

        <div
            v-if="isLoading"
            class="animate-pulse"
        >
            <div
                v-for="client in 8"
                :key="client"
                class="flex items-center mt-4 w-full"
            >

                <div class="w-9 h-8 bg-gray-200 dark:bg-gray-700 rounded-full"></div>

                <div class="w-full ml-2 flex justify-between flex-col gap-1">
                    <div class="flex gap-2 justify-between font-bold">
                        <div class="w-3/4 h-4 bg-gray-200 dark:bg-gray-700 rounded-md"></div>
                        <div class="w-1/6 h-3 bg-gray-200 dark:bg-gray-700 rounded-md"></div>
                    </div>


                    <div class="flex justify-between gap-2">
                        <div class="w-1/4 h-2 bg-gray-200 dark:bg-gray-700 rounded-md"></div>
                        <div class="w-1/5 h-3 bg-gray-200 dark:bg-gray-700 rounded-md"></div>
                    </div>
                </div>
            </div>
        </div>

        <div
            v-else
            v-for="client in 8"
            :key="client"
            class="flex gap-2 items-center mt-2"
        >
            <!-- <img src="/img/exemple.png" class="size-10 rounded-md" alt=""> -->
            <img
                :src="`https://randomuser.me/api/portraits/men/${Math.floor(Math.random() * 100)}.jpg`"
                alt="User"
                class="w-8 h-8 rounded-full cursor-pointer"
            >

            <div class="w-full">
                <div class="flex gap-2 justify-between items-center font-bold">
                    <span class="text-[13px] ">
                        Esther Howard
                    </span>
                    <span class="text-[11px]">
                        $1,200
                    </span>
                </div>

                <div class="flex text-gray-500 dark:text-gray-400 gap-2 justify-between items-center text-[12px]">
                    <span>Paypal</span>
                    <span>854 Buy's</span>
                </div>
            </div>
        </div>
    </CardLayout>
</template>
