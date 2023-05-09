<template>
    <div class="flex">
        <div class="relative">
            <img
                src="~/assets/me.jpg"
                alt="a picture of myself"
                class="w-36 h-36 object-cover object-top rounded-lg shadow ring-4 ring-stone-400" />
            <span
                class="absolute -top-2 -right-2 ring-4 ring-stone-400 p-2 bg-white rounded-full text-xl text-stone-500 font-bold">
                99
            </span>
        </div>

        <div class="flex flex-col justify-between pb-1 ml-5">
            <span class="text-right text-stone-400">#01</span>

            <div>
                <h1 class="text-3xl text-stone-500 font-bold tracking-wider">Theuzin</h1>
                <h2 class="text-sm text-stone-400 font-bold tracking-wider">Rank 1</h2>

                <PointsBar color="red" />
                <PointsBar color="blue" />
            </div>
        </div>
    </div>
</template>
