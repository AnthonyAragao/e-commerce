<template>
    <header
        class="fixed left-[14rem] w-[calc(100%-14rem)] h-16 bg-white flex justify-between items-center px-4 shadow-sm dark:bg-[#1F2128] dark:border-b dark:border-[#313442] z-10"
    >
        <div class="flex flex-grow justify-center">
            <div class="relative w-[50%] max-w-[600px]">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <i class="fas fa-search text-gray-400"></i>
                </div>

                <input
                    placeholder="Search"
                    type="search"
                    class="p-4 pl-8 h-10 bg-[#F5F5FA] text-sm border border-gray-200 rounded-md w-full focus:outline-none focus:ring-1 focus:ring-gray-300 dark:bg-[#313442] dark:text-white dark:border-[#313442] dark:ring-[#313442]"
                />
            </div>
        </div>

        <div class="flex justify-between gap-6 items-center cursor-pointer">
            <span>
                <i class="fas fa-bell text-gray-400"></i>
            </span>

            <span>
                <i class="fas fa-envelope text-gray-400"></i>
            </span>

            <!-- <div class="flex items-center">
                <img
                    src="https://randomuser.me/api/portraits/men/75.jpg"
                    alt="User"
                    class="w-8 h-8 rounded-full"
                >
            </div> -->

            <button class="text-red-600 dark:text-red-400">
                <i class="fas fa-sign-out-alt"></i>
            </button>
        </div>
  </header>
</template>
