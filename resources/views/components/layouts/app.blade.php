<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Laravel Crash Course</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="./node_modules/preline/dist/preline.js"></script>
        @fluxAppearance
    </head>
    <body>
    </x-header>
        {{ $slot }}
        @fluxScripts
    </body>
</html>
