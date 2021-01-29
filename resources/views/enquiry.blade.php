@extends('layout')
@section('title', 'Enquiry')
@section('styles')
@stop
@section('content')

    <div class="relative bg-gray-50 h-72" style="background-image: url({{ asset('assets/banner.jpg') }});background-repeat: no-repeat;
                                    background-size: cover;">
        <main class="relative h-full mx-auto max-w-7xl px-4 flex items-center justify-center ">
            <div class="text-center">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-7xl ">
                    <span class="block   text-white"> <span class=" text-red-600">Enquiry</span> </span>
                </h1>


            </div>
        </main>

    </div>
    </div>
    <!--end banner-->


    <div class="bg-white py-16 px-4 overflow-hidden sm:px-6 lg:px-8 lg:py-24">
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
                <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                Make an Online Enquiry

                </h2>
                <p class="mt-4 text-lg leading-6 text-gray-500">
                Fill out the form to get product details from the concern personnel. You will receive a reply within 24 hours. We look forward to hearing from you.
                </p>
            </div>
            <div class="mt-12">
                <form action="#" method="POST" class="grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
                   
                    <div class="sm:col-span-2">
                        <label for="email" class="block text-sm font-medium text-gray-700">Name <span class="text-red-600">*</span></label>
                        <div class="mt-1">
                            <input id="text" name="name" type="name" autocomplete="name"
                            class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 border-2 border-opacity-50 rounded-md">
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email <span class="text-red-600">*</span></label>
                        <div class="mt-1">
                            <input id="email" name="email" type="email" autocomplete="email"
                            class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 border-2 border-opacity-50 rounded-md">
                        </div>
                    </div>
                    <div>
                        <label for="first_name" class="block text-sm font-medium text-gray-700">Telephone <span class="text-red-600">*</span></label>
                        <div class="mt-1">
                            <input type="text" name="telephone" id="telephone" autocomplete="given-name"
                            class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 border-2 border-opacity-50 rounded-md">
                        </div>
                    </div>
                    <div>
                        <label for="last_name" class="block text-sm font-medium text-gray-700">Mobile No. <span class="text-red-600">*</span></label>
                        <div class="mt-1">
                            <input type="text" name="mobile" id="mobile" autocomplete="mobile"
                            class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 border-2 border-opacity-50 rounded-md">
                        </div>
                    </div>
                    
                    <div class="sm:col-span-2">
                        <label for="phone_number" class="block text-sm font-medium text-gray-700">Products <span class="text-red-600">*</span></label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                        <select id="product" name="product"
                                class="block w-full shadow-sm py-3 px-4 text-gray-600 placeholder-gray-500 focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 border-2 border-opacity-50 rounded-md">
                                @foreach ($category_obj->activeCategories() as $category)
                                <option value="{{ $category->category_name }}">{{ $category->category_name }}</option>
                               
                                @endforeach
                                </select>
                         
                        </div>
                    </div>
                    <div>
                        <label for="last_name" class="block text-sm font-medium text-gray-700">Contact me by <span class="text-red-600">*</span></label>
                        <div class="mt-1 flex">
                            <span class="text-gray-700">
                                <input type="radio" name="contact_by" id="contact_by_email" value="Email" autocomplete="mobile" checked>
                                <span>Email</span>
                            </span>
                            <span class="text-gray-700 ml-20">
                                <input type="radio" name="contact_by" id="contact_by_telephone" value="Telephone" autocomplete="mobile">
                                <span for="contact_by_telephone">Telephone</span>
                            </span>
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <div class="mt-1 text-gray-700">
                        <input type="checkbox" name="send_mail" id="send_mail">
                                <span for="contact_by_telephone "> Send me a copy to my e-mail</span>
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="message" class="block text-sm font-medium text-gray-700">Query <span class="text-red-600">*</span></label>
                        <div class="mt-1">
                            <textarea id="query" name="query" rows="4"
                            class="block w-full shadow-sm py-3 px-4 text-gray-600 placeholder-gray-500 focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 border-2 border-opacity-50 rounded-md"></textarea>
                        </div>
                    </div>
                   
                    <div class="sm:col-span-2 text-center">
                    <button type="button"
                            class="w-20 inline-flex items-center justify-center px-2 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                            Reset
                        </button>
                        <button type="submit"
                            class="w-20 inline-flex items-center justify-center px-2 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                            Send
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@stop
@section('scripts')
  
@endsection
