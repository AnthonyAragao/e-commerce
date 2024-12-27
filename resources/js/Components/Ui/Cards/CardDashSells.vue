<template>
   <div class="bg-white py-2 w-[224px] h-20 rounded-md px-3 flex flex-col gap-1 border-[1px] border-gray-200 dark:border-gray-700  dark:bg-[#1F2128]">
        <div class="flex justify-between"> <h3 class="text-xs text-gray-500 ">Total sells</h3>
            <!-- faça um icone de 3 pontinhos na vertical-->
            <i class="text-gray-500 fas fa-ellipsis-v"></i>
        </div>
        <div class="flex justify-between items-center">
            <div class="flex items-center gap-1">
                <!-- faça um icone de um baldinh -->
                <i class="text-[#50d1b2] text-xl fas fa-shopping-cart"></i>
                <h4 class="font-semibold text-[14px] dark:text-gray-200 ">$126.500</h4>
            </div>
            <div class="flex gap-1 items-center">
                <i class="text-[#50d1b2] text-xl fas fa-chart-line"></i>
                <span class="text-xs text-[#50d1b2]">34.7%</span>
            </div>
        </div>
        <span class="text-end text-gray-500 text-[9px] ">Compared to Jan 2022</span>
   </div>
</template>
