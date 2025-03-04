<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Laravel Crash Course</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        {{-- If Preline.js is needed, it's better to include it in app.js --}}
        <script src="https://cdn.jsdelivr.net/npm/preline@latest/dist/preline.js"></script>
    </head>
    <body>
        {{-- Include header component properly if needed --}}
    <x-header />
       <x-sidebar />

        {{ $slot }}

        <x-footer />
    </body>
</html>
