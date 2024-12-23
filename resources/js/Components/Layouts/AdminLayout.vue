<script setup>
    import Sidebar from '../Navigation/Sidebar.vue';
    import HeaderAdmin from '../Navigation/HeaderAdmin.vue';
</script>

<template>
    <div class="flex bg-[#F5F5FA]">
        <Sidebar />

        <div class="flex-1 flex flex-col">
            <HeaderAdmin />

            <main class="p-7">
                <slot></slot>
            </main>
        </div>
    </div>
</template>

