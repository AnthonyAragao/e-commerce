<script setup>
    import { ref, inject, watch } from "vue";

    const { id }         = defineProps(["id"]);
    const activeModal    = inject("activeModal", ref(null));
    const setActiveModal = inject("setActiveModal");
    const isModalOpen    = ref(false);

    const toggleModal = () => {
        if (activeModal.value !== id) {
            setActiveModal(id);
            isModalOpen.value = true;
        } else {
            closeModal();
        }
    };

    const closeModal = () => {
        isModalOpen.value = false;
        if (activeModal.value === id) setActiveModal(null);
    };

    watch(activeModal, (newValue) => {
        if(newValue != id) isModalOpen.value = false;
    })
</script>

<template>
    <div
        class="relative"
        :data-modal-id="id"
        v-click-outside="closeModal"
    >
        <button
            @click.stop="toggleModal"
            class="w-full h-full text-start cursor-pointer"
        >
            <i
                class="fas fa-ellipsis-h text-gray-500 hover:text-gray-700 dark:hover:text-gray-400"
            ></i>
        </button>

        <Transition name="fade">
            <div
                v-if="isModalOpen"
                class="absolute translate-y-[2px] -left-[90px] w-fit py-2 bg-white dark:bg-[#1F2128] border border-gray-200 dark:border-gray-700 rounded-md shadow-md z-10"
            >
                <slot />
            </div>
        </Transition>
    </div>
</template>

<style scoped>
    .fade-enter-from {
        opacity: 0;
        transform: translateY(-20px);
    }
    .fade-enter-to {
        opacity: 1;
        transform: translateY(2px);
    }
    .fade-enter-active,
    .fade-leave-active {
        transition: all 0.3s;
    }
    .fade-leave-from {
        opacity: 1;
        transform: translateY(2px);
    }
    .fade-leave-to {
        opacity: 0;
        transform: translateY(-20px);
    }
</style>
