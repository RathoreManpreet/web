@extends('layout')
@section('title', 'Redx Specific')
@section('styles')

@stop
@section('content')
<!--banner-->

    <div class="relative bg-gray-50 h-72" style="    background-image: url({{asset('assets/banner.jpg')}});background-repeat: no-repeat;
        background-size: cover;">

        <main class="relative h-full mx-auto max-w-7xl inset-y-16 px-4 sm:mt-30 "  >
        <div class="text-center">
            <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-7xl ">
            <span class="block   text-white">Redx <span class=" text-red-600">Specific</span> </span>
            </h1>
            <p class="mt-3 max-w-md mx-auto text-base  text-white sm:text-lg md:mt-5 md:text-xl md:max-w-3xl ">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse porttitor id sapien ac laoreet. Nam urna eros, elementum quis purus.
            </p>

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
              <a href="redx-specific" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Redx Specific</a>
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
              <h2 id="applicant-information-title" class="text-3xl text-center leading-8 font-bold text-red-600">
                Foam Concrete
              </h2>

            </div>
            <div class="border-t border-gray-200 px-4 py-5 sm:px-6">
              <div class="sm:col-span-1">
                  <p class="text-4sm font-medium text-gray-500">
                    Foam Concrete is used as for light weight fill applications which is supplied to site in self-leveling consistency. Special chemicals are used to produce stable foam. The foaming agent is added at site to provide consistent quality of concrete. Used for void filling and as insulated fill.
                  </p>
                  <p class="text-4sm mt-4 font-medium text-gray-500">
                    <h3 class="text-gray-500 font-bold">Advantages</h3>
                    <ul class="list-disc text-gray-500 list-inside">
                      <li>Light weight</li>
                      <li>Dry density achievable from 800 to 1800 kg/M3</li>
                      <li>Good thermal insulation properties suitable for sub screed and fill under floor voids</li>
                      <li>Self-leveling and self-compacting</li>
                    </ul>
                  </p>
                  <p class="text-4sm mt-4 font-medium text-gray-500">
                    <h3 class="text-gray-500 font-bold">Design Characteristics</h3>
                    <ul class="list-disc text-gray-500 list-inside">
                      <li>Concrete Density 800 to 1800 kg/M3</li>
                      <li>Strength parameters are applicable only to high density category</li>
                      <li>Site density variance +/- 10%</li>
                    </ul>
                  </p>
                  <p class="text-4sm mt-4 font-medium text-gray-500">
                  <a  href="{{asset('assets/documents/Redx Specific foam Concrete.pdf')}}" target="_new"><img src="{{asset('assets/image/Brochure-Download.png')}}" alt=""></a>
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
                <li class="flex cursor-pointer ">
                    <span>
                          <i class="fas fa-check text-red-600"></i>
                    </span>
                  <span class="text-gray-900 hover:text-red-600 font-bold ml-4"><a href="/redx-specific">Xtra Fluid Concrete</a></span>
                </li>
                <li class="flex mt-4 cursor-pointer">
                    <span>
                          <i class="fas fa-check text-red-600"></i>
                    </span>
                  <span class="text-gray-900 hover:text-red-600 font-bold ml-4"><a href="/redx-specific-2">Foam Concrete</a></span>
                </li>
                <li class="flex mt-4 cursor-pointer">
                    <span>
                          <i class="fas fa-check text-red-600"></i>
                    </span>
                  <span class="text-gray-900 hover:text-red-600 font-bold ml-4"><a href="/redx-specific-3">High Early Stregth Concrete</a></span>
                </li>

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
              <li>
                <img src="https://www.redxindustries.com/images/redymix-1.jpg" class="w-1/4 open-preview mt-4" data-target="#preview-image" alt="">
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



<!-- This example requires Tailwind CSS v2.0+ -->
<div class="fixed z-10 inset-0 overflow-y-auto hidden preview-modal " id="preview-image">
  <div class="flex items-end justify-center min-h-screen  text-center  sm:p-0">

    <div class="fixed inset-0 transition-opacity" aria-hidden="true">
      <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>

    <!-- This element is to trick the browser into centering the modal contents. -->
    <span class=" sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

    <div class="inline-block align-bottom bg-white rounded-lg  text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
      <div>

        <div class="text-center">
        <img src="" id="preview"  alt="">
        </div>
      </div>
      <div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse">

        <button type="button" class="cancel-preview mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:w-auto sm:text-sm">
          Cancel
        </button>
      </div>

    </div>
  </div>
</div>
@stop
@section('scripts')
<script>
$(document).on('click', ".open-preview", function(e){
  $($(this).attr('data-target')).removeClass('hidden')
  var img = $(this).attr('src')

  $('#preview').attr('src', img)
})
$(document).on('click', ".cancel-preview", function(e){
  $('.preview-modal').addClass('hidden')
})
</script>
@endsection
