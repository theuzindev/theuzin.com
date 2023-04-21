<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">

        <title>AI - Pergunte sobre Raiam Santos</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
    </head>
    <body class="antialiased font-figtree bg-gray-100 flex justify-center items-start h-screen">
        <main
            x-cloak
            x-data="{ show: false }"
            x-init="$nextTick(() => show = true)"
            x-show="show"
            x-transition.scale.origin.left.opacity.duration.750ms
            class="m-10 md:w-4/5 xl:w-1/2"
        >
            {{ $slot }}
        </main>

        @livewireScripts
    </body>
</html>
