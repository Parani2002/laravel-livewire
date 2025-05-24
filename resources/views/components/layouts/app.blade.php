<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Student Management</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        {{-- If Preline.js is needed, it's better to include it in app.js --}}
        <script src="https://cdn.jsdelivr.net/npm/preline@latest/dist/preline.js"></script>
    </head>
    <body>
        
        <div class="flex flex-col min-h-screen">
            <x-header />
            <div class="flex ">
                <div>
                    <x-sidebar />
                </div>
                <div class="flex-grow">
                    {{ $slot }}
                </div>
            </div>
        
          
        
            <!-- Footer -->
            <div class="mt-auto">
                <x-footer />
            </div>
        </div>
        
     
    </body>
</html>
