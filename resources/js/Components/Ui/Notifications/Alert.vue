<script setup>
    import { ref, watch } from 'vue';

    const { message, duration, customClass } = defineProps(['message', 'duration', 'customClass']);

    const isVisible = ref(false);

    const showAlert = () => {
        if (message) {
            setTimeout(() => {
                isVisible.value = true;

                setTimeout(() => {
                    isVisible.value = false;
                }, duration);
            }, 100);
        }
    };

    watch(() => message, showAlert, { immediate: true });
</script>

<template>
    <Transition name="fade">
        <div
            v-if="isVisible"
            :class="`fixed bottom-10 right-8 w-72 text-xs z-50 ${customClass}`"
        >
            <div
                class="succsess-alert cursor-default flex items-center justify-between w-full h-14 rounded-lg bg-[#232531] px-[10px] dark:bg-[#2b9875] dark:text-white"
            >
                <div class="flex gap-2">
                    <div class="text-[#2b9875] bg-gray-700 dark:bg-green-500/30 dark:text-white backdrop-blur-xl p-1 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-white">done successfully :)</p>
                        <p class="text-gray-500 dark:text-gray-300">{{ message }}</p>
                    </div>
                </div>

                <button
                    class="text-white hover:bg-white/5 p-1 rounded-md transition-colors ease-linear"
                    @click="isVisible = false"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
    </Transition>
</template>

<style scoped>
    .fade-enter-from {
        opacity: 0;
        transform: translateY(50px);
    }

    .fade-enter-to {
        opacity: 1;
        transform: translateY(0);
    }

    .fade-enter-active,
    .fade-leave-active {
        transition: all 0.3s ease-in-out;
    }

    .fade-leave-from {
        opacity: 1;
        transform: translateX(0);
    }

    .fade-leave-to {
        opacity: 0;
        transform: translateX(50px);
    }
</style>
