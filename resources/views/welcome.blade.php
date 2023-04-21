<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">

        <title>Theuzin - Software Engineer</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased font-sans bg-gray-100 flex justify-center items-center h-screen">
        <main class="flex gap-2 bg-white rounded-lg shadow-lg p-10 w-1/2">
            <div class="w-1/3">
                <span>a</span>
            </div>

            <div class="flex-1">
                <div class="border-b pb-5">
                    <h1 class="font-semibold text-5xl">
                        Theuzin
                    </h1>

                    <div class="flex items-center gap-1 text-lg text-gray-400 mt-3">
                        <x-email />
                        <a href="mailto:eu@theuzin.com">eu@theuzin.com</a>
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
