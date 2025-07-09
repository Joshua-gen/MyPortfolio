<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased font-sans">

        {{-- Loading Screen --}}
        <div id="loading-screen" class="fixed inset-0 flex items-center justify-center bg-white dark:bg-black z-[9999]">
            <div class="text-center animate-pulse text-gray-700 dark:text-white">
                <svg class="w-10 h-10 mx-auto animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8z"/>
                </svg>
                <p class="mt-4">Loading...</p>
            </div>
        </div>
    
        {{-- Main Content (Hidden at first) --}}
        <div id="app-content" class="hidden">
            <div class="bg-gray-50 bg-[#630436] text-black/50 dark:bg-black dark:text-white/50">
                <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                    <div class="relative w-full px-0">
                        <main class="w-full">
    
                            <!-- Social Buttons Fixed on Left Side -->
                            <div class="fixed right-4 top-3/4 flex flex-col gap-4 z-1000">
                                <!-- Your social buttons -->
                            </div>
    
                            {{-- Livewire Component --}}
                            <livewire:welcome.navigation-guest/>
                        </main>
                    </div>
                </div>
            </div>
        </div>
    
        {{-- Script to Hide Loader --}}
        <script>
            window.addEventListener('load', () => {
                document.getElementById('loading-screen').style.display = 'none';
                document.getElementById('app-content').classList.remove('hidden');
            });
        </script>
    </body>
    
</html>
