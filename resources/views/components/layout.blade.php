<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Contacts App') }}</title>

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body hx-boost="true" hx-history="false" class="bg-blue-50">
    <main>
        <header
            class="text-center text-white p-6 bg-gradient-to-r shadow-sm shadow-gray-500 from-cyan-500 to-blue-500 border-b-2 border-gray-500">
            <h1 class="text-3xl font-semibold">Contacts App</h1>
            <h2 class="mt-2">A Demo Contacts Application Built with Laravel and HTMX</h2>
        </header>
        <section class="max-w-4xl mx-auto flex flex-col items-center gap-6 p-6">
            {{ $slot }}
        </section>
    </main>
</body>

</html>
