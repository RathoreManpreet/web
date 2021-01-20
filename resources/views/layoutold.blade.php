<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title> @yield('title')</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
        @yield('styles')
    </head>
    <body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;font-sans">
        <div class="sticky bg-gray-50 top-0 w-full z-10" >
        <div class=" bg-white shadow">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="flex justify-between items-center py-6 md:justify-start md:space-x-10">
                <div class="flex justify-start lg:w-0 lg:flex-1">
                <a href="#">
                    <img class="h-8 w-auto sm:h-12" src="{{asset('assets/image/logo.png')}}" alt="">
                </a>
            </div>
            <div class="-mr-2 -my-2 md:hidden">
            <button type="button" id="open-mobile-menu" onClick="openMenu()" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                <span class="sr-only">Open menu</span>
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            </div>
            <nav class="hidden md:flex space-x-10">
        <div class="relative">
          <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
          <button type="button" class="group bg-white rounded-md text-gray-500 inline-flex items-center text-base font-medium hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            <span>Solutions</span>
            <!--
              Heroicon name: chevron-down

              Item active: "text-gray-600", Item inactive: "text-gray-400"
            -->
            <svg class="ml-2 h-5 w-5 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
          </button>

          <!--
            'Solutions' flyout menu, show/hide based on flyout menu state.

            Entering: "transition ease-out duration-200"
              From: "opacity-0 translate-y-1"
              To: "opacity-100 translate-y-0"
            Leaving: "transition ease-in duration-150"
              From: "opacity-100 translate-y-0"
              To: "opacity-0 translate-y-1"
          -->
          <div class="absolute z-10 -ml-4 mt-3 transform px-2 w-screen max-w-md sm:px-0 lg:ml-0 lg:left-1/2 lg:-translate-x-1/2">
            <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
              <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                  <!-- Heroicon name: chart-bar -->
                  <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                  </svg>
                  <div class="ml-4">
                    <p class="text-base font-medium text-gray-900">
                      Analytics
                    </p>
                    <p class="mt-1 text-sm text-gray-500">
                      Get a better understanding of where your traffic is coming from.
                    </p>
                  </div>
                </a>

                <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                  <!-- Heroicon name: cursor-click -->
                  <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                  </svg>
                  <div class="ml-4">
                    <p class="text-base font-medium text-gray-900">
                      Engagement
                    </p>
                    <p class="mt-1 text-sm text-gray-500">
                      Speak directly to your customers in a more meaningful way.
                    </p>
                  </div>
                </a>

                <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                  <!-- Heroicon name: shield-check -->
                  <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                  </svg>
                  <div class="ml-4">
                    <p class="text-base font-medium text-gray-900">
                      Security
                    </p>
                    <p class="mt-1 text-sm text-gray-500">
                      Your customers&#039; data will be safe and secure.
                    </p>
                  </div>
                </a>

                <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                  <!-- Heroicon name: view-grid -->
                  <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                  </svg>
                  <div class="ml-4">
                    <p class="text-base font-medium text-gray-900">
                      Integrations
                    </p>
                    <p class="mt-1 text-sm text-gray-500">
                      Connect with third-party tools that you&#039;re already using.
                    </p>
                  </div>
                </a>

                <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                  <!-- Heroicon name: refresh -->
                  <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                  </svg>
                  <div class="ml-4">
                    <p class="text-base font-medium text-gray-900">
                      Automations
                    </p>
                    <p class="mt-1 text-sm text-gray-500">
                      Build strategic funnels that will drive your customers to convert
                    </p>
                  </div>
                </a>
              </div>
              <div class="px-5 py-5 bg-gray-50 space-y-6 sm:flex sm:space-y-0 sm:space-x-10 sm:px-8">
                <div class="flow-root">
                  <a href="#" class="-m-3 p-3 flex items-center rounded-md text-base font-medium text-gray-900 hover:bg-gray-100">
                    <!-- Heroicon name: play -->
                    <svg class="flex-shrink-0 h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span class="ml-3">Watch Demo</span>
                  </a>
                </div>

                <div class="flow-root">
                  <a href="#" class="-m-3 p-3 flex items-center rounded-md text-base font-medium text-gray-900 hover:bg-gray-100">
                    <!-- Heroicon name: phone -->
                    <svg class="flex-shrink-0 h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    <span class="ml-3">Contact Sales</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">
          Pricing
        </a>
        <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">
          Docs
        </a>

        <div class="relative">
          <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
          <button type="button" class="group bg-white rounded-md text-gray-500 inline-flex items-center text-base font-medium hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            <span>More</span>
            <!--
              Heroicon name: chevron-down

              Item active: "text-gray-600", Item inactive: "text-gray-400"
            -->
            <svg class="ml-2 h-5 w-5 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
          </button>

          <!--
            'More' flyout menu, show/hide based on flyout menu state.

            Entering: "transition ease-out duration-200"
              From: "opacity-0 translate-y-1"
              To: "opacity-100 translate-y-0"
            Leaving: "transition ease-in duration-150"
              From: "opacity-100 translate-y-0"
              To: "opacity-0 translate-y-1"
          -->
          <div class="absolute z-10 left-1/2 transform -translate-x-1/2 mt-3 px-2 w-screen max-w-md sm:px-0">
            <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
              <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                  <!-- Heroicon name: support -->
                  <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                  </svg>
                  <div class="ml-4">
                    <p class="text-base font-medium text-gray-900">
                      Help Center
                    </p>
                    <p class="mt-1 text-sm text-gray-500">
                      Get all of your questions answered in our forums or contact support.
                    </p>
                  </div>
                </a>

                <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                  <!-- Heroicon name: bookmark-alt -->
                  <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                  </svg>
                  <div class="ml-4">
                    <p class="text-base font-medium text-gray-900">
                      Guides
                    </p>
                    <p class="mt-1 text-sm text-gray-500">
                      Learn how to maximize our platform to get the most out of it.
                    </p>
                  </div>
                </a>

                <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                  <!-- Heroicon name: calendar -->
                  <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                  </svg>
                  <div class="ml-4">
                    <p class="text-base font-medium text-gray-900">
                      Events
                    </p>
                    <p class="mt-1 text-sm text-gray-500">
                      See what meet-ups and other events we might be planning near you.
                    </p>
                  </div>
                </a>

                <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                  <!-- Heroicon name: shield-check -->
                  <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                  </svg>
                  <div class="ml-4">
                    <p class="text-base font-medium text-gray-900">
                      Security
                    </p>
                    <p class="mt-1 text-sm text-gray-500">
                      Understand how we take your privacy seriously.
                    </p>
                  </div>
                </a>
              </div>
              <div class="px-5 py-5 bg-gray-50 sm:px-8 sm:py-8">
                <div>
                  <h3 class="text-sm tracking-wide font-medium text-gray-500 uppercase">
                    Recent Posts
                  </h3>
                  <ul class="mt-4 space-y-4">
                    <li class="text-base truncate">
                      <a href="#" class="font-medium text-gray-900 hover:text-gray-700">
                        Boost your conversion rate
                      </a>
                    </li>

                    <li class="text-base truncate">
                      <a href="#" class="font-medium text-gray-900 hover:text-gray-700">
                        How to use search engine optimization to drive traffic to your site
                      </a>
                    </li>

                    <li class="text-base truncate">
                      <a href="#" class="font-medium text-gray-900 hover:text-gray-700">
                        Improve your customer experience
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="mt-5 text-sm">
                  <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500"> View all posts <span aria-hidden="true">&rarr;</span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>

               
      

        <div class="absolute top-0 inset-x-0 z-10 p-2 transition transform origin-top-right hidden" id="mobile-menu">
            <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
                <div class="pt-5 pb-6 px-5">
                    <div class="flex items-center justify-between">
                        <div>
                        <img class="h-8 w-auto" src="{{asset('assets/image/logo.png')}}" alt="Workflow">
                        </div>
                        <div class="-mr-2">
                            <button type="button" onClick="closeMenu()" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                <span class="sr-only">Close menu</span>
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>

                </div>
                <div class="py-6 px-5 space-y-6">
                    <div class="grid  gap-y-4 gap-x-8">


                        <a href="/" class="text-xl font-medium text-gray-900 hover:text-gray-900">
                            Home
                        </a>

                        <a href="/about" class="text-xl font-medium text-gray-900 hover:text-gray-900">
                            About Us
                        </a>

                        <a href="/redx-specific" class="text-xl font-medium text-gray-900 hover:text-gray-900">
                            Redx Specific
                        </a>
                        <a href="/products" class="text-xl font-medium text-gray-900 hover:text-gray-900">
                            Products
                        </a>
                        <a href="/projects" class="text-xl font-medium text-gray-900 hover:text-gray-900">
                            Projects
                        </a>
                        <a href="/service" class="text-xl font-medium text-gray-900 hover:text-gray-900">
                            Sevices
                        </a>
                        <a href="/quality" class="text-xl font-medium text-gray-900 hover:text-gray-900">
                            Quality
                        </a>

                        <a href="/contact" class="text-xl font-medium text-gray-900 hover:text-gray-900">
                            Contacts
                        </a>


                    </div>

                </div>
            </div>
        </div>
    </div>
      <!--banner-->


    </div>
</div>

    @yield('content')

<!--footer-->
    <footer class="bg-white-800" aria-labelledby="footerHeading">
        <h2 id="footerHeading" class="sr-only">Footer</h2>
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
            <div class="xl:grid xl:grid-cols-3 xl:gap-8">
            <div class="grid col-span-2 gap-8 xl:col-span-2">
                <div class="md:grid md:grid-cols-1 md:gap-8">
                <div>
                    <h3 class="text-sm font-semibold text-black-400 tracking-wider uppercase">
                        <img class="h-8 w-auto sm:h-10" src="{{asset('assets/image/logo.png')}}" alt="">
                    </h3>
                    <p class="mt-4 space-y-4 text-lg text-black">
                        RedX has two state-of-art fully equipped laboratories one located in Hafeera another in Hidd.
                        Our laboratories are committed to conduct tests and researches about building materials, using best valid practices to issue our customers quality products, in order to achieve the highest standards of credibility for the customers and consultants ...
                    </p>

                    <div class="flex space-x-6 md:order-2 mt-2 ">
                        <a href="https://www.facebook.com/redxinds" class="text-gray-400 hover:text-gray-300">
                            <span class="sr-only">Facebook</span>
                            <img src="https://img.icons8.com/cute-clipart/64/000000/facebook-new.png"/>
                        </a>

                        <a href="https://instagram.com/redxinds" class="text-gray-400 hover:text-gray-300">
                            <span class="sr-only">Instagram</span>
                            <img src="https://img.icons8.com/cute-clipart/64/000000/instagram-new.png"/>
                        </a>

                        <a href="https://twitter.com/redxinds" class="text-gray-400 hover:text-gray-300">
                            <span class="sr-only">Twitter</span>
                            <img src="https://img.icons8.com/cute-clipart/64/000000/twitter.png"/>
                        </a>

                    </div>
                </div>

                </div>

            </div>
            <div class="mt-8 xl:mt-0">


                <form class="mt-4 sm:flex sm:max-w-md">
                <label for="emailAddress" class="sr-only bg-black">Email address</label>
                <input type="email" name="emailAddress" id="emailAddress" autocomplete="email" required class="appearance-none min-w-0 w-full bg-black border border-transparent rounded-md py-2 px-4 text-base text-gray-900 placeholder-black-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white focus:border-black focus:placeholder-white-400" placeholder="Enter your email">
                <div class="mt-3 rounded-md sm:mt-0 sm:ml-3 sm:flex-shrink-0">
                    <button type="submit" class="w-full bg-red-500 border border-transparent rounded-md py-2 px-4 flex items-center justify-center text-base font-medium text-white hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-red-500">
                    Subscribe
                    </button>
                </div>
                </form>
                <div>
                <div class="md:grid md:grid-cols-2 md:gap-8 mt-10">
                    <div>

                        <ul class="mt-4 space-y-4">
                        <li>
                            <a href="/" class="text-lg text-black hover:text-red-600">
                            Home
                            </a>
                        </li>

                        <li>
                            <a href="/products" class="text-lg text-black hover:text-red-600">
                            Products
                            </a>
                        </li>

                        <li>
                            <a href="/service" class="text-lg text-black hover:text-red-600">
                            Service
                            </a>
                        </li>

                        <li>
                            <a href="/about" class="text-lg text-black hover:text-red-600">
                            About Us
                            </a>
                        </li>
                        </ul>
                    </div>
                    <div class="mt-12 md:mt-0">

                        <ul class="mt-4 space-y-4">
                        <li>
                            <a href="/contact" class="text-lg text-black hover:text-red-600">
                            Contact Us
                            </a>
                        </li>

                        <li>
                            <a href="#" class="text-lg text-black hover:text-red-600">
                            Term & Condition
                            </a>
                        </li>

                        <li>
                            <a href="#" class="text-lg text-black hover:text-red-600">
                            Privacy Policy
                            </a>
                        </li>


                        </ul>
                    </div>
                </div>


                </div>
                </div>
            </div>
            </div>
            <div class="mt-8 border-t border-gray-700 pt-8 md:flex md:items-center md:justify-between">

                <p class="mt-8 text-base text-black-400 md:mt-0 md:order-1">
                     &copy; 2020 RedX Industry, Inc. All rights reserved.
                </p>
            </div>
        </div>
    </footer>

<!--end footer-->
  </body>
</html>
@yield('scripts')
<script>
function openMenu(){

    $('#mobile-menu').removeClass('hidden')
}
function closeMenu(){

$('#mobile-menu').addClass('hidden')
}
</script>
