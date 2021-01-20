@extends('layout')
@section('title', 'Redx Specific')
@section('styles')

@stop
@section('content')
    <!--banner-->

    <div class="relative bg-gray-50 h-72" style="    background-image: url({{ asset('assets/banner.jpg') }});background-repeat: no-repeat;
            background-size: cover;">

        <main class="relative h-full mx-auto max-w-7xl px-4 flex items-center justify-center ">
            <div class="text-center">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-7xl ">
                    <span class="block   text-white">Redx <span class=" text-red-600">Specific</span> </span>
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
                            <a href="redx-specific" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700"> {{$redx_specific->title}}</a>
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
                                    {{$redx_specific->title}}
                                </h2>

                            </div>
                            <div class="border-t border-gray-200 px-4 py-5 sm:px-6">
                                <div class="sm:col-span-1">
                                    {!! $redx_specific->description !!}
                                    @if(!empty($redx_specific->pdf))
                                        <p class="text-4sm mt-4 font-medium text-gray-500">
                                            <a href="{{ asset($redx_specific->pdf) }}" target="_new"><img
                                                    src="{{ asset('assets/image/Brochure-Download.png') }}" alt=""></a>
                                        </p>
                                    @endif

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
                                @foreach($redx_specifics as $data)
                                    <li class="flex cursor-pointer mb-4 ">
                                        <span>
                                            <i class="fas fa-check text-red-600"></i>
                                        </span>
                                        <span class="text-gray-900 hover:text-red-600 font-bold ml-4"><a
                                                href="{{route('redx-specific',[$data->slug])}}">{{$data->title}}</a></span>
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
                                @if(!empty($redx_specific->certificate))
                                    <li>
                                        <img src="{{$redx_specific->certificate}}"
                                            class="w-1/4 open-preview mt-4" data-target="#preview-image" alt="">
                                    </li>
                                @endif

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
    <div class="fixed z-10 inset-0 overflow-y-auto hidden preview-modal " id="preview-image">
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
                        <img src="" id="preview" alt="">
                    </div>
                </div>
                <div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse">

                    <button type="button"
                        class="cancel-preview mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:w-auto sm:text-sm">
                        Cancel
                    </button>
                </div>

            </div>
        </div>
    </div>
@stop
@section('scripts')
    <script>
        $(document).on('click', ".open-preview", function(e) {
            $($(this).attr('data-target')).removeClass('hidden')
            var img = $(this).attr('src')

            $('#preview').attr('src', img)
        })
        $(document).on('click', ".cancel-preview", function(e) {
            $('.preview-modal').addClass('hidden')
        })

    </script>
@endsection
