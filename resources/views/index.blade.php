@extends('layout')
@section('title', 'Redx')
@section('styles')
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'><link rel="stylesheet" href="./style.css">
<style>

@media (max-width:767px) and (orientation : portrait) {
  
  #top-video-frame, #top-banner {
      min-height: 100% !important;
  }
 
}
@media  (min-width:768px) and (max-width:1024px) and (orientation : portrait) {
    #banner-content {
        top: 20rem;
    }

 
}
@media (max-width:767px) and (orientation : landscape) {
    #banner-content {
        top: 2rem;
    }

    #top-video-frame, #top-banner {
      min-height: 100vh;
  }
  
}





.modal {
      transition: opacity 0.25s ease;
    }
    body.modal-active {
      overflow-x: hidden;
      overflow-y: visible !important;
    }

 
</style>
@stop
@section('content')
<!--banner-->

<div class="relative bg-gray-40 lg:h-screen w-full md:h-screen sm:h-screen" id="top-banner" style="    background-image: url({{asset('assets/banner.jpg')}});background-repeat: no-repeat;
        background-size: cover;">
                    <iframe class="lg:h-screen w-full md:h-screen sm:h-screen" id="top-video-frame " width="448" height="252" src="https://www.youtube.com/embed/9ahegItyklc?autoplay=1&mute=1&loop=1&rel=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" ></iframe>
                        
        </div>
    </div>


<!-- <div class="relative bg-gray-40 min-h-screen" style="    background-image: url({{asset('assets/banner.jpg')}});background-repeat: no-repeat;
        background-size: cover;">
    
        <main class="relative h-full mx-auto max-w-7xl inset-y-28 px-4 sm:mt-30 lg:inset-y-48"  id="banner-content">
            <div class="text-center">
                <h1 class="text-2xl tracking-tight font-extrabold text-gray-900 sm:text-3xl md:text-5xl ">
                    <span class="block   text-white">BAHRAIN <span class=" text-red-600">READY MIX </span> CONCRETE</span>
               
                </h1>
                <p class="mt-3 max-w-md mx-auto text-base  text-white sm:text-lg md:mt-5 md:text-xl md:max-w-6xl ">
                    The RedX Concrete Blocks are core-filled with quality concrete and reinforced, they are suitable for erecting loadbearing walls. RedX Masonry Blocks division operates a high capacity, automated and computerised plant prevailing from MASA, Germany. This cutting-edge technology shoved RedX into one of the Bahrain’s largest producers of Concrete Blocks with a production capacity of 80,000 blocks per day.
                </p>
                <p><i class="far fa-play-circle text-5xl text-red-600 modal-open cursor-pointer"></i></p>
                
            </div>
        </main>
        
        </div>
    </div> -->



<!--who we are -->
<div class="relative bg-white overflow-hidden">

    <div class="relative pb-16 sm:pb-24 lg:pb-32">
        <main class=" mx-auto max-w-7xl px-4 sm:mt-24 sm:px-6 ">
            <div class="lg:grid lg:grid-cols-12 lg:gap-8">

                <div class="mt-12 relative sm:max-w-lg sm:mx-auto lg:mt-0 lg:max-w-none lg:mx-0 lg:col-span-6 lg:flex lg:items-center">

                    <div class="relative mx-auto w-full rounded-lg shadow-lg lg:max-w-md">

                        <img class="w-full" src="{{asset('assets/Home/1367079582ready-mix-3.jpg')}}" alt="">

                    </div>
                </div>
                <div class="sm:text-center md:max-w-2xl md:mx-auto lg:col-span-6 lg:text-left " style="font-family: 'font-sans'">
                    <h1>
                        <span class="mt-1 block text-2xl tracking-tight font-extrabold sm:text-5xl xl:text-4xl">
                            <span class="block text-gray-600">WHO WE ARE ?</span>
                        </span>
                    </h1>
                    <p class="mt-3 text-base text-gray-700 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
                        Today RedX is one of the first choices when it comes to Ready Mix Concrete in Bahrain. RedX operates three contemporary twin shaft Readymix plants ranging from 120 CuM/hr to 140 CuM/hr capacities. These state-of-the-art machines from Germany designed to supply quality product as per the demands.This plants are positioned in a very strategic locations, one in Hidd another in Alba, to serve every corner of the Kingdom on ease.
                    </p>
                    {{-- <p class="mt-3 text-base text-gray-700 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
                        Headquartered in the Kingdom of Bahrain RedX has approximately 800 employees and three large scale manufacturing facilities within the Kingdom.  It is having large distribution fleet throughout the Kingdom and Eastern Province of Saudi Arabia.
                    </p> --}}
                    <p class="mt-6"><a href="/about" class="text-red-600 text-lg visited:text-purple-600 ...">Read More <i class="fas fa-arrow-right ml-2"></i></a></p>

                </div>
            </div>
        </main>

        <main class=" mx-auto max-w-7xl px-4 sm:mt-24 sm:px-6 ">
        <h1>
            <span class="mt-1 block text-4xl tracking-tight font-extrabold sm:text-3xl xl:text-3xl flex">
                <span class="block text-gray-600 w-80">OUR PRODUCT</span><span class="border-t-4 border-red-600 w-full relative top-4">a</span>
            </span>
        </h1>
        <div class="lg:grid lg:grid-cols-12 lg:gap-8 py-8">

            <div class="mt-12 relative sm:max-w-lg sm:mx-auto lg:mt-0 lg:max-w-none lg:mx-0 lg:col-span-6 lg:flex lg:items-center ">

                <div class="relative mx-auto w-full rounded-lg shadow-lg lg:max-w-md ">

                    <img class="w-full" src="{{asset('assets/Home/1465215783DragonMall.jpg')}}" alt="">

                </div>
            </div>
              <div class="sm:text-center md:max-w-2xl md:mx-auto lg:col-span-6 lg:text-left " style="font-family: 'font-sans'">

                <p class="mt-3 text-base text-gray-700 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
                    Our showroom is opened in Dragon Mall..!! On the decor side, we couldn’t be more honored and excited to have a special range of our products now available from our Designer Paver label. This showroom is one of the most beautiful that has now started stocking a wide range of premium Artificial Stone #products which work alongside and compliment their own sensational creations. So now you have no excuse not to pop in and see it all for yourself.
                </p>
                <p class="mt-6"><a href="products" class="text-red-600 text-lg visited:text-purple-600 ...">Read More <i class="fas fa-arrow-right ml-2"></i></a></p>

            </div>
        </div>
        </main>

    </div>
</div>

<!--end who we are-->


<!--sectors-->
<div class="relative bg-white overflow-hidden bg-gray-900">

    <div class="relative pb-16 sm:pb-24 lg:pb-32">
        <main class=" mx-auto max-w-7xl px-4  pt-6 lg:pt-4 sm:mt-24 sm:px-6 ">
            <div class="lg:grid lg:grid-cols-12 lg:gap-8">


                <div class="sm:text-center md:max-w-2xl md:mx-auto lg:col-span-6 lg:text-left " style="font-family: 'font-sans'">
                    <h1>
                        <span class="mt-1 block text-4xl tracking-tight font-bold sm:text-5xl xl:text-6xl">
                            <span class="block text-white"><span class=" text-red-600">We</span> Supply in the Various <span class=" text-red-600">Sectors</span></span>
                        </span>
                    </h1>
                    {{-- <p class="mt-3 text-base text-gray-200 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dignissim laoreet turpis sed hendrerit. Sed nec nulla at eros finibus porta non nec nulla. Praesent congue auctor quam. Nullam finibus purus at quam varius tempus. Ut aliquam ut nisl nec aliquet. Vivamus vel lacus porta, tristique magna quis, vulputate orci. Ut gravida nisi a neque lacinia, vulputate aliquam eros dapibus. Vivamus dapibus vulputate sapien, quis ornare est mollis quis. Integer sed augue sem.
                    </p> --}}
                    <p class="mt-6">
                    <a href="contact" type="button" class="inline-flex items-center px-3 py-2 border border-red-400 shadow-sm text-lg leading-4 font-medium rounded-md text-white  hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                        <!-- Heroicon name: mail -->
                        <i class="fas fa-phone-alt mr-2"></i>
                        Contact Us
                    </a>
                    </p>

                </div>
                <div class="mt-12 relative sm:max-w-lg sm:mx-auto lg:mt-0 lg:max-w-none lg:mx-0 lg:col-span-6 lg:flex lg:items-center">

                    <div class="relative mx-auto w-full rounded-lg  lg:max-w-md">

                        <div class="owl-slider">
                            <div id="carousel" class="owl-carousel">
                                <div class="item">
                                    <img class="demo cursor-pointer shadow-lg" src={{asset('assets/Home/1367079582ready-mix-3.jpg')}} style="width:100%" onclick="currentSlide(1)" alt="The Woods">
                                </div>
                                <div class="item">
                                    <img class="demo cursor-pointer shadow-lg" src={{asset('assets/Home/1465215783DragonMall.jpg')}} style="width:100%" onclick="currentSlide(2)" alt="The Woods">
                                </div>
                                <div class="item">
                                <img class="demo cursor-pointer shadow-lg" src={{asset('assets/Home/1523190182pump.jpg')}} style="width:100%" onclick="currentSlide(3)" alt="The Woods">
                                </div>
                                <div class="item">
                                    <img class="demo cursor-pointer shadow-lg" src={{asset('assets/Home/1523194979Sand1600X900.jpg')}} style="width:100%" onclick="currentSlide(4)" alt="The Woods">
                                </div>
                                <div class="item">
                                    <img class="demo cursor-pointer shadow-lg" src={{asset('assets/Home/1524133105DSC_01041600X900.jpg')}} style="width:100%" onclick="currentSlide(5)" alt="The Woods">
                                </div>
                                <div class="item">
                                    <img class="demo cursor-pointer shadow-lg" src={{asset('assets/Home/1524143113KerbEdit2.jpg')}} style="width:100%" onclick="currentSlide(6)" alt="The Woods">
                                </div>
                                <div class="item">
                                    <img class="demo cursor-pointer shadow-lg" src={{asset('assets/Home/1535015581block.jpg')}} style="width:100%" onclick="currentSlide(7)" alt="The Woods">
                                </div>
                                <div class="item">
                                    <img class="demo cursor-pointer shadow-lg" src={{asset('assets/Home/1585822597IMG_8816.jpg')}} style="width:100%" onclick="currentSlide(8)" alt="The Woods">
                                </div>
                                <div class="item">
                                    <img class="demo cursor-pointer shadow-lg" src={{asset('assets/Home/15231942411600X900.jpg')}} style="width:100%" onclick="currentSlide(92)" alt="The Woods">
                                </div>
                                <div class="item">
                                    <img class="demo cursor-pointer shadow-lg" src={{asset('assets/Home/15241404951360835437crusther-plant.jpg')}} style="width:100%" onclick="currentSlide(10)" alt="The Woods">
                                </div>

                            </div>
                        </div>

                      

                    </div>
                </div>
            </div>
        </main>


    </div>
</div>
<!--sectors-->


<div class="relative bg-white overflow-hidden">

<iframe style="width:100%" class="w-full h-96 md:h-screen" src="https://www.youtube.com/embed/9ahegItyklc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" ></iframe>
</div>

<!-- 
<div class="relative bg-white overflow-hidden">

    <div class="relative pb-16 sm:pb-2 lg:pb-8 my-12">
        <main class=" mx-auto max-w-7xl px-4 sm:mt-24 sm:px-6">
            <iframe style="width:100%" class="w-full h-96 md:h-screen" src="https://www.youtube.com/embed/9ahegItyklc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" ></iframe>
        </main>
    </div>
</div> -->
<!--why choose us-->
<div class="relative bg-white overflow-hidden">

    <div class="relative pb-16  sm:pb-16 md:pb-2 lg:pb-32">
        <main class=" mx-auto max-w-7xl px-4 pt-8 lg:pt-4 sm:mt-2 sm:px-6 ">
        <h1 class="text-center">
            <span class="mt-1 block text-4xl tracking-tight font-bold sm:text-5xl xl:text-5xl mb-6">
                <span class="block text-black">WHY SHOULD YOU CHOOSE US?</span>
            </span>
        </h1>
        <div class="lg:grid lg:grid-cols-12 lg:gap-8">

            <div class=" relative sm:max-w-lg sm:mx-auto lg:mt-0 lg:max-w-none lg:mx-0 lg:col-span-6 lg:flex lg:items-center">

                <div class="relative mx-auto w-full rounded-lg shadow-lg lg:max-w-md">

                    <img class="w-full" src={{asset('assets/Home/1523190182pump.jpg')}} alt="">

                </div>
            </div>
            <div class="sm:text-center md:max-w-2xl md:mx-auto lg:col-span-6 lg:text-left " style="font-family: 'font-sans'">

                <p class="mt-3 text-base text-black sm:text-xl lg:text-lg xl:text-xl">
                    <div class="md:grid md:grid-cols-2 md:gap-8 mt-10">
                        <div>

                            <ul class="mt-2 lg:mt-0 space-y-4">
                            <li>
                                <a href="#" class="text-base text-black">
                                <i class="fas fa-check text-red-600"></i>  Speedy Service
                                </a>
                            </li>

                            <li>
                                <a href="#" class="text-base text-black">
                                <i class="fas fa-check text-red-600"></i>  Quality Assurance
                                </a>
                            </li>

                            <li>
                                <a href="#" class="text-base text-black">
                                <i class="fas fa-check text-red-600"></i>  Loyality Scheme
                                </a>
                            </li>

                            <li>
                                <a href="#" class="text-base text-black">
                                <i class="fas fa-check text-red-600"></i>  Professionalism
                                </a>
                            </li>
                            </ul>
                        </div>
                        <div class=" md:mt-0">

                            <ul class="mt-2 lg:mt-0 space-y-4">
                            {{-- <li>
                                <a href="#" class="text-base text-black">
                                <i class="fas fa-check text-red-600"></i>  Mobile App
                                </a>
                            </li>

                            <li>
                                <a href="#" class="text-base text-black">
                                <i class="fas fa-check text-red-600"></i>  Flexible Opening Hours
                                </a>
                            </li> --}}

                            <li>
                                <a href="#" class="text-base text-black">
                                <i class="fas fa-check text-red-600"></i>  The Best Materials
                                </a>
                            </li>

                            <li>
                                <a href="#" class="text-base text-black">
                                <i class="fas fa-check text-red-600"></i>  Available All Sectors
                                </a>
                            </li>
                            </ul>
                        </div>
                    </div>
                </p>
                {{-- <p class="mt-6"><a href="#" class="text-red-600 text-lg visited:text-purple-600 ...">Read More <i class="fas fa-arrow-right ml-2"></i></a></p> --}}

            </div>
        </div>
        </main>


    </div>
</div>
<!--end why choose us-->

<!--contact-->
{{-- <div class="relative bg-white overflow-hidden bg-gray-800">

    <div class="relative pb-16 sm:pb-24 lg:pb-32">
        <main class=" mx-auto max-w-7xl px-4 pt-10 sm:mt-8 sm:px-6 ">
        <div class="lg:grid lg:grid-cols-12 lg:gap-8">


            <div class="sm:text-center md:max-w-2xl md:mx-auto lg:col-span-6 lg:text-left " style="font-family: 'font-sans'">
                <h1>
                    <span class="mt-1 block text-4xl tracking-tight font-bold sm:text-5xl xl:text-5xl">
                        <span class="block text-white">Contact Us to Get a Satisfying Service </span>
                    </span>
                </h1>
                <p class="mt-3 text-base text-gray-200 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dignissim laoreet turpis sed hendrerit. Sed nec nulla at eros finibus porta non nec nulla. Praesent congue auctor quam. Nullam finibus purus at quam varius tempus. Ut aliquam ut nisl nec aliquet. Vivamus vel lacus porta, tristique magna quis, vulputate orci. Ut gravida nisi a neque lacinia, vulputate aliquam eros dapibus. Vivamus dapibus vulputate sapien, quis ornare est mollis quis. Integer sed augue sem.
                </p>
                <p class="mt-6">
                <a href="contact" type="button" class="inline-flex items-center px-3 py-2 border border-red-400 shadow-sm text-lg leading-4 font-medium rounded-md text-white  hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                    <!-- Heroicon name: mail -->
                    <i class="fas fa-phone-alt mr-2"></i>
                    Contact Us
                </a>
                </p>

            </div>
            <div class="mt-12 relative sm:max-w-lg sm:mx-auto lg:mt-0 lg:max-w-none lg:mx-0 lg:col-span-6 lg:flex lg:items-center">

                <div class="relative mx-auto w-full rounded-lg shadow-lg lg:max-w-md">


                    <img class="w-full" src="https://images.unsplash.com/photo-1562326370-4897c9e5ff0a?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=601&q=80" alt="">

                </div>
            </div>
        </div>
        </main>


    </div>
</div> --}}
<!--end contact-->

<!--contact form-->
<div class="relative bg-white">

  <div class="relative ">



    <div class="bg-white py-16 px-4 sm:px-6 lg:col-span-3 lg:py-24 lg:px-8 xl:pl-12">
        <h1 class="text-center  mb-2">
            <span class="mt-1 block text-4xl tracking-tight font-bold sm:text-5xl xl:text-5xl">
                <span class="block text-black">Let's <span class=" text-red-600">Talk</span> </span>
            </span>
        </h1>
      <div class="max-w-lg mx-auto lg:w-11/12">
        <form action="#" method="POST" class="grid grid-cols-1 gap-y-6">
          <div class="shadow-lg">
            <label for="full_name" class="sr-only">Full name</label>
            <input type="text" name="full_name" id="full_name" autocomplete="name" class="block  w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 border-2 border-opacity-50 rounded-md" placeholder="Full name">
          </div>
          <div class="shadow-lg">
            <label for="email" class="sr-only">Email</label>
            <input id="email" name="email" type="email" autocomplete="email" class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 border-2 border-opacity-50 rounded-md" placeholder="Email">
          </div>
          <div class="shadow-lg">
            <label for="phone" class="sr-only">Phone</label>
            <input id="phone" name="phone" type="text" autocomplete="phone" class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 border-2 border-opacity-50 rounded-md" placeholder="Phone">
          </div>

          <div class="shadow-lg">
            <label for="message" class="sr-only">Message</label>
            <textarea id="message" name="message" rows="4" class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 border-2 border-opacity-50 rounded-md" placeholder="Message"></textarea>
          </div>
          <div class="text-center">
            <button type="submit" class="inline-flex justify-center py-3 px-6 border border-transparent shadow-sm text-base font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              Send
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--end contact form-->


<!--Modal-->

<!-- This example requires Tailwind CSS v2.0+ -->
<div class="fixed z-10 inset-0 overflow-y-auto hidden preview-modal">
  <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
    <!--
      Background overlay, show/hide based on modal state.

      Entering: "ease-out duration-300"
        From: "opacity-0"
        To: "opacity-100"
      Leaving: "ease-in duration-200"
        From: "opacity-100"
        To: "opacity-0"
    -->
    <div class="fixed inset-0 transition-opacity" aria-hidden="true">
      <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>

    <!-- This element is to trick the browser into centering the modal contents. -->
    <span class=" sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
    <!--
      Modal panel, show/hide based on modal state.

      Entering: "ease-out duration-300"
        From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        To: "opacity-100 translate-y-0 sm:scale-100"
      Leaving: "ease-in duration-200"
        From: "opacity-100 translate-y-0 sm:scale-100"
        To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
    -->
    <div class=" text-right inline-block align-bottom rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-xl lg:max-w-4xl sm:w-full sm:p-6" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
      <div>
    <span class="close-model"><i class="fas fa-times text-lg"></i></span>
      
      
        <div class="mt-3 text-center sm:mt-5">
         
          <div class="mt-2">
            <p class="text-sm text-gray-500">
            <!-- <iframe style="width:100%" class="w-full h-48 md:h-screen yt_player_iframe" id="video-frame" src="https://www.youtube.com/embed/9ahegItyklc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" ></iframe> -->
            </p>
          </div>
        </div>
      </div>
   
    </div>
  </div>
</div>

@stop

@section('scripts')
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js'></script>
<script>

jQuery("#carousel").owlCarousel({
  lazyLoad: true,
  rewind: true,
  margin: 20,

  navText: ["<span class='carousel-nav-left top-2/4 absolute text-lg'><i class='fa fa-chevron-left'></i></span>","<span class='carousel-nav-right top-2/4 text-lg right-0 absolute'><i class='fa fa-chevron-right'></i></span>"],
  responsiveClass: true,
  autoHeight: true,
  autoplayTimeout: 7000,
  smartSpeed: 800,
  dots:true,
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

        $(document).on('click', ".modal-open", function(e) {
            $(".preview-modal").removeClass('hidden')
            $('#video-frame').attr("src","https://www.youtube.com/embed/9ahegItyklc");
        })
        $(document).on('click', ".close-model", function(e) {
            $('.preview-modal').addClass('hidden')
           
                // $('#video-frame').stopVideo();
                $('#video-frame').attr("src","");

        })
    
</script>
@endsection
