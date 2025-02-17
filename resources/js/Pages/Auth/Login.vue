<script setup>
    import Footer from "../../Components/Layouts/Footer.vue";
    import ButtonDarkMode from "../../Components/Ui/Buttons/ButtonDarkMode.vue";
</script>

<template>
    <main
        class="max-md:h-full h-[calc(100vh-3rem)] w-full relative dark:bg-zinc-900"
        :class="{ dark: isDarkMode }"
    >
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 rounded-md">
            <div
                class="bg-white  border-[1.5px] border-gray-200 dark:border-gray-700 dark:bg-[#1F2128] w-full h-12 mb-4 flex items-center justify-center px-4 gap-1"
            >
                <span class="text-[16px] font-semibold dark:text-gray-100">E-commerce</span>
            <a href="/">
                <img
                    :src="isDarkMode ? '/img/logo-dark.png' : '/img/logo.png'"
                    alt="Logo"
                    class="h-[30px]"
                />
            </a>
                <span
                    class="text-[10px] text-gray-600 font-semibold dark:text-gray-400"
                >
                    Always in your direction
                </span>
            </div>

            <div class="p-4 w-[350px]  border-[1.5px] border-gray-200 dark:border-gray-700 dark:bg-[#1F2128] bg-white h-[460px]">
                <h2 class="text-2xl font-bold text-center dark:text-gray-100">Login</h2>
                <form class="mt-4">
                    <div class="mb-4">
                        <label
                            for="email"
                            class="block text-sm font-medium text-gray-700 dark:text-gray-200"
                            >Email</label
                        >
                        <input
                            type="email"
                            id="email"
                            name="email"
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-zinc-800 dark:border-zinc-700 dark:text-white"
                        />
                    </div>
                    <div class="mb-4">
                        <label
                            for="password"
                            class="block text-sm font-medium text-gray-700 dark:text-gray-200"
                            >Password</label
                        >
                        <input
                            type="password"
                            id="password"
                            name="password"
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-zinc-800 dark:border-zinc-700 dark:text-white"
                        />
                    </div>
                    <div class="mb-4">
                        <button
                            type="submit"
                            class="w-full bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded"
                        >
                            Login
                        </button>
                    </div>
                    <div class="flex flex-col">
                        <Link
                            class="text-blue-600 text-center dark:text-blue-400"
                            >Register</Link
                        >
                        <Link
                            class="text-blue-600 text-[14px] mt-1 dark:text-blue-400"
                            >Forgot Password?</Link
                        >
                        <span
                            class="text-center text-[14px] mt-4 mb-2 dark:text-gray-200"
                            >or enter with</span
                        >
                    </div>
                    <hr class="dark:border-zinc-700" />
                    <div class="flex gap-4 items-center justify-center">
                        <button class="size-[52px] text-white font-bold">
                            <img src="img/facebook-svg-real.svg" alt="" />
                        </button>
                        <button class="size-20 text-white font-bold">
                            <img src="img/google-svg.svg" alt="" />
                        </button>
                        <button class="size-[52px] text-white font-bold">
                            <img src="img/instagram-svg.svg" alt="" />
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="absolute top-4 right-4">
            <ButtonDarkMode />
        </div>
        <div class="absolute top-4 left-4  ">
            <a href="/">
            <button  class="dark:text-gray-200 p-2  rounded-lg bg-white size-12  border-[1.5px] border-gray-200 dark:border-gray-700 dark:bg-[#1F2128] hover:scale-105 cursor-pointer"><-</button>
            </a>
        </div>

    </main>
    <Footer />



</template>

<style scoped>

</style>
