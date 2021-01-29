@extends('layout')
@section('title', 'Participation')
@section('styles')

@stop
@section('content')
    <!--banner-->

    <div class="relative bg-gray-50 h-72" style="    background-image: url({{ asset('assets/banner.jpg') }});background-repeat: no-repeat;
            background-size: cover;">

        <main class="relative h-full mx-auto max-w-7xl px-4 flex items-center justify-center ">
            <div class="text-center">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-7xl ">
                    <span class="block   text-white"> Participation </span>
                </h1>


            </div>
        </main>

    </div>
    </div>
    <!--end banner-->

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
                            <a href="redx-specific" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700"> {{$event->event_name}}</a>
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
                                    class="text-3xl text-center leading-8 font-bold text-red-600">
                                    {{$event->event_name}}

                                </h2>

                            </div>
                            <div class="border-t border-gray-200 px-4 py-5 sm:px-6">
                                <div class="sm:col-span-1 description-data">
                                {!! $event->event_desc !!}
                                </div>
                                <?php 

                                $gallery_list = "";
                                $gallery_slider_list = "";
                                $count = 1;
                                foreach($event->eventImages as $data) {
                                    $gallery_list .= '<li class=" open-preview" onclick="currentSlide('.$count.')">
                                                        <div class="space-y-4">
                                                            <div class="aspect-w-3 aspect-h-2">
                                                                <img class="object-cover shadow-lg rounded-lg h-48"
                                                                    src="'.asset($data->image).'" alt="">
                                                            </div>
                                                        </div>
                                                    </li>';

                                    $gallery_slider_list .= '<div class="mySlides">
                                                                <img src="'.asset($data->image).'" class="h-96 w-full">
                                                            </div>';

                                    $count++;
                                }
                                ?>

                                <div class="bg-white">
                                <div class="mx-auto py-12 px-4 max-w-7xl sm:px-6 lg:px-8 lg:py-12">
                                    <div class="space-y-12">

                                        <ul
                                            class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 sm:space-y-0 lg:grid-cols-3 lg:gap-x-8">
                                        {!! $gallery_list !!}


                                        </ul>
                                    </div>
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
                                @foreach($events as $data)
                                <li>
                                        <a href="{{ route('participation', [$data->slug]) }}"
                                            class="flex mb-4 cursor-pointer ">
                                            <span>
                                                <i class="fas fa-check text-red-600"></i>
                                            </span>
                                            <span
                                                class="text-gray-900 hover:text-red-600 font-bold ml-4">{{ $data->event_name }}</span>
                                        </a>
                                    </li>
                                @endforeach
                            

                                <li>
                                    <ul
                                        class="mt-4 space-y-12  sm:grid sm:grid-cols-3 sm:gap-x-6 sm:gap-y-12 sm:space-y-0 lg:grid-cols-3 lg:gap-x-8">

                                        <li>
                                            <div class="space-y-4">
                                                <div class="aspect-w-3 aspect-h-2">
                                                    <img class="w-32 m-auto" src="{{ asset('assets/image/ISO_9001.png') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="space-y-4">
                                                <div class="aspect-w-3 aspect-h-2">
                                                    <img class="w-32 m-auto" src="{{ asset('assets/image/ISO_14001.png') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="space-y-4">
                                                <div class="aspect-w-3 aspect-h-2">
                                                    <img class="w-32 m-auto" src="{{ asset('assets/image/ISO_45001.png') }}"
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



@stop
@section('scripts')
 
@endsection
