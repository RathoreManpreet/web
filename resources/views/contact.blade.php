@extends('layout')
@section('title', 'Contact Us')
@section('styles')

@stop
@section('content')
    <!--banner-->

    <div class="relative bg-gray-50 h-72" style="    background-image: url({{ asset('assets/banner.jpg') }});background-repeat: no-repeat;
            background-size: cover;">

        <main class="relative h-full mx-auto max-w-7xl px-4 flex items-center justify-center ">
            <div class="text-center">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-7xl ">
                    <span class="block   text-white">Contact <span class=" text-red-600">Us</span> </span>
                </h1>


            </div>
        </main>

    </div>
    </div>
    <!--end banner-->

<!-- 
    <div class="bg-gray-50 pt-12 sm:pt-16">

        <div class="mt-10 pb-12 bg-white sm:pb-16">
            <div class="relative">
                <div class="absolute inset-0 h-1/2 bg-gray-50"></div>
                <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 ">
                    <div>
                        <dl class="rounded-lg bg-white shadow-lg sm:grid sm:grid-cols-3">
                            <div
                                class="flex flex-col border-b border-gray-100 p-6 text-center sm:border-0 sm:border-r bg-gray-600">
                                <dt class="order-2 mt-2 text-base leading-6 font-semibold text-white">
                                    Redx Industries, Hafeerah Askar, 803, Bahrain
                                </dt>
                                <dd class="order-1 text-2xl font-extrabold text-white">
                                    <i class="fas fa-map-marker-alt"></i> Our Address
                                </dd>
                            </div>
                            <div
                                class="flex flex-col border-t border-b border-gray-100 p-6 text-center sm:border-0 sm:border-l sm:border-r bg-gray-700">
                                <dt class="order-2 mt-2 text-base leading-6 font-semibold text-white">
                                    <a href="">+97377454545 / 77464646</a><br>
                                    <a href="">+97377414141 / 77424242 / 77434343</a>
                                </dt>
                                <dd class="order-1 text-2xl font-extrabold text-white">
                                    <i class="fas fa-phone-alt"></i> Our Number
                                </dd>

                            </div>
                            <div
                                class="flex flex-col border-t border-gray-100 p-6 text-center sm:border-0 sm:border-l bg-gray-800">
                                <dt class="order-2 mt-2 text-base leading-6 font-semibold text-white">
                                    <a href="">info@redxindustries.com</a><br>
                                    <a href="">sales@redxindustries.com</a>
                                </dt>
                                <dd class="order-1 text-2xl font-extrabold text-white">
                                    <i class="fas fa-envelope-open-text"></i> Our Email
                                </dd>

                            </div>

                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div class="bg-gray-50 pt-12 sm:pt-16">

        <div class="mt-10 pb-12 bg-white sm:pb-16">
            <div class="relative">
                <div class="absolute inset-0 h-1/2 bg-gray-50"></div>
                <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 ">
                    <div>
                        <dl class="rounded-lg bg-white shadow-lg md:grid sm:grid-cols-3">
                            <div
                                class="flex flex-col border-b border-gray-100 p-6 text-center sm:border-0 sm:border-r bg-gray-600">
                                <div>
                                  <h2 class="text-2xl font-extrabold text-white-900 sm:text-3xl">
                                    Head Office
                                  </h2>
                                  <div class="mt-3">
                                    <p class="text-lg text-white-500">
                                      Redx Industries, Hafeerah Askar, 803, Bahrain
                                    </p>
                                  </div>
                                  <div class="mt-9">
                                    <div class="flex">
                                      <div class="flex-shrink-0">
                                      <i class="fas fa-phone-alt text-white-600"></i>
                                      </div>
                                      <div class="ml-3 text-base text-white-500">
                                        <p>
                                          <a href="tel:97377454545">(+973) 77454545</a> / <a href="tel:97377464646">77464646</a>
                                        </p>
                                      </div>
                                    </div>
                                    <div class="mt-6 flex">
                                      <div class="flex-shrink-0">
                                          <i class="fas fa-fax text-white-600"></i>
                                      </div>
                                      <div class="ml-3 text-base text-white-500">
                                        <p>
                                        (+973) 77484848
                                        </p>
                                      </div>
                                    </div>
                                    <div class="mt-6 flex">
                                      <div class="flex-shrink-0">
                                          <i class="fas fa-envelope-open-text text-white-600"></i>
                                      </div>
                                      <div class="ml-3 text-base text-white-500">
                                        <p>
                                        info@redxindustries.com
                                        </p>
                                      </div>
                                    </div>
                                  
                                  </div>
                                </div>
                            </div>
                            <div
                                class="flex flex-col border-t border-b border-gray-100 p-6 text-center sm:border-0 sm:border-l sm:border-r bg-gray-700">
                                <div>
                                  <h2 class="text-2xl font-extrabold text-white-900 sm:text-3xl">
                                    Sales Office
                                  </h2>
                                  <div class="mt-3">
                                    <p class="text-lg text-white-500">
                                      Redx Industries, Hafeerah Askar, 803, Bahrain
                                    </p>
                                  </div>
                                  <div class="mt-9">
                                    <div class="flex">
                                      <div class="flex-shrink-0">
                                      <i class="fas fa-phone-alt text-white-600"></i>
                                      </div>
                                      <div class="ml-3 text-base text-white-500">
                                        <p>
                                        <a href="tel:97377414141">(+973) 77414141</a> / <a href="tel:97377424242">77424242</a> / <a href="tel:97377434343">77434343</a>
                                        </p>
                                      </div>
                                    </div>
                                    <div class="mt-6 flex">
                                      <div class="flex-shrink-0">
                                          <i class="fas fa-fax text-white-600"></i>
                                      </div>
                                      <div class="ml-3 text-base text-white-500">
                                        <p>
                                        (+973) 77484848
                                        </p>
                                      </div>
                                    </div>
                                    <div class="mt-6 flex">
                                      <div class="flex-shrink-0">
                                          <i class="fas fa-envelope-open-text text-white-600"></i>
                                      </div>
                                      <div class="ml-3 text-base text-white-500">
                                        <p>
                                          sales@redxindustries.com
                                        </p>
                                      </div>
                                    </div>
                                  
                                  </div>
                                </div>

                            </div>
                            <div
                                class="flex flex-col border-t border-gray-100 p-6 text-center sm:border-0 sm:border-l bg-gray-800">
                                <div>
                                  <h2 class="text-2xl font-extrabold text-white-900 sm:text-3xl">
                                  RedX Trading
                                  </h2>
                                  <div class="mt-3">
                                    <p class="text-lg text-white-500">
                                    Aluminum & Carpetnry
                                    </p>
                                  </div>
                                  <div class="mt-9">
                                    <div class="flex">
                                      <div class="flex-shrink-0">
                                      <i class="fas fa-phone-alt text-white-600"></i>
                                      </div>
                                      <div class="ml-3 text-base text-white-500">
                                        <p>
                                        <a href="tel:9731714112">(+973) 17141122</a>
                                        </p>
                                      </div>
                                    </div>
                                    <div class="mt-6 flex">
                                      <div class="flex-shrink-0">
                                          <i class="fas fa-fax text-white-600"></i>
                                      </div>
                                      <div class="ml-3 text-base text-white-500">
                                        <p>
                                        (+973) 17141133
                                        </p>
                                      </div>
                                    </div>
                                    <div class="mt-6 flex">
                                      <div class="flex-shrink-0">
                                          <i class="fas fa-envelope-open-text text-white-600"></i>
                                      </div>
                                      <div class="ml-3 text-base text-white-500">
                                        <p>
                                          redxtrading@gmail.com
                                        </p>
                                      </div>
                                    </div>
                                  
                                  </div>
                                </div>

                            </div>

                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-8 xl:py-8 px-4 sm:px-6 lg:px-8 bg-white overflow-hidden">
  <div class="max-w-max lg:max-w-7xl mx-auto">
  
    <div class="relative">
      <svg class="hidden md:block absolute top-0 right-0 -mt-20 -mr-20" width="404" height="384" fill="none" viewBox="0 0 404 384" aria-hidden="true">
        <defs>
          <pattern id="95e8f2de-6d30-4b7e-8159-f791729db21b" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
          </pattern>
        </defs>
        <rect width="404" height="384" fill="url(#95e8f2de-6d30-4b7e-8159-f791729db21b)" />
      </svg>
      <svg class="hidden md:block absolute bottom-0 left-0 -mb-20 -ml-20" width="404" height="384" fill="none" viewBox="0 0 404 384" aria-hidden="true">
        <defs>
          <pattern id="7a00fe67-0343-4a3c-8e81-c145097a3ce0" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
          </pattern>
        </defs>
        <rect width="404" height="384" fill="url(#7a00fe67-0343-4a3c-8e81-c145097a3ce0)" />
      </svg>
      <div class="relative md:bg-white md:p-6">
        <div class="lg:grid lg:grid-cols-2 lg:gap-6">
          <div class="prose prose-indigo prose-lg text-gray-500 lg:max-w-none">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d28681.447308303334!2d50.586224!3d26.027636!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x46f2ac6c0de8e373!2sRedx%20Industries!5e0!3m2!1sen!2sus!4v1611052926020!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

          </div>
          <div class="mt-6 prose prose-indigo prose-lg text-gray-500 lg:mt-0">
          <div class="text-center">
                <h2 class="text-3xl font-extrabold tracking-tight text-black sm:text-4xl mb-8 ">
                    Let's work<span class=" text-red-400"> together</span>
                </h2>

            </div>
              <form action="#" method="POST" class="grid grid-cols-1 gap-y-6">
                    <div>
                        <label for="full_name" class="sr-only">Full name</label>
                        <input type="text" name="full_name" id="full_name" autocomplete="name"
                            class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 border-2 border-opacity-50 rounded-md"
                            placeholder="Full name">

                    </div>
                    <div>
                        <label for="email" class="sr-only">Email</label>
                        <input id="email" name="email" type="email" autocomplete="email"
                            class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 border-2 border-opacity-50 rounded-md"
                            placeholder="Email">
                    </div>
                    <div>
                        <label for="phone" class="sr-only">Phone</label>
                        <input type="text" name="phone" id="phone" autocomplete="tel"
                            class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 border-2 border-opacity-50 rounded-md"
                            placeholder="Phone">
                    </div>
                    <div>
                        <label for="message" class="sr-only">Message</label>
                        <textarea id="message" name="message" rows="4"
                            class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 border-2 border-opacity-50 rounded-md"
                            placeholder="Message"></textarea>
                    </div>
                    <div>
                        <button type="submit"
                            class="inline-flex justify-center py-3 px-6 border border-transparent shadow-sm text-base font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                            Send
                        </button>
                    </div>
                </form>
          </div>
        </div>
      
      </div>
    </div>
  </div>
</div>

<!-- 
<div class="bg-gray-60">
  <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-lg mx-auto md:max-w-none md:grid md:grid-cols-2 md:gap-8">
      <div>
        <h2 class="text-2xl font-extrabold text-gray-900 sm:text-3xl">
          Head Office
        </h2>
        <div class="mt-3">
          <p class="text-lg text-gray-500">
            Redx Industries, Hafeerah Askar, 803, Bahrain
          </p>
        </div>
        <div class="mt-9">
          <div class="flex">
            <div class="flex-shrink-0">
             <i class="fas fa-phone-alt text-red-600"></i>
            </div>
            <div class="ml-3 text-base text-gray-500">
              <p>
                +97377454545 / 77464646
              </p>
            </div>
          </div>
          <div class="mt-6 flex">
            <div class="flex-shrink-0">
                <i class="fas fa-fax text-red-600"></i>
            </div>
            <div class="ml-3 text-base text-gray-500">
              <p>
                +97377484848
              </p>
            </div>
          </div>
          <div class="mt-6 flex">
            <div class="flex-shrink-0">
                <i class="fas fa-envelope-open-text text-red-600"></i>
            </div>
            <div class="ml-3 text-base text-gray-500">
              <p>
              info@redxindustries.com
              </p>
            </div>
          </div>
         
        </div>
      </div>
      <div class="mt-12 sm:mt-16 md:mt-0">
        <h2 class="text-2xl font-extrabold text-gray-900 sm:text-3xl">
          Sales Office
        </h2>
        <div class="mt-3">
          <p class="text-lg text-gray-500">
          Redx Industries, Hafeerah Askar, 803, Bahrain
          </p>
        </div>
       
        <div class="mt-9">
          <div class="flex">
            <div class="flex-shrink-0">
                <i class="fas fa-phone-alt text-red-600"></i>
            </div>
            <div class="ml-3 text-base text-gray-500">
              <p>
                +97377414141  / 77424242 / 77434343
              </p>
             
            </div>
          </div>
          <div class="mt-6 flex">
            <div class="flex-shrink-0">
                <i class="fas fa-fax text-red-600"></i>
            </div>
            <div class="ml-3 text-base text-gray-500">
              <p>
                +97377484848
              </p>
            </div>
          </div>
          <div class="mt-6 flex">
            <div class="flex-shrink-0">
                <i class="fas fa-envelope-open-text text-red-600"></i>
            </div>
            <div class="ml-3 text-base text-gray-500">
              <p>
                sales@redxindustries.com
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


 -->



    <!-- <div class="bg-white py-16 px-4 overflow-hidden sm:px-6 lg:px-8 lg:py-8">
        <div class="relative max-w-xl mx-auto">
            <svg class="absolute left-full transform translate-x-1/2" width="404" height="404" fill="none"
                viewBox="0 0 404 404" aria-hidden="true">
                <defs>
                    <pattern id="85737c0e-0916-41d7-917f-596dc7edfa27" x="0" y="0" width="20" height="20"
                        patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                    </pattern>
                </defs>
                <rect width="404" height="404" fill="url(#85737c0e-0916-41d7-917f-596dc7edfa27)" />
            </svg>
            <svg class="absolute right-full bottom-0 transform -translate-x-1/2" width="404" height="404" fill="none"
                viewBox="0 0 404 404" aria-hidden="true">
                <defs>
                    <pattern id="85737c0e-0916-41d7-917f-596dc7edfa27" x="0" y="0" width="20" height="20"
                        patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                    </pattern>
                </defs>
                <rect width="404" height="404" fill="url(#85737c0e-0916-41d7-917f-596dc7edfa27)" />
            </svg>
            <div class="text-center">
                <h2 class="text-3xl font-extrabold tracking-tight text-black sm:text-4xl mb-8 ">
                    Let's work<span class=" text-red-400"> together</span>
                </h2>

            </div>
            <div class="mt-12">
                <form action="#" method="POST" class="grid grid-cols-1 gap-y-6">
                    <div>
                        <label for="full_name" class="sr-only">Full name</label>
                        <input type="text" name="full_name" id="full_name" autocomplete="name"
                            class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 border-2 border-opacity-50 rounded-md"
                            placeholder="Full name">

                    </div>
                    <div>
                        <label for="email" class="sr-only">Email</label>
                        <input id="email" name="email" type="email" autocomplete="email"
                            class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 border-2 border-opacity-50 rounded-md"
                            placeholder="Email">
                    </div>
                    <div>
                        <label for="phone" class="sr-only">Phone</label>
                        <input type="text" name="phone" id="phone" autocomplete="tel"
                            class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 border-2 border-opacity-50 rounded-md"
                            placeholder="Phone">
                    </div>
                    <div>
                        <label for="message" class="sr-only">Message</label>
                        <textarea id="message" name="message" rows="4"
                            class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 border-2 border-opacity-50 rounded-md"
                            placeholder="Message"></textarea>
                    </div>
                    <div>
                        <button type="submit"
                            class="inline-flex justify-center py-3 px-6 border border-transparent shadow-sm text-base font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                            Send
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div> -->



@stop
@section('subscribe')
    <form class="mt-4 sm:flex sm:max-w-md">
        <label for="emailAddress" class="sr-only bg-black">Email address</label>
        <input type="email" name="emailAddress" id="emailAddress" autocomplete="email" required
            class="appearance-none min-w-0 w-full bg-black border border-transparent rounded-md py-2 px-4 text-base text-gray-900 placeholder-black-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white focus:border-black focus:placeholder-white-400"
            placeholder="Enter your email">
        <div class="mt-3 rounded-md sm:mt-0 sm:ml-3 sm:flex-shrink-0">
            <button type="submit"
                class="w-full bg-red-500 border border-transparent rounded-md py-2 px-4 flex items-center justify-center text-base font-medium text-white hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-red-500">
                Subscribe
            </button>
        </div>
    </form>
@stop
@section('scripts')

@endsection
