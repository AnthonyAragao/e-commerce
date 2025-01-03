<script setup>
    import CardStat from '../Cards/CardStat.vue';
</script>

<template>
    <div class="flex gap-6 mt-10">
        <CardStat
            title="Total sales"
            amount="$126.500"
            percentage="34.7%"
            footer="Compared to Jan 2022"
            iconClass="fas fa-shopping-cart"
            iconBackground="bg-[#50d1b2]"
        />

        <CardStat
            title="Total orders"
            amount="8672"
            percentage="22.8%"
            footer="Compared to Jan 2022"
            iconClass="fas fa-dollar-sign"
            iconBackground="bg-[#2674FF]"
        />


        <CardStat
            title="Daily orders"
            amount="$25.200"
            percentage="34.7%"
            footer="Compared to Jan 2022"
            iconClass="fas fa-shopping-cart"
            iconBackground="bg-[#7748CA]"
        />


        <CardStat
            title="Total users"
            amount="1200"
            percentage="23.7%"
            footer="Compared to Jan 2022"
            iconClass="fas fa-users"
            iconBackground="bg-[#FB7BB9]"
        />
    </div>
</template>
