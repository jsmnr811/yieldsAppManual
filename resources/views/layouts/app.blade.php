<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>yields App Manual</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @stack('styles')

    @livewireStyles
</head>

<body class="bg-gray-50 text-gray-800">
    <!-- Header -->
    <header class="bg-white/80 backdrop-blur-md shadow-sm sticky top-0 z-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <img class="h-10 w-auto" src="https://placehold.co/150x50/000000/FFFFFF?text=DA-PRDP"
                            alt="DA-PRDP Logo">
                    </div>
                </div>
                <nav class="hidden md:flex md:space-x-8">
                    <a href="{{ url('/') }}"
                        class="font-medium text-gray-600 hover:text-green-600 transition duration-150 ease-in-out">Feedback
                        Form</a>
                        <a href="{{ url('/dashboard') }}"
                        class="font-medium text-gray-600 hover:text-green-600 transition duration-150 ease-in-out">Dashboard</a>
                </nav>
                <div class="flex items-center md:hidden">
                    <button id="mobile-menu-button" type="button"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-green-500"
                        aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
        {{-- <div class="md:hidden hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="#home"
                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-green-700 hover:bg-gray-50">Home</a>
                <a href="#manual-overview"
                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-green-700 hover:bg-gray-50">Manual
                    Overview</a>
                <a href="#interactive-demo"
                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-green-700 hover:bg-gray-50">Interactive
                    Demo</a>
                <a href="#feedback"
                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-green-700 hover:bg-gray-50">Feedback
                    Form</a>
            </div>
        </div> --}}
    </header>

    <main >
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800" aria-labelledby="footer-heading">
        <h2 id="footer-heading" class="sr-only">Footer</h2>
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div
                class="mt-8 border-t border-gray-700 pt-8 md:flex md:flex-col md:items-center md:justify-center space-y-6">

                <!-- Smaller logo, centered, no distortion -->
                <div class="flex justify-center">
                    <img src="/public/Scale-Up.png" alt="Scale Up Logo" class="h-[100px] w-auto object-contain">
                </div>

                <!-- Copyright below, centered -->
                <p class="text-base text-gray-400 text-center">&copy; {{ date('Y') }} yieldsApp. Empowering
                    Philippine Agriculture.</p>

            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button id="backToTopBtn"
        class="fixed bottom-5 right-5 bg-green-600 text-white w-12 h-12 rounded-full shadow-lg flex items-center justify-center opacity-0 transition-opacity duration-300 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
        <i class="fas fa-arrow-up"></i>
    </button>



    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @stack('scripts')

</body>

</html>
