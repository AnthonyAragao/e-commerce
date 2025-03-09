<script setup>
    import { inject, ref } from 'vue';

    const categories = inject("categories");
    const isRotated  = ref(true);

    const toggleRotate = () => isRotated.value = !isRotated.value;
</script>

<template>
     <div
        v-show="categories"
        class="w-[1400px] mx-auto flex items-center gap-3"
    >
        <h4
            @click="toggleRotate"
            :class="{'text-primary dark:text-secondary' : isRotated}"
            class="cursor-pointer text-gray-900 hover:text-primary text-base dark:text-gray-300 dark:hover:text-secondary my-2"
        >
            Categorias <i  :class="{ '-rotate-90': isRotated }" class="fas fa-caret-down"></i>
        </h4>

        <ul v-if="isRotated" class="flex gap-2 my-2">
            <li
                v-for="category in categories"
                :key="category.id"
                class=" text-gray-500 text-sm hover:text-primary cursor-pointer dark:text-gray-400 hover:scale-105 dark:hover:text-secondary"
            >
                <Link :href="`/categories/${category.slug}`">
                    {{ category.name }}
                </Link>

            </li>
        </ul>
    </div>
</template>
