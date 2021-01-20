@extends('layout')
@section('title', 'Quality')
@section('styles')
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="./style.css">


@stop
@section('content')
    <!--banner-->

    <div class="relative bg-gray-50 h-72" style="    background-image: url({{ asset('assets/banner.jpg') }});background-repeat: no-repeat;
            background-size: cover;">

        <main class="relative h-full mx-auto max-w-7xl inset-y-16 px-4 py-10 sm:mt-30 ">
            <div class="text-center">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-7xl ">
                    <span class="block   text-white">Qua<span class=" text-red-600">lity</span> </span>
                </h1>


            </div>
        </main>

    </div>
    </div>
    <!--end banner-->
    @if($page)

    <?php
    $image_list = "";
    $image_slider_list = "";
    $count = 1;
    $data = $page->pageContent($page->id);
    foreach($page->pageImages as $image) {
        $image_list .= '<div class="mySlides">
                            <img src="'.asset($image->image).'"
                                style="width:100%">
                        </div>';

        $image_slider_list .= ' <div class="item">
                                    <img class="owl-carousal-img cursor-pointer shadow-lg"
                                        src="'.asset($image->image).'"
                                        style="width:100%" onclick="currentSlide('.$count.')" alt="The Woods">
                                </div>';

        $count++;
    }
    ?>
        <div class="min-h-screen bg-gray-100">


            <main class="py-10">
                <!-- Page header -->


                <nav class="flex" aria-label="Breadcrumb">
                    <ol class="bg-white rounded-md shadow px-6 flex space-x-4">
                        <li class="flex">
                            <div class="flex items-center">
                                <a href="/" class="text-gray-400 hover:text-gray-500">
                                    <!-- Heroicon name: home -->
                                    <svg class="flex-shrink-0 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path
                                            d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                                    </svg>
                                    <span class="sr-only">Home</span>
                                </a>
                            </div>
                        </li>
                        <li class="flex">
                            <div class="flex items-center">
                                <svg class="flex-shrink-0 w-6 h-full text-gray-200" viewBox="0 0 24 44"
                                    preserveAspectRatio="none" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                    aria-hidden="true">
                                    <path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z" />
                                </svg>
                                <a href="/quality"
                                    class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Quality</a>
                            </div>
                        </li>

                    </ol>
                </nav>
                <div
                    class="mt-8 max-w-3xl mx-auto grid grid-cols-1 gap-6 sm:px-6 lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-3">
                    <div class="space-y-6 lg:col-start-1 lg:col-span-2">
                        <!-- Description list-->
                        <section aria-labelledby="applicant-information-title">
                            <div class="bg-white shadow sm:rounded-lg">
                                <div class="px-4 py-8 sm:px-6">
                                    <h2 id="applicant-information-title"
                                        class="text-3xl text-center leading-6 font-bold text-red-600">
                                        {{$data->title}}
                                    </h2>

                                </div>
                                <div class="border-t border-gray-200 px-4 py-5 sm:px-6">
                                    <div class="sm:col-span-1">

                                        <div class="relative mx-auto w-full rounded-lg shadow-lg ">

                                            <div class="container">
                                                {!! $image_list !!}

                                                <a class="prev" onclick="plusSlides(-1)">❮</a>
                                                <a class="next right-0" onclick="plusSlides(1)">❯</a>



                                            </div>

                                        </div>
                                        <div class="owl-slider mt-8 mb-4">
                                            <div id="carousel-achievements" class="owl-carousel">
                                            {!! $image_slider_list !!}
                                            </div>
                                        </div>
                                        <div class="description-data">
                                        {!! $data->description !!}
                                        </div>   
                                        <p class="text-6xl mt-4 font-medium text-gray-700">
                                            <abutton class="text-red-500 open-preview"><i class="far fa-file-pdf"></i></button>
                                        </p>
                                        <div class="bg-white">

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </section>


                    </div>

                    <section aria-labelledby="timeline-title" class="lg:col-start-3 lg:col-span-1">
                        <div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:px-6">
                            <!-- <h2 id="timeline-title" class="text-lg font-medium text-gray-900">Timeline</h2> -->

                            <!-- Activity Feed -->
                            <div class="mt-6 mb-8 flow-root">
                                <ul class="-mb-8">
                                    @foreach ($category_obj->activeCategories() as $category)
                                        <li>
                                            <a href="{{ route('product', [$category->slug]) }}"
                                                class="flex mb-4 cursor-pointer ">
                                                <span>
                                                    <i class="fas fa-check text-red-600"></i>
                                                </span>
                                                <span
                                                    class="text-gray-900 hover:text-red-600 font-bold ml-4">{{ $category->category_name }}</span>
                                            </a>
                                        </li>
                                    @endforeach
                                    <li>
                                        <ul
                                            class="mt-4 space-y-12  sm:grid sm:grid-cols-3 sm:gap-x-6 sm:gap-y-12 sm:space-y-0 lg:grid-cols-3 lg:gap-x-8">

                                            <li>
                                                <div class="space-y-4">
                                                    <div class="aspect-w-3 aspect-h-2">
                                                        <img class="object-cover shadow-lg rounded-lg"
                                                            src="{{ asset('assets/image/ISO_9001.png') }}" class="w-32 m-auto"
                                                            alt="">
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="space-y-4">
                                                    <div class="aspect-w-3 aspect-h-2">
                                                        <img class="object-cover shadow-lg rounded-lg"
                                                            src="{{ asset('assets/image/ISO_14001.png') }}" class="w-32 m-auto"
                                                            alt="">
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="space-y-4">
                                                    <div class="aspect-w-3 aspect-h-2">
                                                        <img class="object-cover shadow-lg rounded-lg"
                                                            src="{{ asset('assets/image/ISO_45001.png') }}" class="w-32 m-auto"
                                                            alt="">
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>

                                </ul>
                            </div>

                        </div>
                        <div class="bg-white mt-4 px-4 py-5 shadow sm:rounded-lg sm:px-6">
                            <!-- <h2 id="timeline-title" class="text-lg font-medium text-gray-900">Timeline</h2> -->

                            <!-- Activity Feed -->
                            <div class="mt-6 mb-8 flow-root text-black">
                                <p>
                                    RedX has two state-of-the-art fully equipped laboratories one located in Hafeera another in
                                    Hidd.
                                </p>
                                <p>
                                    Our laboratories are committed to conduct tests and researches about building materials,
                                    using the best valid practices to issue our customers quality products, in order to achieve
                                    the highest standards of credibility for the customers and consultants... <a href="about"
                                        class="text-red-600">Read more</a>
                                </p>
                            </div>

                        </div>
                    </section>
                </div>
            </main>
        </div>



        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="fixed z-10 inset-0 overflow-y-auto hidden preview-modal hidden cancel-preview" id="preview-image">
            <div class="flex items-end justify-center min-h-screen  text-center  sm:p-0">

                <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                    <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                </div>

                <!-- This element is to trick the browser into centering the modal contents. -->
                <span class=" sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

                <div class="inline-block align-bottom bg-white rounded-lg  text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6"
                    role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                    <div>

                        <div class="text-center">
                            <iframe class="h-screen w-full" src="{{ asset('documents/ISO_2020-QUALITY_POLICIES.pdf') }}"
                                frameborder="0"></iframe>
                            <!-- <div id="certifiate-slide" class="owl-carousel owl-theme">
        
                    <div class="item"></div>
                    <div class="item"><iframe src="{{ asset('documents/ISO.pdf') }}" frameborder="0"></iframe></div>

                </div> -->
                        </div>
                    </div>
                    <!-- <div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse">

                <button type="button" class="cancel-preview mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:w-auto sm:text-sm">
                Cancel
                </button>
            </div> -->

                </div>
            </div>
        </div>
    @endif
@stop
@section('scripts')
    <script>
        $(document).on('click', ".open-preview", function(e) {
            $("#preview-image").removeClass('hidden')
        })
        $(document).on('click', ".cancel-preview", function(e) {
            $('.preview-modal').addClass('hidden')
        })

    </script>


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
            var dots = document.getElementsByClassName("owl-carousal-img");
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
            autoplay: true,
            lazyLoad: true,
            rewind: true,
            margin: 20,
            navText: [
                "<span class='carousel-nav-left top-10 lg:top-14 absolute text-lg'><i class='fa fa-chevron-left'></i></span>",
                "<span class='carousel-nav-right top-10 lg:top-14 text-lg right-0 absolute'><i class='fa fa-chevron-right'></i></span>"
            ],
            responsiveClass: true,
            autoHeight: true,
            autoplayTimeout: 7000,
            smartSpeed: 800,

            nav: true,
            responsive: {
                0: {
                    items: 2
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

        $(document).ready(function() {

            $("#certifiate-slide").owlCarousel({

                navigation: true, // Show next and prev buttons

                slideSpeed: 300,
                paginationSpeed: 400,
                navText: [
                    "<span class='carousel-nav-left top-10 lg:top-14 absolute text-lg'><i class='fa fa-chevron-left'></i></span>",
                    "<span class='carousel-nav-right top-10 lg:top-14 text-lg right-0 absolute'><i class='fa fa-chevron-right'></i></span>"
                ],
                items: 1,
                itemsDesktop: false,
                itemsDesktopSmall: false,
                itemsTablet: false,
                itemsMobile: false

            });

        });

    </script>
@endsection
