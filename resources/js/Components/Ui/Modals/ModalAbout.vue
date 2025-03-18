<script setup>


</script>


<template>
    <div @click.self="$emit('close')" class="fixed top-0 left-0 bg-black/60 w-full h-full z-40">


        <div
        class="sticky top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[350px] h-[400px] bg-white border-[1.5px] border-gray-200 dark:border-gray-700 dark:bg-[#1F2128] shadow-sm rounded-[4px] p-4 "
    >
        <div>
            <h3 class="font-bold dark:text-gray-200 mt-[2.8px]">Vitor Lima</h3>
            <span class="text-xs text-gray-500"
                >Desenvolvedor Front-End - 2+ Anos de Experiência</span
            >
            <div class="flex flex-col">
                <h3 class="dark:text-gray-200">Stack:</h3>
                <div class="flex gap-4 mx-auto mt-1">
                    <i
                        class="fa-brands fa-react"
                        style="color: #61dafb; font-size: 44px"
                    ></i>

                    <i
                        class="fa-brands fa-vuejs"
                        style="color: #42b883; font-size: 44px"
                    ></i>


                    <img
                        src="/img/logo_typescript.png"
                        style="width: 44px"
                        alt=""
                    />

                    <svg
                        viewBox="0 0 44 48"
                        fill="none"
                        class="size-[44px] text-black dark:text-white"
                    >
                        <path
                            class="fill-sky-400"
                            d="M17.183 0C12.6 0 9.737 2.291 8.59 6.873c1.719-2.29 3.723-3.15 6.014-2.577 1.307.326 2.242 1.274 3.275 2.324 1.685 1.71 3.635 3.689 7.894 3.689 4.582 0 7.445-2.291 8.591-6.872-1.718 2.29-3.723 3.15-6.013 2.576-1.308-.326-2.243-1.274-3.276-2.324C23.39 1.98 21.44 0 17.183 0ZM8.59 10.309C4.01 10.309 1.145 12.6 0 17.182c1.718-2.291 3.723-3.15 6.013-2.577 1.308.326 2.243 1.274 3.276 2.324 1.685 1.71 3.635 3.689 7.894 3.689 4.582 0 7.445-2.29 8.59-6.872-1.718 2.29-3.722 3.15-6.013 2.577-1.307-.327-2.242-1.276-3.276-2.325-1.684-1.71-3.634-3.689-7.893-3.689Z"
                            transform="translate(0,10) scale(1.4)"
                        ></path>
                    </svg>

                    <i
                        class="fa-brands fa-laravel"
                        style="color: #f05340; font-size: 44px"
                    ></i>
                </div>
                <a target="_blank" href="https://vitorlima-vsl.github.io/vitorlima-vsl/" class="dark:bg-secondary w-[100px] mx-auto py-1 mt-7 mb-4 text-white rounded-md
                dark:hover:bg-hovSecondary transition-all duration-300
                bg-primary hover:bg-hovPrimary text-center
                ">Contato</a>
            </div>
        </div>
        <div>
            <h3 class="font-bold dark:text-gray-200 mt-[2.8px]">
                Anthony Aragão
            </h3>
            <span class="text-xs text-gray-500"
                >Desenvolvedor Full-Stack - 2+ Anos de Experiência</span
            >
            <div class="flex flex-col">
                <h3 class="dark:text-gray-200">Stack:</h3>
                <div class="flex gap-4 mx-auto mt-1">
                    <i
                        class="fa-brands fa-vuejs"
                        style="color: #42b883; font-size: 44px"
                    ></i>
                    <i
                        class="fa-brands fa-laravel"
                        style="color: #f05340; font-size: 44px"
                    ></i>
                  <!-- PHP -->
                    <i class="fa-brands fa-php" style="color: #777bb4; font-size: 44px;"></i>

                    <!-- JavaScript -->
                    <i class="fa-brands fa-js" style="color: #f0db4f; font-size: 44px;"></i>

                    <svg
                        viewBox="0 0 44 48"
                        fill="none"
                        class="size-[44px] text-black dark:text-white"
                    >
                        <path
                            class="fill-sky-400"
                            d="M17.183 0C12.6 0 9.737 2.291 8.59 6.873c1.719-2.29 3.723-3.15 6.014-2.577 1.307.326 2.242 1.274 3.275 2.324 1.685 1.71 3.635 3.689 7.894 3.689 4.582 0 7.445-2.291 8.591-6.872-1.718 2.29-3.723 3.15-6.013 2.576-1.308-.326-2.243-1.274-3.276-2.324C23.39 1.98 21.44 0 17.183 0ZM8.59 10.309C4.01 10.309 1.145 12.6 0 17.182c1.718-2.291 3.723-3.15 6.013-2.577 1.308.326 2.243 1.274 3.276 2.324 1.685 1.71 3.635 3.689 7.894 3.689 4.582 0 7.445-2.29 8.59-6.872-1.718 2.29-3.722 3.15-6.013 2.577-1.307-.327-2.242-1.276-3.276-2.325-1.684-1.71-3.634-3.689-7.893-3.689Z"
                            transform="translate(0,10) scale(1.4)"
                        ></path>
                    </svg>


                </div>
                <a target="_blank" href="https://www.linkedin.com/in/anthony-arag%C3%A3o-7761a8151/" class="dark:bg-secondary w-[100px] mx-auto py-1 mt-7 text-white rounded-md
                dark:hover:bg-hovSecondary transition-all duration-300
                bg-primary hover:bg-hovPrimary text-center
                ">Contato</a>
            </div>

        </div>
    </div>
    </div>

</template>
