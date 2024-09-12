<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>JW-8 LTD - Management Consultancy</title>

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/fontawesome/css/all.css'])

    <!-- ReCaptcha -->
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

</head>
<body class="antialiased relative pb-72 md:pb-48 lg:pb-36 min-h-screen">
    <header class="flex flex-row relative justify-between lg:flex-col" x-data="{open: false}">

        <div class="absolute w-full h-full bg-blue opacity-20"></div>

        <div class="flex p-3 sm:p-0">
            <div class="hidden sm:block p-3 sm:p-0">
                <img src="{{ asset('images/header_01_02.jpg') }}" alt="Site Logo" aria-label="Logo" />
            </div>
            <h1 class="text-2xl sm:hidden">JW-8 Ltd Management Consultancy</h1>
        </div>

        <div class="flex flex-row-reverse p-3 z-20 lg:hidden">
            <button aria-label="Menu" x-on:click="open = ! open">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 site-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                </svg>
            </button>
        </div>

        <div class="fixed inset-0 bg-gray-900 bg-opacity-50 z-10" x-show="open" x-cloak
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-300"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0">
        </div>
        <div class="fixed inset-0 flex flex-col justify-center items-center z-20" x-show="open" x-cloak
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 scale-90"
             x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="transition ease-in duration-300"
             x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 scale-90"
        >
            <div class="bg-white p-5 rounded-lg w-4/5 h-4/5 relative">
                <button aria-label="Close" class="absolute top-3 right-3" x-on:click="open = ! open">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-9 w-9 text-blue hover:text-light-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

                <nav class="container h-full flex justify-end items-center" aria-label="Site" @click.outside="open = false">
                    <ul class="flex flex-col items-end justify-items-center gap-y-6 text-2xl text-blue">
                        <li aria-label="Home">
                            <a class="hover:text-light-blue" href="{{ url('/') }}">
                                Home
                            </a>
                        </li>
                        <li aria-label="About Us">
                            <a class="hover:text-light-blue" href="{{ url('/about-us') }}">
                                About Us
                            </a>
                        </li>
                        <li aria-label="Our Solutions">
                            <a class="hover:text-light-blue" href="{{ url('/our-solutions') }}">
                                Our Solutions
                            </a>
                        </li>
                        <li aria-label="Our Consultants">
                            <a class="hover:text-light-blue" href="{{ url('/our-consultants') }}">
                                Our Consultants
                            </a>
                        </li>
                        <li aria-label="Case Studies">
                            <a class="hover:text-light-blue" href="{{ url('/case-studies') }}">
                                Case Studies
                            </a>
                        </li>
                        <li aria-label="Contact Us">
                            <a class="hover:text-light-blue" href="{{ url('/contact') }}">
                                Contact Us
                            </a>
                        </li>
                        <li aria-label="Useful links">
                            <a class="hover:text-light-blue" href="{{ url('/useful-links') }}">
                                Useful links
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <nav class="bg-gray-200 hidden lg:flex justify-center z-10 bg-gradient-to-t from-gray-300 to-gray-50" aria-label="Site">
            <ul class="flex flex-row items-center text-lg navigation">
                <li class="border-r-gray-400 p-3" aria-label="Home">
                    <a class="hover:text-light-blue" href="{{ url('/') }}">
                        Home
                    </a>
                </li>
                <li class="border-l-white border-r-gray-400 p-3" aria-label="About Us">
                    <a class="hover:text-light-blue" href="{{ url('/about-us') }}">
                        About Us
                    </a>
                </li>
                <li class="border-l-white border-r-gray-400 p-3" aria-label="Our Solutions">
                    <a class="hover:text-light-blue" href="{{ url('/our-solutions') }}">
                        Our Solutions
                    </a>
                </li>
                <li class="border-l-white border-r-gray-400 p-3" aria-label="Our Consultants">
                    <a class="hover:text-light-blue" href="{{ url('/our-consultants') }}">
                        Our Consultants
                    </a>
                </li>
                <li class="border-l-white border-r-gray-400 p-3" aria-label="Case Studies">
                    <a class="hover:text-light-blue" href="{{ url('/case-studies') }}">
                        Case Studies
                    </a>
                </li>
                <li class="border-l-white border-r-gray-400 p-3" aria-label="Contact Us">
                    <a class="hover:text-light-blue" href="{{ url('/contact') }}">
                        Contact Us
                    </a>
                </li>
                <li class="border-l-white p-3" aria-label="Useful links">
                    <a class="hover:text-light-blue" href="{{ url('/useful-links') }}">
                        Useful links
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    @yield('banner')

    <main class="flex justify-center pt-5">
        @yield('content')
    </main>

    <footer class="absolute bottom-0 w-full">
        <div class="text-blue p-2 text-center">
            <p>JW-8 Online Legal Disclaimer and Copyright Notice</p>
            <p class="text-sm text-gray-400">
                This website and its content are copyright of JW-8 Ltd © {{ date('Y') }}
                JW-8 Ltd is a UK private limited company. All rights reserved
            </p>
        </div>
        <div class="bg-light-blue h-8 w-full"></div>
        <div class="bg-blue h-12 w-full"></div>
    </footer>
</body>
