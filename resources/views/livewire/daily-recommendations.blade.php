<div x-data="{ hasResult: @entangle('result') }">
    <h1 class="font-bangers text-5xl text-center">Today`s Recommendations</h1>

    <div class="flex justify-evenly items-center mt-14 gap-10 flex-wrap">
        <button wire:click="food" class="{{ $selected == 'food' ? 'bg-gradient-to-tr from-gray-300 to-gray-100' : '' }} bg-white hover:animate-pulse hover:bg-gray-50 hover:scale-110 hover:transition-all rounded-full p-10 shadow-md shadow-red-200">
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pizza">
                <path d="M15 11h.01"></path>
                <path d="M11 15h.01"></path>
                <path d="M16 16h.01"></path>
                <path d="m2 16 20 6-6-20A20 20 0 0 0 2 16"></path>
                <path d="M5.71 17.11a17.04 17.04 0 0 1 11.4-11.4"></path>
            </svg>
        </button>

        <button wire:click="style" class="{{ $selected == 'style' ? 'bg-gradient-to-tr from-gray-300 to-gray-100' : '' }} bg-white hover:animate-pulse hover:bg-gray-50 hover:scale-110 hover:transition-all rounded-full p-7 shadow-md shadow-yellow-200">
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shirt">
                <path d="M20.38 3.46 16 2a4 4 0 0 1-8 0L3.62 3.46a2 2 0 0 0-1.34 2.23l.58 3.47a1 1 0 0 0 .99.84H6v10c0 1.1.9 2 2 2h8a2 2 0 0 0 2-2V10h2.15a1 1 0 0 0 .99-.84l.58-3.47a2 2 0 0 0-1.34-2.23z"></path>
            </svg>
        </button>

        <button wire:click="game" class="{{ $selected == 'game' ? 'bg-gradient-to-tr from-gray-300 to-gray-100' : '' }} bg-white hover:animate-pulse hover:bg-gray-50 hover:scale-110 hover:transition-all rounded-full p-7 shadow-md shadow-blue-200">
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-gamepad-2">
                <line x1="6" x2="10" y1="11" y2="11"></line>
                <line x1="8" x2="8" y1="9" y2="13"></line>
                <line x1="15" x2="15.01" y1="12" y2="12"></line>
                <line x1="18" x2="18.01" y1="10" y2="10"></line>
                <path d="M17.32 5H6.68a4 4 0 0 0-3.978 3.59c-.006.052-.01.101-.017.152C2.604 9.416 2 14.456 2 16a3 3 0 0 0 3 3c1 0 1.5-.5 2-1l1.414-1.414A2 2 0 0 1 9.828 16h4.344a2 2 0 0 1 1.414.586L17 18c.5.5 1 1 2 1a3 3 0 0 0 3-3c0-1.545-.604-6.584-.685-7.258-.007-.05-.011-.1-.017-.151A4 4 0 0 0 17.32 5z"></path>
            </svg>
        </button>

        <button wire:click="book" class="{{ $selected == 'book' ? 'bg-gradient-to-tr from-gray-300 to-gray-100' : '' }} bg-white hover:animate-pulse hover:bg-gray-50 hover:scale-110 hover:transition-all rounded-full p-7 shadow-md shadow-green-200">
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book">
                <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
            </svg>
        </button>
    </div>

    <div
        class="mt-14"
        x-show="hasResult"
        x-transition.duration.1000ms
        x-cloak
    >
        <div wire:loading class="p-10 bg-gray-200 w-full animate-pulse rounded-lg text-center text-xl">Loading...</div>
        <div wire:loading.remove class="bg-white w-full p-14 text-2xl rounded-lg">
            <h2 class="text-4xl capitalize font-semibold pb-5 border-b">
                {{ $selected }} <span class="text-xl text-gray-600 ml-3">({{ date('Y-m-d') }})</span>
            </h2>

            <p class="mt-5">{{ $result }}</p>
        </div>
    </div>
</div>
