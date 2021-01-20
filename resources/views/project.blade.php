@extends('layout')
@section('title', 'Project')
@section('styles')
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="./style.css">

    <style>
        #owl-demo .item img {
            display: block;
            width: 100%;
            height: auto;
        }

    </style>
@stop
@section('content')
    <!--banner-->


    <div class="relative bg-gray-50 h-72" style="    background-image: url({{ asset('assets/banner.jpg') }});background-repeat: no-repeat;
            background-size: cover;">

        <main class="relative h-full mx-auto max-w-7xl px-4 flex items-center justify-center ">
            <div class="text-center">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-7xl ">
                    <span class="block   text-white">Pro<span class=" text-red-600">jects</span> </span>
                </h1>


            </div>
        </main>

    </div>
    </div>
    <!--end banner-->

    <div class="relative bg-gray-50 pt-16 pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
        <div class="absolute inset-0">
            <div class="bg-white h-1/3 sm:h-2/3"></div>
        </div>
        <div class="relative max-w-7xl mx-auto">

            <div class="mt-12 max-w-lg mx-auto grid gap-5 lg:grid-cols-3 lg:max-w-none">
                @foreach ($projects as $project)
                    <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                        <div class="flex-shrink-0">
                            <img class="h-48 w-full object-cover" src="{{ asset($project['thumbnail']) }}" alt="">
                        </div>
                        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <a href="{{ route('project', $project['slug']) }}" class="block mt-2">
                                    <p class="text-xl font-semibold text-gray-900">
                                        {{ $project['project_name'] }}
                                    </p>
                                    <p class="mt-3 text-base text-gray-700">
                                        {{ strlen(strip_tags($project['project_desc'])) > 100 ? substr(strip_tags($project['project_desc']), 0, 100) . '...' : strip_tags($project['project_desc']) }}
                                    </p>
                                </a>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@stop
@section('scripts')



    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js'></script>
    <script>
        jQuery("#carousel-achievements").owlCarousel({
            // autoplay: true,
            lazyLoad: true,
            rewind: true,
            margin: 20,
            navText: [
                "<span class='carousel-nav-left top-1/2 absolute text-lg left-0'><i class='fa fa-chevron-left'></i></span>",
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
