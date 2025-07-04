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
        <div class="bg-gray-50 bg-[#630436] text-black/50 dark:bg-black dark:text-white/50">
            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full px-0"> <!-- removed max-w-* and padding -->
        
                    <main class="w-full">
                        <!-- Social Buttons Fixed on Left Side -->
                        <div class="fixed right-4 top-3/4 flex flex-col gap-4 z-1000">
                            <!-- Facebook -->
                            <a href="https://www.facebook.com/profile.php?id=100071982616587" target="_blank" class="flex items-center gap-2 px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition shadow-md">
                                <svg class="w-5 h-5 fill-white" viewBox="0 0 24 24">
                                    <path d="M22 12c0-5.5228-4.4772-10-10-10S2 6.4772 2 12c0 4.9912 3.6576 9.1286 8.4375 9.8789V14.89h-2.54v-2.89h2.54V9.7978c0-2.5066 1.4925-3.89 3.7775-3.89 1.0943 0 2.2384.195 2.2384.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.7737l-.4437 2.89h-2.33v6.9889C18.3424 21.1286 22 16.9912 22 12z"/>
                                </svg>
                                Facebook
                            </a>

                            <!-- GitHub -->
                            <a href="https://github.com/Joshua-gen" target="_blank" class="flex items-center gap-2 px-4 py-2 bg-gray-800 text-white rounded-md hover:bg-black transition shadow-md">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="white">
                                    <path fill-rule="evenodd" d="M12.006 2a9.847 9.847 0 0 0-6.484 2.44 10.32 10.32 0 0 0-3.393 6.17 10.48 10.48 0 0 0 1.317 6.955 10.045 10.045 0 0 0 5.4 4.418c.504.095.683-.223.683-.494 0-.245-.01-1.052-.014-1.908-2.78.62-3.366-1.21-3.366-1.21a2.711 2.711 0 0 0-1.11-1.5c-.907-.637.07-.621.07-.621.317.044.62.163.885.346.266.183.487.426.647.71.135.253.318.476.538.655a2.079 2.079 0 0 0 2.37.196c.045-.52.27-1.006.635-1.37-2.219-.259-4.554-1.138-4.554-5.07a4.022 4.022 0 0 1 1.031-2.75 3.77 3.77 0 0 1 .096-2.713s.839-.275 2.749 1.05a9.26 9.26 0 0 1 5.004 0c1.906-1.325 2.74-1.05 2.74-1.05.37.858.406 1.828.101 2.713a4.017 4.017 0 0 1 1.029 2.75c0 3.939-2.339 4.805-4.564 5.058a2.471 2.471 0 0 1 .679 1.897c0 1.372-.012 2.477-.012 2.814 0 .272.18.592.687.492a10.05 10.05 0 0 0 5.388-4.421 10.473 10.473 0 0 0 1.313-6.948 10.32 10.32 0 0 0-3.39-6.165A9.847 9.847 0 0 0 12.007 2Z" clip-rule="evenodd"/>
                                </svg>
                                GitHub
                            </a>
                        </div>

                        <livewire:welcome.navigation-guest/>
                    </main>
                </div>
            </div>
        </div>
        
    </body>
</html>
