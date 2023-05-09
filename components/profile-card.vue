<template>
    <div class="rounded-lg p-10 shadow bg-white">
        <div class="flex items-center">
            <div class="relative">
                <img
                    src="~/assets/me.jpg"
                    alt="a picture of myself"
                    class="w-36 h-36 object-cover object-top rounded-full shadow ring-4 ring-stone-400" />
                <span
                    class="absolute -top-2 -right-2 ring-4 ring-stone-400 p-2 bg-white rounded-full text-xl text-stone-500 font-bold">
                    99
                </span>
            </div>

            <div class="flex flex-col text-right -ml-7">
                <h1 class="text-3xl text-stone-500 font-bold tracking-wider">Theuzin</h1>
                <h2 class="text-sm text-stone-500 font-bold underline-offset-4 underline">Rank 1</h2>

                <PointsBar color="red" />
                <PointsBar color="blue" />
            </div>
        </div>
    </div>
</template>
