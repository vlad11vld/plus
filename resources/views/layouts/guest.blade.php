<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite('resources/css/app.css')
    </head>
    <body class="font-sans text-gray-900 ">
        <x-application-logo class="fixed top-0" />
        <div class="flex flex-col  sm:justify-center items-center pt-6 sm:pt-0 bg-withe">
            <div class="font-medium w-full text-size-20 text-center">WELCOME BACK!</div>
            <div class="w-full sm:max-w-md mt-6 px-10 py-4 border-2 border-cyan-500 overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
