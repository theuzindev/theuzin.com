<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">

        <title>Theuzin - Software Engineer</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased font-figtree bg-gray-100 flex justify-center items-center h-screen">
        <main
            x-cloak
            x-data="{ show: false }"
            x-init="$nextTick(() => show = true)"
            x-show="show"
            x-transition.scale.origin.left.opacity.duration.750ms
            class="flex flex-col md:flex-row md:items-center gap-7 bg-white rounded-lg shadow-lg p-10 m-5 md:w-4/5 xl:w-1/2"
        >
            <div class="m-auto md:m-0">
                <img src="{{ asset('img/me.jpg') }}" alt="A photo of me" class="rounded-full w-64 h-64 object-cover object-top" />
            </div>

            <div class="flex-1">
                <div class="border-b pb-5 flex flex-col items-center md:items-start">
                    <h1 class="font-semibold text-5xl font-bangers tracking-widest">
                        Theuzin
                    </h1>

                    <div class="flex items-center gap-1 text-lg text-gray-400 mt-3">
                        <x-email />
                        <a href="mailto:eu@theuzin.com">eu@theuzin.com</a>
                    </div>

                    <div class="flex items-center gap-1 text-lg text-gray-400 mt-1">
                        <x-home />
                        <div>Recife, Brazil</div>
                    </div>
                </div>

                <div class="mt-5 text-xl">
                    <p>I am an enthusiastic software engineer with a passion for programming. My expertise lies in PHP and Laravel, and I plan to leverage my skills to create engaging online content about programming.</p>
                </div>

                <div class="flex gap-5 mt-5">
                    <a href="https://twitter.com/TheuzinXYZ" title="Twitter" target="_blank">
                        <x-twitter />
                    </a>

                    <a href="https://github.com/TheuzinXYZ" title="GitHub" target="_blank">
                        <x-github />
                    </a>

                    <a href="https://linkedin.com/in/TheuzinXYZ" title="LinkedIn" target="_blank">
                        <x-linkedin />
                    </a>

                    <a href="https://www.youtube.com/@TheuzinXYZ" title="YouTube Channel" target="_blank">
                        <x-youtube />
                    </a>
                </div>
            </div>
        </main>
    </body>
</html>
