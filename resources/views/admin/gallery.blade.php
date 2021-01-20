@extends('admin.layout')
@section('title', 'Gallery')
@section('styles')

@stop
@section('content')


<div class="m-8">


    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg bg-white p-12">
                     <form action="" id="gallery-form" method="post" enctype="multipart/form-data" class="grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8 ">
                        @csrf
                        <div>
                            <div class="mt-1">
                                <input type="file" name="images[]" id="images" multiple accept="image/jpeg,image/gif,image/png" autocomplete="given-name" class="text-black py-3 px-4 block w-full border-2  shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
                            </div>
                        </div>
                        <div>
                            
                            <div class="mt-1 text-right">
                            <button type="submit" class="inline-flex items-center cursor-pointer px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Update Product
                                </button>
                            </div>
                        </div>
                     </form>
                </div>
            </div>
        </div>
    </div>
    @if(count($galleries) > 0)
        <div class="pb-5 mt-4 border-b border-gray-200 sm:flex sm:items-center sm:justify-between">
    
            <div class="mt-3 sm:mt-0 sm:ml-4 w-full text-right">
                <a type="button" id="delete-images" data-url="{{route('admin.delete.gallery')}}" class="inline-flex items-center cursor-pointer px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                Delete Images 
                </a>
                @csrf

            </div>
        </div>

        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                

                    <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-4">
                        @foreach($galleries as $gallery)
                        <div class="bg-white overflow-hidden shadow hover:shadow-lg rounded-lg text-center relative">
                        <input type="checkbox" name="image_checkbox[]" value="{{encrypt($gallery->id)}}" id="email" class="absolute top-2 left-2">

                            <div>
                                <img src="{{asset($gallery->image)}}" alt="" class="object-cover h-48 w-full">
                                
                            </div>
                            <!-- <button type="button" data-url="{{route('admin.delete.gallery',[$gallery->id])}}" class="delete-image inline-flex items-center p-1 border font-bold border-transparent rounded-full shadow-sm text-red-600">Delete</button> -->
                        </div>
                        @endforeach
                    </dl>



                </div>
            </div>
        </div>
    @endif
</div>
      
@stop
@section('scripts')


<script>
       

        $(document).on('submit', '#gallery-form', function(e){
            e.preventDefault();
            $('.errors-tag').remove()
           
            $('button').attr('disabled', true)
            var this_var = $(this);
            var form = $(this)[0];
            var data = new FormData(form);
            $.ajax({
                type: "POST",  // type of request
                url: "<?php echo route('admin.add.gallery')?>", // resource file with extension
                data:data,
                dataType:'JSON',
                processData: false,
                contentType: false,
                cache: false,
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
                        swal("", "Successfully Inserted!", "success")
                        .then((value) => {
                            window.location.href = "<?=route('admin.gallery')?>";
                        });
                        // window.location.href = "dashboard";
                    }
                },
                error:function(e){
                  console.log(e)
                }
            });
        })

        // function delete(){

        //     var url = $(this).attr('data-url')

        //     swal({
        //         text: "Do you want to Delete?",
        //         type: "success",
        //         icon: "warning",
        //         buttons: {
        //             catch: {
        //                 text: "Yes",
        //                 value: "true",
        //             },
        //             cancel: "No",

        //         },
        //         //timer: 10000
        //     }).then((willDelete) => {
        //         if (willDelete) {

        //             $.reach( $('input:checkbox:checked'))

        //             $.ajax({
        //                 type: "GET", 
        //                 url: url,
        //                 dataType:'JSON',
        //                 success: function (e) {
        //                     swal("", "Image is successfully deleted!", "success")
        //                         .then((value) => {
        //                             window.location.reload()
        //                         });
        //                 },
        //                 error:function(e){
                            
        //                 }
        //             });

                
        //         }


        //     });
        // )
      
      $(document).on('click', '#delete-images', function(e){

        var numberOfChecked = $('input:checkbox:checked').length;
            if(numberOfChecked == 0) {
                swal("", "Select images", "error")

            }
            else {


                swal({
                    text: "Do you want to Delete?",
                    type: "success",
                    icon: "warning",
                    buttons: {
                        catch: {
                            text: "Yes",
                            value: "true",
                        },
                        cancel: "No",

                    },
                    //timer: 10000
                }).then((willDelete) => {
                    if (willDelete) {

                        var images = [];
                                
                        $('input:checkbox:checked').each(function(){
                            var value = $(this).val();
                            images.push(value);
                        });
                        console.log(images)

                       var url = $(this).attr('data-url')

                        $.ajax({
                            type: "POST", 
                            url: url,
                            dataType:'JSON',
                            data : {'images' : images, '_token' : $("input[name='_token']").val()},
                            success: function (e) {
                                swal("", "Image is successfully deleted!", "success")
                                    .then((value) => {
                                        window.location.reload()
                                    });
                            },
                            error:function(e){
                                console.log(e)
                            }
                        });

                    
                    }


                });
            }
        })

    </script>
    

@endsection
