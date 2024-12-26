<script setup>
    import { ref } from 'vue';
    import SpanError from '../Ui/Inputs/SpanError.vue';

    const { modelValue, error } = defineProps(['modelValue', 'error']);

    const emit = defineEmits(['update:modelValue']);

    const images = ref([]);

    const generateUniqueId = () => `${Date.now()}-${Math.random()}`;

    const handleFileUpload = (event) => {
        const files = event.target.files;

        if (images.value.length >= 4) {
            alert('You can only upload up to 4 images');
            return;
        }

        Array.from(files).forEach((file) => {
            const newImage = {
                id: generateUniqueId(),
                file: file,
                url: URL.createObjectURL(file),
                name: file.name,
            };

            images.value.push(newImage);
            emit('update:modelValue', images.value);
        })

        event.target.value = null;
    }

    const removeImage = (image) => {
        images.value = images.value.filter((img) => img !== image);
        emit('update:modelValue', images.value);
    }
</script>

<template>
    <div class="flex gap-6">
        <div class="min-w-[600px]">
            <span
                class="block text-base font-bold text-gray-800 dark:text-gray-100"
            >
                Product Gallery
            </span>

            <label
                for="file"
                class="mt-1 flex flex-col items-center border-2 border-gray-200 border-dashed px-36 py-20 rounded-xl cursor-pointer dark:border-[#313442] shadow-sm"
            >
                <svg class="h-24 fill-slate-300" viewBox="0 0 24 24" fill="" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M10 1C9.73478 1 9.48043 1.10536 9.29289 1.29289L3.29289 7.29289C3.10536 7.48043 3 7.73478 3 8V20C3 21.6569 4.34315 23 6 23H7C7.55228 23 8 22.5523 8 22C8 21.4477 7.55228 21 7 21H6C5.44772 21 5 20.5523 5 20V9H10C10.5523 9 11 8.55228 11 8V3H18C18.5523 3 19 3.44772 19 4V9C19 9.55228 19.4477 10 20 10C20.5523 10 21 9.55228 21 9V4C21 2.34315 19.6569 1 18 1H10ZM9 7H6.41421L9 4.41421V7ZM14 15.5C14 14.1193 15.1193 13 16.5 13C17.8807 13 19 14.1193 19 15.5V16V17H20C21.1046 17 22 17.8954 22 19C22 20.1046 21.1046 21 20 21H13C11.8954 21 11 20.1046 11 19C11 17.8954 11.8954 17 13 17H14V16V15.5ZM16.5 11C14.142 11 12.2076 12.8136 12.0156 15.122C10.2825 15.5606 9 17.1305 9 19C9 21.2091 10.7909 23 13 23H20C22.2091 23 24 21.2091 24 19C24 17.1305 22.7175 15.5606 20.9844 15.122C20.7924 12.8136 18.858 11 16.5 11Z" fill=""></path> </g></svg>

                <span class="mt-6 text-gray-500 dark:text-gray-300 font-bold">
                    Click to upload image
                </span>

                <span class="text-gray-400 dark:text-gray-300">
                    JPG, PNG and JPEG files only
                </span>

                <input
                    id="file"
                    type="file"
                    class="hidden"
                    multiple
                    @change="handleFileUpload"
                />
            </label>

            <SpanError :error="error"/>
        </div>

        <div class="flex flex-col w-full space-y-2 mt-4">
            <TransitionGroup name="fade" >
                <div
                    v-for="image in images"
                    :key="image.id"
                    class="w-full h-20 p-4 border-2 border-gray-100 rounded-md shadow-sm flex justify-between gap-4 dark:border-[#313442]"
                >
                    <img
                        :src="image.url"
                        alt="Product image"
                        class="w-14"
                    />

                    <div class="w-full">
                        <span class="text-sm font-semibold text-gray-800 dark:text-gray-100">
                            {{ image.name }}
                        </span>

                        <div class="w-full h-1 bg-green-500 rounded-md mt-2"></div>
                    </div>

                    <div
                        class="w-9 h-8 bg-red-300/80 rounded-full flex items-center justify-center cursor-pointer shadow-md mt-2"
                        @click="removeImage(image)"
                    >
                        <i class="fas fa-times text-red-800"></i>
                    </div>
                </div>
            </TransitionGroup>
        </div>
    </div>
</template>


<style scoped>
    .fade-enter-from {
        opacity: 0;
        transform: translateY(-10px);
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
        transform: translateY(0);
    }
    .fade-leave-to {
        opacity: 0;
        transform: translateY(-10px);
    }
</style>
