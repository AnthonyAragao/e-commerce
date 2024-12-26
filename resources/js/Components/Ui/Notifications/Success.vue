<script setup>
    import { onMounted, ref } from 'vue';

    const { message, duration } = defineProps(['message', 'duration']);

    const isVisible = ref(true);

    onMounted(() => {
        setTimeout(() => {
            isVisible.value = false;
        }, duration);
    });
</script>

<template>
    <Transition name="fade">
        <div
            v-if="isVisible"
            class="fixed bottom-10 right-8 bg-green-500 text-white px-6 py-4 rounded-md shadow-lg flex items-center gap-4 z-10"
        >
            <span class="text-sm font-semibold">
                {{ message }}
            </span>

            <button @click="isVisible = false">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </Transition>
</template>

<style scoped>
    .fade-enter-from {
        opacity: 0;
        transform: translateY(20px);
    }

    .fade-enter-to {
        opacity: 1;
        transform: translateY(0);
    }

    .fade-enter-active,
    .fade-leave-active {
        transition: all 0.3s;
    }

    .fade-leave-from {
        opacity: 1;
        transform: translateX(0);
    }

    .fade-leave-to {
        opacity: 0;
        transform: translateX(20px);
    }
</style>
