<template>
     <footer class="dark:bg-[#18181b]  dark:text-gray-200 flex justify-center relative before:w-full before:h-[1px] before:-top-2 before:absolute before:bg-gray-200 dark:before:bg-gray-700 mx-7" >
                <p class="text-sm py-2 w-full dark:text-gray-400 text-gray-500 ">
                 <a>
                    <span>©</span> <span>M</span><span>a</span><span>d</span><span>e</span> <span>I</span><span>n</span> <span>2</span><span>0</span><span>2</span><span>5</span> <span>-</span> <span>b</span><span>y</span>
                </a>
                <span class="hover:text-gray-950 dark:hover:text-gray-200 ">
                    <a class= "p-[1px]" href="#">
                        <span class="">A</span><span>n</span><span>t</span><span>h</span><span>o</span><span>n</span><span>y</span>
                    </a>
                    <a class=" p-[1px]" href="#">
                        <span>A</span><span>r</span><span>a</span><span>g</span><span>ã</span><span>o</span>
                    </a>
                </span>
                <a class="p-[1px]" >
                    <span>&</span>
                </a>
                <span class="hover:text-gray-950 dark:hover:text-gray-200 ">
                    <a class="name p-[1px]" href="#">
                        <span>V</span><span>i</span><span>t</span><span>o</span><span>r</span>
                    </a>
                    <a class="name p-[1px]" href="#">
                        <span>L</span><span>i</span><span>m</span><span>a</span>
                    </a>
                </span>
                </p>
                <p class="flex gap-4 dark:text-gray-400 text-gray-500">
                    <button class="hover:text-gray-950 dark:hover:text-gray-200">About</button>
                    <button class="hover:text-gray-950 dark:hover:text-gray-200">Careers</button>
                </p>
            </footer>
</template>

<style scoped>



a > span {
    position: relative;
}

a > span::after {
    position: absolute;
    content: '';
    width: 20px;
    height: 1px;
    top: -17px;
    left: -50%;
    opacity: 0;
    animation: fade-out 0.3s ease-out forwards;
    background-color: theme('colors.orange.400'); /* Cor para o modo claro */
}

.dark a > span::after {
    background-color: theme('colors.purple.600'); /* Cor para o modo escuro */
}

a > span:hover::after {
    opacity: 1;
    animation: none;
}

/* Keyframes para a animação de entrada */

/* Keyframes para a animação de saída */
@keyframes fade-out {
    from {
        opacity: 1;
    }
    to {
        opacity: 0;
    }
}


</style>
