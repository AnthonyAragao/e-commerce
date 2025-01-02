<script setup>
    import CardStat from '../Cards/CardStat.vue';
</script>

<template>
    <div class="flex gap-6 my-10">
        <CardStat
            title="Total sells"
            amount="$126.500"
            percentage="34.7%"
            footer="Compared to Jan 2022"
            iconClass="fas fa-shopping-cart"
            iconBackground="bg-[#50d1b2]"
        />

        <CardStat
            title="Orders value"
            amount="$136.500"
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
            title="Daily Revenue"
            amount="$12.126"
            percentage="23.7%"
            footer="Compared to Jan 2022"
            iconClass="fas fa-dollar-sign"
            iconBackground="bg-[#FB7BB9]"
        />
    </div>
</template>
