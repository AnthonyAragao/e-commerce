<script setup>
    import { onMounted, ref } from 'vue';

    const { message, duration, customClass } = defineProps(['message', 'duration', 'customClass']);

    const isVisible = ref(false);

    onMounted(() => {
        isVisible.value = true;

        setTimeout(() => {
            isVisible.value = false;
        }, duration);
    });
</script>

<template>
    <Transition name="fade" @after-leave="$emit('hidden')">
        <div
            v-if="isVisible"
            :class="`fixed bottom-10 right-8 bg-green-500 text-white px-6 py-4 rounded-md shadow-lg flex items-center gap-4 z-10 ${customClass}`"
        >
            <span class="text-sm font-semibold">
                {{ message }}
            </span>

            <button type="button" @click="isVisible = false">
                <i class="fas fa-times"></i>
            </button>
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
        transition: all 0.3s;
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
