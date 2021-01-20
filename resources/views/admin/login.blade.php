<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  
   <title> @yield('title')</title>
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    @yield('styles')
  </head>
  <body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;font-sans">
  <div class="min-h-screen bg-gradient-to-r from-yellow-400 via-red-500 to-pink-500 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-md">
    <img class="mx-auto h-12 w-auto" src="{{asset('assets/image/logo.jpeg')}}" alt="Workflow">
    <h2 class="mt-6 text-center text-3xl font-extrabold text-white">
      Sign in to your account
    </h2>
   
  </div>

  <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md ">
    <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
      <form class="space-y-6" id="login-form" method="POST">
      @csrf
        <div>
          <label for="email" class="block text-sm font-medium text-gray-700">
            Email address
          </label>
          <div class="mt-1">
            <input id="email" name="email" type="email" autocomplete="email"  class="appearance-none block w-full px-3 py-2 border text-black border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
          </div>
        </div>

        <div>
          <label for="password" class="block text-sm font-medium text-gray-700">
            Password
          </label>
          <div class="mt-1">
            <input id="password" name="password" type="password" autocomplete="current-password"  class="appearance-none block text-black w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
          </div>
        </div>

        <div>
          <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Sign in
          </button>
        </div>
      </form>

     
    </div>
  </div>
</div>
  </body>
</html>
<script>
       

        $(document).on('submit', '#login-form', function(e){
            e.preventDefault();
            $('.errors-tag').remove()
            console.log($(this).serialize())
            console.log('<?php echo route('admin.signin')?>')
            $('button').attr('disabled', true)
            var this_var = $(this);
            $.ajax({
                type: "POST",  // type of request
                url: "<?php echo route('admin.signin')?>", // resource file with extension
                data:$(this).serialize(),
                dataType:'JSON',
                success: function (e) {
                  console.log(e)
                    $('button').attr('disabled', false)
                    if(e.status == 422) {
                        $.each(e.responseJSON.errors, function( index, value ) {

                           this_var.find('#'+index).parent().append('<span class="text-red-500 errors-tag ">'+value+'</span>')
                        });
                    }
                    else {
                        // console.log(e.data)
                        window.location.href = "dashboard";
                    }
                },
                error:function(e){
                    $('button').attr('disabled', false)
                    console.log(e)
                    // console.log(e.responseJSON)
                    if(e.status == 422) {
                        $.each(e.responseJSON.errors, function( index, value ) {

                           this_var.find('#'+index).parent().append('<span class="text-red-500 errors-tag ">'+value+'</span>')
                        });
                    }
                }
            });
        })

    </script>
@yield('scripts')

