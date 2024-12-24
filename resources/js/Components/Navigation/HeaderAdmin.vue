<template>
    <header class="
        bg-white w-full h-16 flex justify-between items-center px-4 shadow-sm"
    >
        <div class="flex flex-grow justify-center">
            <div class="relative w-1/2">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <i class="fas fa-search text-gray-400"></i>
                </div>

                <input
                    placeholder="Search"
                    type="search"
                    class="p-4 pl-8 h-10 bg-[#F5F5FA] text-sm border border-gray-200 rounded-md w-full focus:outline-none focus:ring-1 focus:ring-gray-300 transition duration-300"
                />
            </div>
        </div>

        <div class="flex justify-between gap-4">
            <div>Notifications</div>
            <div>Profile</div>
        </div>
    </header>
</template>
