@extends('layout')
@section('title', 'About Us')
@section('styles')
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="./style.css">

    <style>
        .mySlides {
            display: none;
        }

        /* Add a pointer when hovering over the thumbnail images */
        .cursor {
            cursor: pointer;
        }

        /* Next & previous buttons */
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -50px;
            color: white;
            font-weight: bold;
            font-size: 20px;
            border-radius: 0 3px 3px 0;
            user-select: none;
            -webkit-user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* Container for image text */
        .caption-container {
            text-align: center;
            background-color: #222;
            padding: 2px 16px;
            color: white;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Six columns side by side */
        .column {
            float: left;
            width: 25%;
        }

        /* Add a transparency effect for thumnbail images */
        .demo {
            opacity: 0.6;
        }

        .active,
        .demo:hover {
            opacity: 1;
        }

    </style>
@stop
@section('content')
    <!--banner-->

    <div class="relative bg-gray-50 h-72" style="background-image: url({{ asset('assets/banner.jpg') }});background-repeat: no-repeat;
                background-size: cover;">

        <main class="relative h-full mx-auto max-w-7xl px-4 flex items-center justify-center ">
            <div class="text-center">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-7xl ">
                    <span class="block text-white"> <span class=" text-red-600">Company</span> </span>
                </h1>
            </div>
        </main>

    </div>
    </div>
    <!--end banner-->
    <div class="bg-white py-16 px-4 overflow-hidden sm:px-6 lg:px-8 lg:py-24">
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
                    RedX Group of Company

                </h2>

            </div>

        </div>
    </div>


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
