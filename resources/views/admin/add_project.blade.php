@extends('admin.layout')
@section('title', 'Project')
@section('styles')
 <style>
 .select2-results__option {
  color: black;
}
.select2-container--default .select2-selection--multiple {

    height : 50px;
    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
    border-width : 2px !important;
    border-color: #d1d5db !important;
}
.select2-selection__choice__display {
    color : black;
}
 </style>
@stop
@section('content')

<div class="m-8">

    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg bg-white p-12">
                    <form id="category-form" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8 ">
                        @csrf
                        <div>
                            <label for="category_name" class="block text-lg font-medium text-gray-700">Project Name</label>
                            <div class="mt-1">
                                <input type="text" name="project_name" id="project_name" autocomplete="given-name" class="text-black py-3 px-4 block w-full border-2  shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
                            </div>
                        </div>
                        <div>
                            <label for="category_name" class="block text-lg font-medium text-gray-700">Location</label>
                            <div class="mt-1">
                                <input type="text" name="location" id="location" autocomplete="given-name" class="text-black py-3 px-4 block w-full border-2  shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
                            </div>
                        </div>
                        <div>
                            <label for="category_name" class="block text-lg font-medium text-gray-700">Material Supplied</label>
                            <div class="mt-1">
                                <input type="text" name="material" id="material" autocomplete="given-name" class="text-black py-3 px-4 block w-full border-2  shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
                            </div>
                        </div>
                        <div>
                            <label for="category_name" class="block text-lg font-medium text-gray-700">Projects</label>
                            <div class="mt-1">
                                <select style="color:black;" class="text-black py-3 px-4 block w-full border-2 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md multiple-projects" id="projects" name="projects[]" multiple="multiple">
                                    @foreach($projects as $project)
                                        <option value="<?=$project->id?>" >{{$project->project_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                        <label for="company" class="block text-lg font-medium text-gray-700">Description</label>
                        <div class="mt-1">
                            <textarea name="description" id="description"></textarea>
                        </div>
                        </div>
                      
                        <div>
                        <label for="category" class="block text-lg font-medium text-gray-700">Thumbnail</label>
                        <div class="mt-1 flex">
                            <input type="file" name="thumbnail" id=""  accept="image/jpeg,image/gif,image/png" autocomplete="given-name" class="images text-black py-3 px-4 block w-full border-2  shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
                            <img src="" class="flex-1 w-16" alt="">
                        </div>
                        <span id="thumbnail"></span>
                        </div>

                       

                        <div class="sm:col-span-2">

                        <div>
                            <h3 class="text-lg leading-6 font-medium text-gray-900">
                                images 
                                <button type="button" onClick="addMoreImage()" class="ml-4 inline-flex items-center p-1 border border-transparent rounded-full shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                                </svg>
                                </button>
                                <span id="images"></span>
                            </h3>
                            <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-5" id="silder-image-list">
                                <div class="bg-white overflow-hidden shadow rounded-lg">
                                    <div class=" relative">
                                        <span class="text-black absolute right-1.5 top-1 z-10">
                                            <button type="button" onClick="removeImage(this)" class="inline-flex items-center p-1 border border-transparent rounded-full shadow-sm text-red-600 hover:bg-red-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2"><i class="fas fa-times"></i></button>
                                         </span>

                                        <img src="{{asset('assets/image/upload-icon.png')}}" alt="">
                                        <input type="file" name="images[]"  accept="image/jpeg,image/gif,image/png" class="absolute top-0 h-full opacity-0 images block text-black w-full shadow-sm ">
                                    </div>
                                </div>

                               
                            </dl>
                         
                        </div>
                        
                        <div class="sm:col-span-2">
  
                            <div class="mt-3 sm:mt-0 sm:ml-4 w-full text-right">
                                <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Add Project
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
      
@stop
@section('scripts')
<script src="//cdn.gaic.com/cdn/ui-bootstrap/0.58.0/js/lib/ckeditor/ckeditor.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>
$(document).ready(function() {
    $('.multiple-projects').select2();
});

    CKEDITOR.replace( 'description' );

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
            
                $(input).parent().find('img').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

$(document).on('change', ".images",function(){
    readURL(this);
});
</script>

<script>
       

        $(document).on('submit', '#category-form', function(e){
            e.preventDefault();
            $('.errors-tag').remove()
           
            $('button').attr('disabled', true)
            var this_var = $(this);
            var form = $(this)[0];
            var data = new FormData(form);
            $.ajax({
                type: "POST",  // type of request
                url: "<?php echo route('admin.add.project.action')?>", // resource file with extension
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
                            window.location.href = "<?=route('admin.project')?>";
                        });
                        // window.location.href = "dashboard";
                    }
                },
                error:function(e){
                  console.log(e)
                }
            });
        })

        function addMoreImage()
        {
            $('#silder-image-list').append(`<div class="bg-white overflow-hidden shadow rounded-lg">
                                    <div class="relative">
                                        <span class="text-black absolute right-1.5 top-1 z-10">
                                            <button type="button" onClick="removeImage(this)" class="inline-flex items-center p-1 border border-transparent rounded-full shadow-sm text-red-600 hover:bg-red-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2"><i class="fas fa-times"></i></button>
                                         </span>
                                        <img src="{{asset('assets/image/upload-icon.png')}}" alt="">
                                        <input type="file" name="images[]"  accept="image/jpeg,image/gif,image/png" class="absolute top-0 h-full opacity-0 images block text-black w-full shadow-sm ">  
                                    </div>
                                </div>`)
        }

        function removeImage(element){
            $(element).parents().eq(2).remove()
        }

      

    </script>
@endsection
