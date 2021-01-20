@extends('layout')
@section('title', 'Location')
@section('styles')
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="./style.css">

    </style>
@stop
@section('content')
    <!--banner-->

    <div class="relative bg-gray-50 h-72" style="    background-image: url({{ asset('assets/banner.jpg') }});background-repeat: no-repeat;
                background-size: cover;">

        <main class="relative h-full mx-auto max-w-7xl px-4 flex items-center justify-center ">
            <div class="text-center">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-7xl ">
                    <span class="block text-white">Our <span class=" text-red-600">Location</span> </span>
                </h1>


            </div>
        </main>

    </div>
    </div>
    <!--end banner-->
    <div class="bg-white pt-16 pb-4 px-4 overflow-hidden sm:px-6 lg:px-8 lg:pt-24 lg:pb-4">
        <div class="relative max-w-xl mx-auto">
            <svg class="absolute left-full transform translate-x-1/2" width="404" height="404" fill="none"
                viewBox="0 0 404 404" aria-hidden="true">
                <defs>
                    <pattern id="85737c0e-0916-41d7-917f-596dc7edfa27" x="0" y="0" width="20" height="20"
                        patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                    </pattern>
                </defs>
                <rect width="404" height="404" fill="url(#85737c0e-0916-41d7-917f-596dc7edfa27)" />
            </svg>
            <svg class="absolute right-full bottom-0 transform -translate-x-1/2" width="404" height="404" fill="none"
                viewBox="0 0 404 404" aria-hidden="true">
                <defs>
                    <pattern id="85737c0e-0916-41d7-917f-596dc7edfa27" x="0" y="0" width="20" height="20"
                        patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                    </pattern>
                </defs>
                <rect width="404" height="404" fill="url(#85737c0e-0916-41d7-917f-596dc7edfa27)" />
            </svg>
            <div class="text-center">
                <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    RedX Location

                </h2>


            </div>

        </div>

    </div>




    <div class="bg-white">

        <div class="mt-10 pb-12 bg-white sm:pb-8">
            <div class="relative">
                <div class="absolute inset-0 h-1/2 bg-white"></div>
                <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 ">
                    <div>
                        <dl class="rounded-lg bg-white shadow-lg sm:grid lg:grid-cols-4 sm:grid-cols-2">
                            <div
                                class="flex flex-col border-b border-gray-100 p-6 text-center sm:border-0 sm:border-r bg-red-600">

                                <dd class="order-1 text-3xl font-bold text-white">
                                    <i class="fas fa-map-marker-alt"></i><br>
                                    Plant Locations
                                </dd>
                            </div>
                            <div
                                class="flex flex-col border-t border-b border-gray-100 p-6 text-center sm:border-0 sm:border-l sm:border-r bg-red-700">
                                <a href="https://www.google.com/maps?q=26.027420043945312,50.587005615234375&z=17&hl=en">
                                    <dd class="order-1 text-5xl font-extrabold text-white">
                                        01
                                    </dd>
                                    <dd class="order-1 text-1xl text-white font-semibold my-4">
                                        REDX main office
                                    </dd>
                                </a>
                            </div>
                            <div
                                class="flex flex-col border-t border-gray-100 p-6 text-center sm:border-0 sm:border-l bg-red-800">
                                <a
                                    href="https://www.google.com/maps/dir/26.225416,50.589907/%D8%B4%D8%A7%D8%B1%D8%B9+%D8%A7%D9%84%D8%AD%D9%88%D8%B6+%D8%A7%D9%84%D8%AC%D8%A7%D9%81%D8%8C+Al+Hidd%E2%80%AD%E2%80%AD/@26.2142435,50.5890206,13z/data=!3m1!4b1!4m10!4m9!1m1!4e1!1m5!1m1!1s0x3e49a9b887e9e485:0xe8fa1ae7affc07da!2m2!1d50.6580144!2d26.2097756!3e0">
                                    <dd class="order-1 text-5xl font-extrabold text-white">
                                        02
                                    </dd>
                                    <dd class="order-1 text-1xl text-white font-semibold my-4">
                                        REDX HIdd office
                                    </dd>
                                </a>
                            </div>
                            <div
                                class="flex flex-col border-t border-gray-100 p-6 text-center sm:border-0 sm:border-l bg-red-900">
                                <a
                                    href="https://www.google.com/maps?geocode=FXIqkAEdZ_EDAw%3D%3D;Ff___38d____fymdqvvW6KZJPjHhDnfvr1g66w%3D%3D&daddr=263+Dragon+City+4441+Road+6347+%D8%A7%D9%84%D9%85%D8%AD%D8%B1%D9%82+Diyar+Al-Muharraq%D8%8C+317%E2%80%AD&saddr=26.2252663,50.5900550&dirflg=d&ftid=0x3e49a6e8d6fbaa9d:0xeb3a58afef770ee1&shorturl=1">
                                    <dd class="order-1 text-5xl font-extrabold text-white">
                                        03
                                    </dd>
                                    <dd class="order-1 text-1xl text-white font-semibold my-4">
                                        REDX dragon mall showroom
                                    </dd>
                                </a>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--who we are -->
    <div class="relative bg-white overflow-hidden">

        <div class="relative pb-16 sm:pb-24 lg:pb-32">
            <main class=" mx-auto max-w-7xl px-4 sm:mt-24 sm:px-6 ">
                <div class="lg:grid lg:grid-cols-12 lg:gap-8">

                    <div
                        class="mt-12 relative sm:max-w-lg sm:mx-auto lg:mt-0 lg:max-w-none lg:mx-0 lg:col-span-6 lg:flex lg:items-center">

                        <div class="relative mx-auto w-full rounded-lg shadow-lg lg:max-w-md">

                            <img class="w-full" src="{{ asset('assets/location/pump.jpg') }}" alt="">

                        </div>
                    </div>
                    <div class="sm:text-center md:max-w-2xl md:mx-auto lg:col-span-6 lg:text-left "
                        style="font-family: 'font-sans'">
                        <h1>
                            <span class="mt-1 block text-2xl tracking-tight font-extrabold sm:text-5xl xl:text-4xl">
                                <span class="block text-gray-600">Pumping</span>
                            </span>
                        </h1>
                        <p class="mt-3 text-base text-gray-700 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl text-justify">
                            Concrete pumps can place concrete faster and more accurately with less labor than any other
                            method. Pumping saves time and money by allowing you to eallocate valuable personnel to other
                            duties to expedite the pour. Used for bot commercial and residential projects, pumping is an
                            effective way to place concete faster and more accurately while reducing labor costs.
                        </p>
                        <p class="mt-3 text-base text-gray-700 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl text-justify">
                            Scheduling is one of the most critical aspects of a concrte pour. using SRM Concrete for
                            concrete pumping streamlines the process and makes scheduling the pour much easier egardless of
                            time, weather, or job site conditions.
                        </p>
                        <p class="mt-3 text-base text-gray-700 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl text-justify">
                            Pumping not only makes a concrete pour more convenient and consistent, it improves on-the-jo
                            safety by keeping ready-mix tucks away from dagerous obstruction and reduces congestion on the
                            job site to improve efficiency and safety.
                        </p>

                    </div>
                </div>
            </main>


        </div>
    </div>

    <!--end who we are-->



@stop
@section('scripts')
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            var captionText = document.getElementById("caption");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            captionText.innerHTML = dots[slideIndex - 1].alt;
        }

    </script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js'></script>
    <script>
        jQuery("#carousel").owlCarousel({
            autoplay: true,
            lazyLoad: true,
            rewind: true,
            margin: 20,

            navText: [
                "<span class='carousel-nav-left top-1/2 absolute text-lg'><i class='fa fa-chevron-left'></i></span>",
                "<span class='carousel-nav-right top-1/2 text-lg right-0 absolute'><i class='fa fa-chevron-right'></i></span>"
            ],
            responsiveClass: true,
            autoHeight: true,
            autoplayTimeout: 7000,
            smartSpeed: 800,

            nav: true,
            responsive: {
                0: {
                    items: 1
                },

                600: {
                    items: 3
                },

                1024: {
                    items: 4
                },

                1366: {
                    items: 4
                }
            }
        });


        jQuery("#carousel-achievements").owlCarousel({
            lazyLoad: true,
            rewind: true,
            margin: 20,

            navText: [
                "<span class='carousel-nav-left top-1/3 absolute text-lg'><i class='fa fa-chevron-left'></i></span>",
                "<span class='carousel-nav-right top-1/3 text-lg right-0 absolute'><i class='fa fa-chevron-right'></i></span>"
            ],
            responsiveClass: true,
            autoHeight: true,
            autoplayTimeout: 7000,
            smartSpeed: 800,

            nav: true,
            responsive: {
                0: {
                    items: 1
                },

                600: {
                    items: 1
                },

                1024: {
                    items: 1
                },

                1366: {
                    items: 1
                }
            }
        });

    </script>
@endsection
