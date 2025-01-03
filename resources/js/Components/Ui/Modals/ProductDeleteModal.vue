<script setup>
    import { useForm } from '@inertiajs/inertia-vue3';

    const { idProduct } = defineProps(['idProduct']);
    const emit = defineEmits(["close", "confirm"]);

    const form = useForm({
        id: idProduct,
    });

    const confirmDelete = () => {
        form.delete(`/admin/products/${idProduct}`,{
            onSuccess: () => emit('confirm'),
        });
    };
</script>

<template>
    <div
        class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center"
    >
        <div
            class="group w-[300px] py-10 rounded-2xl border shadow-md flex flex-col items-center bg-gray-100 border-gray-200 dark:bg-gray-900  dark:border-gray-800 "
        >

            <svg
                fill="currentColor"
                viewBox="0 0 20 20"
                class="animate-bounce w-12 h-12 flex items-center text-gray-600 fill-red-500 mx-auto"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    clip-rule="evenodd"
                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                    fill-rule="evenodd"
                ></path>
            </svg>

            <h2 class="text-xl font-bold py-4 text-gray-700 dark:text-gray-200">Are you sure?</h2>

            <p class="text-sm font-bold text-center text-gray-500 px-2">
                Do you really want to delete this product? This process cannot be undone.
            </p>

            <div class="mt-6 flex gap-2">
                <button
                    @click="emit('close')"
                    type="button"
                    class="
                        rounded-full shadow-lg px-5 py-2 text-sm font-medium tracking-wider text-gray-300 border transition ease-in duration-300
                        bg-gray-600 border-gray-600 hover:bg-transparent hover:text-black dark:bg-gray-800 dark:hover:bg-gray-900 dark:hover:text-white dark:hover:border-gray-700"
                >
                    Cancel
                </button>

                <button
                    @click="confirmDelete"
                    type="button"
                    class="bg-red-500 hover:bg-transparent px-5 py-2 text-sm shadow-sm hover:shadow-lg font-medium tracking-wider border border-red-500 hover:border-red-500 text-white hover:text-red-500 rounded-full transition ease-in duration-300"
                >
                    Confirm
                </button>
            </div>
        </div>
    </div>
</template>
