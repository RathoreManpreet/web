@extends('admin.layout')
@section('title', 'Who we are')
@section('styles')

@stop
@section('content')

<?php
$short_description = "";
$description = "";
$image = asset('assets/image/upload-icon.png');
$iso_standards = "";
if($page) {
    $data = $page->pageContent($page->id);
    $description = $data->description;
    $short_description = $data->short_description;
    $image = asset($data->image);
    $iso_standards = $data->iso_standards;

}
?>
<form action="" id="about-form" method="post" enctype="multipart/form-data">
    <div class="m-8">
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg bg-white p-12">
                    
                        @csrf
                        <div class="sm:col-span-2">
                            <label for="company" class="block text-lg font-medium text-gray-700"> Short Description</label>
                            <div class="mt-1">
                                <textarea name="short_description" id="short_description" cols="30" rows="4" class="text-black py-3 px-4 block w-full border-2  shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">{{$short_description}}
                                </textarea>  

                            </div>
                        </div>

                        
                        <div class="lg:flex mt-8">
                            <div class="flex-1">
                                <label for="category_name" class="block text-lg font-medium text-gray-700">Image</label>
                                <div class="mt-1">
                                {{$image}}
                                    <div class="bg-white overflow-hidden shadow rounded-lg">
                                        <div class=" relative">
                                            <img src="{{$image}}" alt="" class="lg:h-48 w-full" id="image">
                                            <input type="file" name="image"  accept="image/jpeg,image/gif,image/png" class="absolute top-0 h-full opacity-0 images block text-black w-full shadow-sm ">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex-auto lg:ml-8">
                            <label for="category_name" class="block text-lg font-medium text-gray-700">Description</label>
                                <div class="mt-1">
                                    <textarea name="description" id="description" cols="30" rows="8" class="text-black py-3 px-4 block w-full border-2  shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">{{$description}}
                                    </textarea>  
                                </div>
                            </div>
                        </div>

                        <div class="lg:flex mt-8">
                            <div class="flex-1">
                                <label for="category_name" class="block text-lg font-medium text-gray-700">ISO Standards</label>
                                <div class="mt-1">
                                <textarea name="iso_standards" id="iso_standards" cols="30" rows="8" class="text-black py-3 px-4 block w-full border-2  shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">{{$iso_standards}}
                                </textarea>  
                                </div>
                            </div>

                            <div class="flex-1 lg:ml-8">
                            <label for="category_name" class="block text-lg font-medium text-gray-700">PDF   
                                <button type="button" onClick="addMorePDF()" class="ml-4 inline-flex items-center p-1 border border-transparent rounded-full shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                                </label>
                            <div class="pdf-list">
                                <div class="mt-1 flex">
                                    <input type="file" name="pdf[]" id="pdf" autocomplete="given-name" accept="application/pdf" class="text-black py-3 px-4 block w-full border-2  shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
                                    <input type="text" name="pdf_name[]" autocomplete="given-name" accept="application/pdf" class="pdf_name text-black py-3 px-4 block w-full border-2  shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
                                    <button type="button" onClick="removePdf(this)" class="remove-button hidden ml-4 mt-4 h-6 w-8 inline-flex items-center p-1 border border-transparent rounded-full shadow-sm text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500"><i class="fas fa-minus-circle"></i></button>
                                </div>
                            </div>
                                
                            </div>
                        </div>
                        <div class="sm:col-span-2 mt-8">
  
                            <div class="mt-3 sm:mt-0 sm:ml-4 w-full text-right">
                                <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Add Quality
                                </button>
                            </div>
                        </div>
                            
                            
                    </div>
                </div>
            </div>
        </div>

    </div> 
</form>

@stop
@section('scripts')
<script src="//cdn.gaic.com/cdn/ui-bootstrap/0.58.0/js/lib/ckeditor/ckeditor.js"></script>

<script>
    CKEDITOR.replace( 'description' );
    CKEDITOR.replace( 'short_description' );
    CKEDITOR.replace( 'iso_standards' );
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

function addMorePDF() {
    $('.pdf-list').append(`<div class="mt-1 flex">
                                <input type="file" name="pdf[]" autocomplete="given-name" accept="application/pdf" class="text-black py-3 px-4 block w-full border-2  shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
                                <input type="text" name="pdf_name[]" autocomplete="given-name" accept="application/pdf" class=" pdf_name text-black py-3 px-4 block w-full border-2  shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
                                <button type="button" onClick="removePdf(this)" class="remove-button ml-4 mt-4 h-6 w-8 inline-flex items-center p-1 border border-transparent rounded-full shadow-sm text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500"><i class="fas fa-minus-circle"></i></button>
                            </div>`)
    $('.remove-button').removeClass('hidden')
}

function removePdf(element) {

    
    $(element).parent().remove();
    var count_pdf = $('.pdf_name').length

    if($('.pdf_name').length === 1) {
        $('.remove-button').addClass('hidden')
    }
}


$(document).on('submit', '#about-form', function(e){
    e.preventDefault();
    $('.errors-tag').remove()
    
    $('button').attr('disabled', true)
    var this_var = $(this);
    var form = $(this)[0];
    var data = new FormData(form);
    $.ajax({
        type: "POST",  // type of request
        url: "<?php echo route('admin.update.about')?>", // resource file with extension
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
                    window.location.reload()
                });
                // window.location.href = "dashboard";
            }
        },
        error:function(e){
            console.log(e)
        }
    });
})

</script>

@endsection
