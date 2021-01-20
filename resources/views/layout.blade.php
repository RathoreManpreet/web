<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title> @yield('title')</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    @yield('styles')
</head>

<body class="leading-normal tracking-normal text-white gradient"
    style="font-family: 'Source Sans Pro', sans-serif;font-sans">
<!-- 
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" class="w-full">
                <source src="{{asset('assets/banner.mp4')}}" type="video/mp4">
            </video> -->
            <!-- <div class="absolute sm:relative top-0 w-full"> -->
    <header>
        <div class="relative bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                <div
                    class="flex justify-between items-center border-b-2 border-gray-100 py-6 lg:justify-start md:space-x-10">
                    <div class="flex justify-start lg:w-0 lg:flex-1">
                        <a href="/">
                            <img class="h-16 w-auto" src="{{ asset('assets/image/logo.png') }}" alt="redx industries">
                        </a>
                    </div>
                    <div class="-mr-2 -my-2 xl:hidden">
                        <button type="button" onClick="openMenu()"
                            class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                    <nav class="hidden xl:flex space-x-10">
                        <a href="/" class="text-base font-medium text-gray-500 hover:text-gray-900">
                            Home
                        </a>
                        <div class="relative">
                            <button type="button" onclick="openAboutMenuWeb()"
                                class="group bg-white rounded-md text-gray-500 inline-flex items-center text-base font-medium focus:outline-none hover:text-gray-900 ">
                                <span>About Us</span>

                                <svg class="ml-2 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                            <div id="about-menu-web"
                                class="hidden absolute z-10 -ml-4 mt-3 transform px-2 w-64 max-w-md sm:px-0 lg:ml-0 lg:left-1/2 lg:-translate-x-1/2">
                                <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                                    <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                                        <a href="/about" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                            <div class="ml-4">
                                                <p class="text-base font-medium text-gray-900">
                                                    Who we are
                                                </p>
                                            </div>
                                        </a>
                                        <a href="/director-message"
                                            class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                            <div class="ml-4">
                                                <p class="text-base font-medium text-gray-900">
                                                    Managing Director Message
                                                </p>
                                            </div>
                                        </a>
                                        <a href="/career" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                            <div class="ml-4">
                                                <p class="text-base font-medium text-gray-900">
                                                    Career
                                                </p>
                                            </div>
                                        </a>
                                        <a href="{{route('redx-gallery')}}"
                                            class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                            <div class="ml-4">
                                                <p class="text-base font-medium text-gray-900">
                                                    Gallery
                                                </p>
                                            </div>
                                        </a>
                                        <a href="/group-of-company"
                                            class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                            <div class="ml-4">
                                                <p class="text-base font-medium text-gray-900">
                                                    Group of companies
                                                </p>
                                            </div>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <?php
                            $slug = "";
                            $redx_specific = new App\Models\RedxSpecific;
                            if($redx_specific->firstRexSpecific()) {
                                    $slug = $redx_specific->firstRexSpecific()->slug;
                            }
                        ?>

                        <a href="{{route('redx-specific',[$redx_specific->firstRexSpecific()->slug])}}" class="text-base font-medium text-gray-500 hover:text-gray-900">
                            Redx Specific
                        </a>
                        <a href="/products" class="text-base font-medium text-gray-500 hover:text-gray-900">
                            Products
                        </a>
                        <a href="/projects" class="text-base font-medium text-gray-500 hover:text-gray-900">
                            Projects
                        </a>
                        <a href="/service" class="text-base font-medium text-gray-500 hover:text-gray-900">
                            Services
                        </a>
                        <a href="/location" class="text-base font-medium text-gray-500 hover:text-gray-900">
                            Location
                        </a>
                        <a href="/quality" class="text-base font-medium text-gray-500 hover:text-gray-900">
                            Quality
                        </a>
                        <a href="/contact" class="text-base font-medium text-gray-500 hover:text-gray-900">
                            Contact
                        </a>

                    </nav>
                </div>
            </div>
            <div class="hidden absolute top-0 inset-x-0  z-10 p-2 transition transform origin-top-right xl:hidden"
                id="mobile-menu">
                <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
                    <div class="pt-5 pb-6 px-5">
                        <div class="flex items-center justify-between">
                            <div>
                                <img class="h-12 w-auto" src="{{ asset('assets/image/logo.png') }}"
                                    alt="Redx Industries">
                            </div>
                            <div class="-mr-2">
                                <button type="button" onClick="closeMenu()"
                                    class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                    <span class="sr-only">Close menu</span>
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="mt-6">
                            <nav class="grid gap-y-8">
                                <a href="/" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                                    <span class="ml-3 text-base font-medium text-gray-900">
                                        Home
                                    </span>
                                </a>
                                <div onclick="openAboutMenu()">
                                    <a class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50 justify-between">
                                        <span class="ml-3 text-base font-medium text-gray-900">
                                            About Us
                                        </span>
                                        <svg class="ml-2 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </div>

                                <div class=" hidden" id="about-menu">
                                    <div class="pb-4"><a href="/about" class="ml-5 text-base font-medium text-gray-900">
                                            Who we are</a></div>
                                    <div class="pb-4"><a href="/director-message"
                                            class="ml-5 text-base font-medium text-gray-900">Managing Director
                                            Message</a>
                                    </div>
                                    <div class="pb-4"><a href="{{route('redx-gallery')}}"
                                            class="ml-5 text-base font-medium text-gray-900">Gallery</a>
                                    </div>
                                    <div class="pb-4"><a href="/career"
                                            class="ml-5 text-base font-medium text-gray-900">Career</a>
                                    </div>
                                    <div><a href="/group-of-company"
                                            class="ml-5 text-base font-medium text-gray-900">Group of
                                            companies</a>
                                    </div>
                                </div>
                                <a href="{{route('redx-specific',[$redx_specific->firstRexSpecific()->slug])}}" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                                    <span class="ml-3 text-base font-medium text-gray-900">
                                        Redx Specific
                                    </span>
                                </a>
                                <a href="/products" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                                    <span class="ml-3 text-base font-medium text-gray-900">
                                        Products
                                    </span>
                                </a>
                                <a href="/projects" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                                    <span class="ml-3 text-base font-medium text-gray-900">
                                        Projects
                                    </span>
                                </a>
                                <a href="/service" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                                    <span class="ml-3 text-base font-medium text-gray-900">
                                        Services
                                    </span>
                                </a>
                                <a href="/location" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                                    <span class="ml-3 text-base font-medium text-gray-900">
                                        Location
                                    </span>
                                </a>
                                <a href="/quality" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                                    <span class="ml-3 text-base font-medium text-gray-900">
                                        Quality
                                    </span>
                                </a>
                                <a href="/contact" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                                    <span class="ml-3 text-base font-medium text-gray-900">
                                        Contact
                                    </span>
                                </a>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </header>

    @yield('content')

    <!--footer-->
    <footer class="bg-white-800" aria-labelledby="footerHeading">
        <h2 id="footerHeading" class="sr-only">Footer</h2>
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
            <div class="xl:grid xl:grid-cols-3 xl:gap-8">
                <div class="grid col-span-2 gap-8 xl:col-span-2">
                    <div class="md:grid md:grid-cols-1 md:gap-8">
                        <div>
                            <h3 class="text-sm font-semibold text-black-400 tracking-wider uppercase">
                                <img class="h-16 w-auto " src="{{ asset('assets/image/logo.png') }}" alt="">
                            </h3>
                            <p class="mt-4 space-y-4 text-lg text-black">
                                RedX has two state-of-art fully equipped laboratories one located in Hafeera another in
                                Hidd.
                                Our laboratories are committed to conduct tests and researches about building materials,
                                using best valid practices to issue our customers quality products, in order to achieve
                                the highest standards of credibility for the customers and consultants ...
                            </p>

                            <div class="flex space-x-6 md:order-2 mt-2 ">
                                <a href="https://www.facebook.com/redxinds"
                                    class="text-gray-400 hover:text-gray-300 w-8">
                                    <span class="sr-only">Facebook</span>
                                    <img src="https://img.icons8.com/cute-clipart/64/000000/facebook-new.png"
                                        class="h-1/2" />
                                </a>

                                <a href="https://instagram.com/redxinds" class="text-gray-400 hover:text-gray-300 w-8">
                                    <span class="sr-only">Instagram</span>
                                    <img src="https://img.icons8.com/cute-clipart/64/000000/instagram-new.png"
                                        class="h-1/2" />
                                </a>

                                <a href="https://twitter.com/redxinds" class="text-gray-400 hover:text-gray-300 w-8">
                                    <span class="sr-only">Twitter</span>
                                    <img src="https://img.icons8.com/cute-clipart/64/000000/twitter.png"
                                        class="h-1/2" />
                                </a>

                                <a href="https://www.youtube.com/user/redxindi"
                                    class="text-gray-400 hover:text-gray-300 w-8">
                                    <span class="sr-only">Twitter</span>
                                    <img src="https://img.icons8.com/cute-clipart/64/000000/youtube.png"
                                        class="h-1/2" />
                                </a>

                            </div>
                        </div>

                    </div>

                </div>
                <div class="mt-8 xl:mt-0">
                    @yield('subscribe')


                    <div>
                        <div class="md:grid md:grid-cols-2 md:gap-8 mt-10">
                            <div>

                                <ul class="mt-4 space-y-4">
                                    <li>
                                        <a href="/" class="text-lg text-black hover:text-red-600">
                                            Home
                                        </a>
                                    </li>

                                    <li>
                                        <a href="/products" class="text-lg text-black hover:text-red-600">
                                            Products
                                        </a>
                                    </li>

                                    <li>
                                        <a href="/service" class="text-lg text-black hover:text-red-600">
                                            Service
                                        </a>
                                    </li>

                                    <li>
                                        <a href="/about" class="text-lg text-black hover:text-red-600">
                                            About Us
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-12 md:mt-0">

                                <ul class="mt-4 space-y-4">
                                    <li>
                                        <a href="/contact" class="text-lg text-black hover:text-red-600">
                                            Contact Us
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="text-lg text-black hover:text-red-600">
                                            Term & Condition
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="text-lg text-black hover:text-red-600">
                                            Privacy Policy
                                        </a>
                                    </li>


                                </ul>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <div class="mt-8 border-t border-gray-700 pt-8 md:flex md:items-center md:justify-between">

            <p class="mt-8 text-base text-black-400 md:mt-0 md:order-1">
                &copy; 2020 RedX Industry, Inc. All rights reserved.
            </p>
        </div>
        </div>
    </footer>
    <!-- </div> -->
    <!--end footer-->
</body>

</html>
@yield('scripts')
<script>
$('.description-data').find('ul').addClass('list-disc text-gray-700 list-inside')
$('.description-data').find('p').addClass('text-gray-700 mb-4')
$('.about-description-data').find('p').addClass('mt-3 text-xl text-black sm:mt-5 sm:text-sm lg:text-lg xl:text-base font-sans text-justify')
    var aboutMenuMobile = false;
    var aboutMenuWeb = false;

    function openMenu() {

        $('#mobile-menu').removeClass('hidden')
    }

    function closeMenu() {

        $('#mobile-menu').addClass('hidden')
    }

    function openAboutMenu() {
        if (!aboutMenuMobile) {
            $('#about-menu').removeClass('hidden');
            aboutMenuMobile = true;
        } else {
            $('#about-menu').addClass('hidden')
            aboutMenuMobile = false;
        }

    }

    function openAboutMenuWeb() {
        if (!aboutMenuWeb) {
            $('#about-menu-web').removeClass('hidden');
            aboutMenuWeb = true;
        } else {
            $('#about-menu-web').addClass('hidden')
            aboutMenuWeb = false;
        }

    }

</script>
