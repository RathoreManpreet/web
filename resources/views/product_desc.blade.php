@extends('layout')
@section('title', 'Product Description')
@section('styles')
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'><link rel="stylesheet" href="./style.css">

@stop
@section('content')
<!--banner-->

    <div class="relative bg-gray-50 h-72" style="    background-image: url({{asset('assets/banner.jpg')}});background-repeat: no-repeat;
        background-size: cover;">
    
        <main class="relative h-full mx-auto max-w-7xl inset-y-16 px-4 sm:mt-30 "  >
            <div class="text-center">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-7xl ">
                <span class="block   text-white">{{substr($product->product_name,0,6)}}<span class=" text-red-600">{{substr($product->product_name,6,-1)}}</span> </span>
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
                <svg class="flex-shrink-0 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                </svg>
                <span class="sr-only">Home</span>
                </a>
            </div>
            </li>
            <li class="flex">
            <div class="flex items-center">
                <svg class="flex-shrink-0 w-6 h-full text-gray-200" viewBox="0 0 24 44" preserveAspectRatio="none" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z" />
                </svg>
                <a href="/products" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Product</a>
            </div>
            </li>
            <li class="flex">
            <div class="flex items-center">
                <svg class="flex-shrink-0 w-6 h-full text-gray-200" viewBox="0 0 24 44" preserveAspectRatio="none" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z" />
                </svg>
                <a href="" aria-current="page" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">{{$product->product_name}}</a>
            </div>
            </li>
        </ol>
    </nav>

    <div class="mt-8 max-w-3xl mx-auto grid grid-cols-1 gap-6 sm:px-6 lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-3">
      <div class="space-y-6 lg:col-start-1 lg:col-span-2">
        <!-- Description list-->
        <section aria-labelledby="applicant-information-title">
          <div class="bg-white shadow sm:rounded-lg">
            <div class="px-4 py-8 sm:px-6">
              <h2 id="applicant-information-title" class="text-3xl text-center leading-6 font-bold text-red-600">
                {{$product->product_name}}
              </h2>
              
            </div>
            <div class="border-t border-gray-200 px-4 py-5 sm:px-6">
              <div class="sm:col-span-1">
                @if(count($product->productImages) > 0)
                  <div class="relative mx-auto w-full rounded-lg shadow-lg ">
                        
                        <div class="container">
                          <?php 
                            $slider = "";
                            $slider_list = "";
                            $count = 1;
                            foreach($product->productImages as $image) {
                              $slider .= '<div class="mySlides">
                                            <img src="/'.$image->image.'" style="width:100%">
                                        </div>';
                              $slider_list .= '<div class="item">
                                                <img class="owl-carousal-img cursor-pointer shadow-lg" src="/'.$image->image.'" onclick="currentSlide('.$count++.')" alt="The Woods">
                                            </div>';
                            }
                            echo $slider;
                          ?>
                              
                            
                            <a class="prev" onclick="plusSlides(-1)">❮</a>
                            <a class="next right-0" onclick="plusSlides(1)">❯</a>

                          

                        </div>
                    
                    </div>
                    <div class="owl-slider mt-8 mb-4">
                        <div id="carousel-achievements" class="owl-carousel">
                            <?=$slider_list?>
                        </div>
                    </div>
                  @endif
                    <p class="text-4sm description-data">
                      {!! $product->product_desc !!}
                    </p>
                  
                    <p class="text-4sm font-medium text-gray-500">
                      <a href="{{asset($product->document)}}" target="blank"><img src="{{asset('assets/image/Brochure-Download.png')}}" alt="Tuple"></a>
                    </p>
                  
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
            @foreach($category_obj->activeCategories() as $category)
                <li >
                  <a href="{{route('product',[$category->slug])}}" class="flex mb-4 cursor-pointer ">
                    <span>
                      <i class="fas fa-check text-red-600"></i>
                    </span>
                    <span class="text-gray-900 hover:text-red-600 font-bold ml-4">{{$category->category_name}}</span>
                  </a>
                </li>
              @endforeach
              <li>
                <ul class="mt-4 space-y-12  sm:grid sm:grid-cols-3 sm:gap-x-6 sm:gap-y-12 sm:space-y-0 lg:grid-cols-3 lg:gap-x-8">
                    
                    <li>
                        <div class="space-y-4">
                            <div class="aspect-w-3 aspect-h-2">
                                <img class="w-32 m-auto" src="{{asset('assets/image/ISO_9001.png')}}" alt="">
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="space-y-4">
                            <div class="aspect-w-3 aspect-h-2">
                                <img class="w-32 m-auto" src="{{asset('assets/image/ISO_14001.png')}}" alt="">
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="space-y-4">
                            <div class="aspect-w-3 aspect-h-2">
                                <img class="w-32 m-auto" src="{{asset('assets/image/ISO_45001.png')}}" alt="">
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
              RedX has two state-of-the-art fully equipped laboratories one located in Hafeera another in Hidd.
            </p>
            <p>
            Our laboratories are committed to conduct tests and researches about building materials, using the best valid practices to issue our customers quality products, in order to achieve the highest standards of credibility for the customers and consultants... <a href="about" class="text-red-600">Read more</a>
            </p>
          </div>
         
        </div>
      </section>
    </div>
  </main>
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
  navText: ["<span class='carousel-nav-left top-10 lg:top-14 absolute text-lg'><i class='fa fa-chevron-left'></i></span>","<span class='carousel-nav-right top-10 lg:top-14 text-lg right-0 absolute'><i class='fa fa-chevron-right'></i></span>"],
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
