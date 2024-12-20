<script setup>
    const {message, items} = defineProps( ['message', 'items'] )
</script>

<template>
    <div class="p-6">
        <h1 class="text-2xl font-bold">{{ message }}</h1>

        <Link href="/about">Home</Link>

        <div v-for="item in items" :key="item">
            {{ item }}
        </div>
    </div>
</template>

