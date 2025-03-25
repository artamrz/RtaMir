<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'RtaMir') }}</title>
        @include('partials._head') {{-- Head partial --}}
        @viteReactRefresh
        @vite(['resources/js/app.jsx'])
        @inertiaHead
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @routes
        @viteReactRefresh
        @vite(['resources/js/app.jsx', "resources/js/Pages/{$page['component']}.jsx"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
         {{-- @include('partials._nav') --}} {{-- Disable for Inertia --}}
         @include('partials._messages') {{-- Flash messages --}}
         @inertia {{-- Inertia body of content --}}
         @include('partials._footer') {{-- Global footer --}}
         @include('partials._javascripts') {{-- Custom JS --}}
    </body>
</html>
