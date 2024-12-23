<template>
    <header class="
        bg-white w-full h-16 flex justify-between items-center px-4 shadow-sm"
    >
        <div class="flex flex-grow justify-center">
            <input
                placeholder="Search..."
                type="search"
                class="p-4 h-10 bg-[#F5F5FA] border border-gray-200 rounded-md w-1/2 focus:outline-none focus:ring-1 focus:ring-[#7364DB] transition duration-150"
            />

            <button class="bg-[#7364DB] text-white px-4 py-2 rounded-md ml-1">
                <i class="fas fa-search"></i>
            </button>
        </div>

        <div class="flex justify-between gap-4">
            <div>Notifications</div>
            <div>Profile</div>
        </div>
    </header>
</template>
