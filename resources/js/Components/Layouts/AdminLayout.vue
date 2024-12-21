<script setup>
    import Sidebar from '../Navigation/Sidebar.vue';
</script>

<template>
    <div class="flex bg-[#111828]">
        <Sidebar />

        <div class="flex-1 flex flex-col bg-white mt-6 rounded-tl-[40px]">
          <main class="p-7">
            <slot></slot>
          </main>
        </div>
    </div>
</template>
