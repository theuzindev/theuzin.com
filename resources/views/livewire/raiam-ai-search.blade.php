<div x-data="{ hasResult: @entangle('result') }">
    <div class="flex gap-5 items-center">
        <input
            type="text"
            wire:model="prompt"
            class="rounded-lg shadow-lg w-full p-10 text-2xl"
            placeholder="Pergunte qualquer coisa sobre o Raiam Santos"
            minlength="6"
            required
            autofocus
        />

        <button wire:click="search" class="bg-white rounded-full p-7 shadow-lg">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search">
                <circle cx="11" cy="11" r="8"></circle>
                <line x1="21" x2="16.65" y1="21" y2="16.65"></line>
            </svg>
        </button>
    </div>

    @error('prompt')
        <p class="m-3 text-red-500">{{ $message }}</p>
    @enderror

    <div
        class="mt-12"
        x-show="hasResult"
        x-transition.duration.1000ms
        x-cloak
    >
        <h2 class="text-4xl m-5 font-bangers">Resposta:</h2>

        <div class="bg-white flex w-full p-14 text-2xl rounded-lg">
            {{ $result }}
        </div>
    </div>
</div>
