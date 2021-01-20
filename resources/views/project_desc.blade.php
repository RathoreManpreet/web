@extends('layout')
@section('title', 'Project Description')
@section('styles')
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="./style.css">
    <style>
        @media (max-width:1024px) {

            .prev,
            .next {

                top: 40%;
            }
        }

    </style>
@stop
@section('content')
    <div class="relative bg-gray-50 h-72" style="    background-image: url({{ asset('assets/banner.jpg') }});background-repeat: no-repeat;
            background-size: cover;">
        <main class="relative h-full mx-auto max-w-7xl px-4 flex items-center justify-center">
            <div class="text-center">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-7xl ">
                    <span class="block   text-white">{{ substr($project->project_name, 0, 6) }}<span
                            class=" text-red-600">{{ substr($project->project_name, 6) }}</span> </span>
                </h1>

            </div>
        </main>

    </div>
    </div>
    <!--end banner-->

    <div class="min-h-screen bg-gray-100 ">


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
                            <a href="/projects"
                                class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Projects</a>
                        </div>
                    </li>
                    <li class="flex">
                        <div class="flex items-center">
                            <svg class="flex-shrink-0 w-6 h-full text-gray-200" viewBox="0 0 24 44"
                                preserveAspectRatio="none" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                aria-hidden="true">
                                <path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z" />
                            </svg>
                            <a href="" aria-current="page"
                                class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">{{ $project->project_name }}</a>
                        </div>
                    </li>
                </ol>
            </nav>

<div class="bg-white overflow-hidden mt-6">
  <div class="relative max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
    <div class="hidden lg:block bg-gray-50 absolute top-0 bottom-0 left-3/4 w-screen"></div>
    <div class="mx-auto text-base max-w-prose lg:max-w-none">
      <h3 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">{{$project->project_name}}</h3>
    </div>
    <div class="mt-8 lg:grid lg:grid-cols-2 lg:gap-8">
      <div class="relative lg:row-start-1 lg:col-start-2">
        <svg class="hidden lg:block absolute top-0 right-0 -mt-20 -mr-20" width="404" height="384" fill="none" viewBox="0 0 404 384" aria-hidden="true">
          <defs>
            <pattern id="de316486-4a29-4312-bdfc-fbce2132a2c1" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
              <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
            </pattern>
          </defs>
          <rect width="404" height="384" fill="url(#de316486-4a29-4312-bdfc-fbce2132a2c1)" />
        </svg>
        <div class="relative text-base mx-auto max-w-prose lg:max-w-none">
          <figure>
            <div class="aspect-w-12 aspect-h-7 lg:aspect-none">
                            <div class="relative mx-auto w-full rounded-lg sm:px-20">
                                        <?php
                                        $slider = '';
                                        $slider_list = '';
                                        $count = 1;
                                        if (count($project->projectImages) > 0) {
                                        foreach ($project->projectImages as $image) {
                                        $slider .=
                                        '<div class="mySlides">
                                            <img src="/' .
                                      $image->image .
                                      '" style="width:100%">
                                        </div>';
                                        $slider_list .=
                                        '<div class="item">
                                            <img class="owl-carousal-img cursor-pointer shadow-lg" src="/' .
                                      $image->image .
                                      '" onclick="currentSlide(' .
                                      $count++ .
                                      ')" alt="The Woods">
                                        </div>';
                                        } ?>
                                        <div class="container">
                                            <?= $slider ?>  
                              
                              <a class="prev" onclick="plusSlides(-1)">❮</a>
                              <a class="next right-0 sm:right-20" onclick="plusSlides(1)">❯</a>

                            

                          </div>

                          <div class="owl-slider mt-8 mb-4">
                            <div id="carousel-achievements" class="owl-carousel">
                              <?= $slider_list ?>
                            </div>
                          </div>
                          <?php
                          }
                          ?>
                      
            </div>
           
          </figure>
        </div>
      </div>
      <div class="mt-8 lg:mt-0">
      <div class="text-base max-w-prose mx-auto lg:max-w-none">
          <ul class="mb-4">
            <li class="text-lg"><span class="text-red-600">Project Name : </span><span class="text-black">{{$project->project_name}}</span></li>
            <li class="text-lg"><span class="text-red-600">Location : </span><span class="text-black">{{$project->location}}</span></li>
            <li class="text-lg"><span class="text-red-600">Material : </span><span class="text-black">{{$project->materials}}</span></li>
          </ul>
        </div>
        <div class="text-base max-w-prose mx-auto lg:max-w-none description-data">
          {!! $project->project_desc !!}
        </div>
        
      </div>
    </div>
    @if ($project->projects != 'null')
<div>
  <h2 class="text-gray-500 text-xl font-medium uppercase tracking-wide text-gray-600 font-bold">Related Projects</h2>
  <ul class="mt-3 grid grid-cols-1 gap-5 sm:gap-6 sm:grid-cols-2 lg:grid-cols-4">
    @foreach ($project->relatedProjects($project->projects) as $project)
      <li class="col-span-1 flex shadow-sm hover:shadow-lg rounded-md">
        <div class="flex-shrink-0 flex items-center justify-center w-16 bg-pink-600 text-white text-sm font-medium rounded-l-md" style="background-image:url({{asset($project->thumbnail)}}); background-size: cover;">
          
        </div>
        <div class="flex-1 flex items-center justify-between border-t border-r border-b border-gray-200 bg-white rounded-r-md truncate">
          <div class="flex-1 px-4 py-4 text-sm truncate">
            <a href="{{ route('project', [$project->slug]) }}" class="text-gray-800 font-medium text-xl hover:text-blue-800">{{$project->project_name}}</a>
          </div>
       
        </div>
      </li>
    @endforeach

  </ul>
</div>
@endif
  </div>
</div>



            <!-- <div
                class="mt-8 max-w-3xl mx-auto grid grid-cols-1 gap-6 lg:px-20 lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-1">
                <div class="space-y-6 lg:col-start-1 lg:col-span-2">
                   
                    <section aria-labelledby="applicant-information-title">
                        <div class="bg-white shadow sm:rounded-lg">
                            <div class="px-4 py-8 sm:px-6">
                                <h2 id="applicant-information-title"
                                    class="text-3xl text-center leading-6 font-bold text-red-600">
                                    {{ $project->project_name }}
                                </h2>

                            </div>
                            <div class="border-t border-gray-200 px-4 py-5">
                                <div class="sm:col-span-1">

                                    <div class="relative mx-auto w-full rounded-lg sm:px-20">
                                        <?php
                                      //   $slider = '';
                                      //   $slider_list = '';
                                      //   $count = 1;
                                      //   if (count($project->projectImages) > 0) {
                                      //   foreach ($project->projectImages as $image) {
                                      //   $slider .=
                                      //   '<div class="mySlides">
                                      //       <img src="/' .
                                      // $image->image .
                                      // '" style="width:100%">
                                      //   </div>';
                                      //   $slider_list .=
                                      //   '<div class="item">
                                      //       <img class="owl-carousal-img cursor-pointer shadow-lg" src="/' .
                                      // $image->image .
                                      // '" onclick="currentSlide(' .
                                      // $count++ .
                                      // ')" alt="The Woods">
                                      //   </div>';
                                        //}
                                         ?>
                                        <div class="container">
                                         
                              
                              <a class="prev" onclick="plusSlides(-1)">❮</a>
                              <a class="next right-0 sm:right-20" onclick="plusSlides(1)">❯</a>

                            

                          </div>

                          <div class="owl-slider mt-8 mb-4">
                            <div id="carousel-achievements" class="owl-carousel">
                     
                            </div>
                          </div>
                         
                      
                      </div>
                      
                        <p class="text-4sm font-medium text-gray-500 p-4 description-data">
                        {!!  $project->project_desc !!}
                      
                        </p>
                        @if ($project->projects != 'null')

                          <div class="mt-12 max-w-lg mx-auto grid gap-5 lg:grid-cols-4 lg:max-w-none">
                              @foreach ($project->relatedProjects($project->projects) as $project)
                                <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                                      <div class="flex-shrink-0">
                                        <img class="h-24 w-full object-cover" src="{{ asset($project->thumbnail) }}" alt="">
                                      </div>
                                      <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                                        <div class="flex-1">
                                            <a href="{{ route('project', [$project->slug]) }}" class="block mt-2">
                                            <p class="text-xl font-semibold text-gray-900">
                                              {{ $project->project_name }}
                                            </p>
                                        
                                            </a>
                                        </div>
                                      
                                      </div>
                                </div>
                              @endforeach
                          </div>
                        @endif
                     
                    </div>
                      
                  </div>
                </div>
               
              </div>
            </section>

            
          </div>
          
        </div>
      </main>
    </div> -->
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
      var dots = document.getElementsByClassName("owl-carousal-img");
      var captionText = document.getElementById("caption");
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
      captionText.innerHTML = dots[slideIndex-1].alt;
    }
    </script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js'></script>
    <script>

    jQuery("#carousel-achievements").owlCarousel({
        // autoplay: true,
      lazyLoad: true,
      rewind: true,
      margin: 20,
      navText: ["<span class='carousel-nav-left top-14 absolute text-lg'><i class='fa fa-chevron-left'></i></span>","<span class='carousel-nav-right top-14 text-lg right-0 absolute'><i class='fa fa-chevron-right'></i></span>"],
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


    </script>
@endsection
