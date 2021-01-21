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

        <main class="relative h-full mx-auto max-w-7xl px-4 flex items-center justify-center  ">
            <div class="text-center">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-7xl ">
                    <span class="block   text-white">ABOUT <span class=" text-red-600">US</span> </span>
                </h1>
            </div>
        </main>
    </div>
    </div>
    <!--end banner-->

@if($page)

<?php

    $count = 1;
    $data = $page->pageContent($page->id);
   
    ?>

    <div class="bg-white">
        <div class="max-w-7xl mx-auto py-12 sm:py-16 lg:pt-20 lg:pb-4 font-sans">

            <dl class=" md:flex sm:grid lg:grid-cols-2 sm:p-4 sm:gap-8">
                <div class="flex flex-col text-center flex-initial">

                    <dd class="order-1 text-6xl font-extrabold text-red-600">
                        Welcome!
                    </dd>
                </div>
                <div class="flex flex-col mt-8 sm:mt-0 px-6">

                    <dd class=" mt-2 text-lg leading-6 font-medium text-gray-700">
                     {!! $data->short_description !!}
                    </dd>
                   

                </div>

            </dl>
        </div>
    </div>






    <div class="bg-gray-50 pt-2 sm:pt-1">

        <div class="mt-5 pb-12 bg-white sm:pb-16">
            <div class="relative">
                <div class="absolute inset-0 h-1/2 bg-gray-50"></div>
                <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 ">
                    <div>
                        <dl class="rounded-lg bg-white shadow-lg sm:grid lg:grid-cols-4 sm:grid-cols-2">
                            <div
                                class="flex flex-col border-b border-gray-100 p-6 text-center sm:border-0 sm:border-r bg-gray-600">

                                <dd class="order-1 text-5xl font-extrabold text-white">
                                    How it works
                                </dd>
                            </div>
                            <div
                                class="flex flex-col border-t border-b border-gray-100 p-6 text-center sm:border-0 sm:border-l sm:border-r bg-gray-700">

                                <dd class="order-1 text-5xl font-extrabold text-white">
                                    01
                                </dd>
                                <dd class="order-1 text-1xl text-white font-semibold my-4">
                                    Project Planning
                                </dd>
                            </div>
                            <div
                                class="flex flex-col border-t border-gray-100 p-6 text-center sm:border-0 sm:border-l bg-gray-800">

                                <dd class="order-1 text-5xl font-extrabold text-white">
                                    02
                                </dd>
                                <dd class="order-1 text-1xl text-white font-semibold my-4">
                                    Research & Analysis
                                </dd>
                            </div>
                            <div
                                class="flex flex-col border-t border-gray-100 p-6 text-center sm:border-0 sm:border-l bg-gray-900">

                                <dd class="order-1 text-5xl font-extrabold text-white">
                                    03
                                </dd>
                                <dd class="order-1 text-1xl text-white font-semibold my-4">
                                    Business Launch
                                </dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--our Achievements -->
    <div class="relative bg-white overflow-hidden">

        <div class="relative pb-16 sm:pb-24 lg:pb-12 ">
            <main class=" mx-auto max-w-7xl px-4 sm:mt-14 sm:px-6 ">
                <div class="lg:grid lg:grid-cols-12 lg:gap-8">


                    <div class="sm:text-center md:max-w-2xl md:mx-auto lg:col-span-6 lg:text-left about-description-data"
                        style="font-family: 'font-sans '">
                        <p  class="mt-3 text-xl text-black sm:mt-5 sm:text-sm lg:text-lg xl:text-base font-sans text-justify">{!! $data->description !!}</p>
                    </div>
                    <div
                        class="mt-12 relative sm:max-w-lg sm:mx-auto lg:mt-0 lg:max-w-none lg:mx-0 lg:col-span-6 lg:flex lg:items-center">
                        <img src="{{ asset($data->image) }}" alt="image" class="w-full shadow-lg">
                        <!-- <div class="relative mx-auto w-full rounded-lg  lg:max-w-md">
                                <div class="owl-slider">
                                    <div id="carousel-achievements" class="owl-carousel">
                                        <div class="item">
                                            <img class=" shadow-lg" src="https://images.unsplash.com/photo-1496247749665-49cf5b1022e9?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8aW5kdXN0cmlhbHxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
                                        </div>
                                        <div class="item">
                                            <img class=" shadow-lg" src="https://images.unsplash.com/photo-1512813759302-a44af29da3c1?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTB8fGluZHVzdHJpYWx8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" style="width:100%" onclick="currentSlide(2)" alt="The Woods">
                                        </div>
                                        <div class="item">
                                        <img class=" shadow-lg" src="https://images.unsplash.com/photo-1541263235992-1863345ef977?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTZ8fGluZHVzdHJpYWx8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" style="width:100%" onclick="currentSlide(3)" alt="The Woods">
                                        </div>
                                        <div class="item">
                                            <img class=" shadow-lg" src="https://images.unsplash.com/photo-1512813759302-a44af29da3c1?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTB8fGluZHVzdHJpYWx8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" style="width:100%" onclick="currentSlide(3)" alt="The Woods">
                                        </div>

                                    </div>
                                </div>


                            </div> -->
                    </div>
                </div>
            </main>



        </div>
    </div>

    <!--end our Achievements -->



    <div class="bg-white">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
            <div class="lg:grid lg:grid-cols-2 lg:gap-8 lg:items-center">
                <div>
                    <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                        ISO Standards
                    </h2>
                    <p class="mt-3 max-w-3xl text-lg text-gray-500">
                    <ul class="mt-3 max-w-3xl text-lg text-gray-500 description-data">
                        {!! $data->iso_standards !!}
                    </ul>
                    </p>

                </div>
                <div class="mt-8 grid grid-cols-2 gap-0.5 md:grid-cols-3 lg:mt-0 lg:grid-cols-2">
                    <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50">
                        <a href="{{asset('assets/documents/RedXIndustries.pdf')}}" target="blank" class=""><img src="{{ asset('assets/image/Brochure-Download.png') }}" alt="Tuple"></a>
                        
                    </div>
                    <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50">
                        <a href="{{route('quality')}}" class=""><img src="{{ asset('assets/image/Laboratory.png') }}" alt="Tuple"></a>
                        
                    </div>
                    <!-- <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50">
                        <img src="{{ asset('assets/image/Participations.png') }}" alt="Tuple">
                    </div>
                    <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50">
                        <img src="{{ asset('assets/image/Quick-Enqiry.png') }}" alt="Tuple">
                    </div> -->

                </div>
            </div>
        </div>
    </div>

@endif
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
