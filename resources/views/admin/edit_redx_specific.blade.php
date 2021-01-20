@extends('admin.layout')
@section('title', 'Redx Specific')
@section('styles')
 
@stop
@section('content')

<div class="m-8">

    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg bg-white p-12">
                    <form id="category-form" method="POST" enctype="multipart/form-data"  action="{{route('admin.update.redx-specific',[$redx_specific->id])}}" class="grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8 ">
                        @csrf
                        <div>
                        <label for="category_name" class="block text-lg font-medium text-gray-700">Title</label>
                        <div class="mt-1">
                            <input type="text" name="title" id="title" value="{{$redx_specific->title}}" autocomplete="given-name" class="text-black py-3 px-4 block w-full border-2  shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
                        </div>
                        </div>
                        <div>
                            <label for="status" class="block text-lg font-medium text-gray-700">Status</label>
                            <div class="mt-1">
                                <select name="status" id="status" class="text-black py-3 px-4 block w-full border-2 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
                                    <option value="1" {{ $redx_specific->status == 1 ? "Selected" :""}}>Active</option>
                                    <option value="0" {{ $redx_specific->status == 0 ? "Selected" :""}}>Inactive</option>
                                </select>
                            </div>
                        </div>
                       
                        <div class="sm:col-span-2">
                        <label for="company" class="block text-lg font-medium text-gray-700">Description</label>
                        <div class="mt-1">
                            <textarea name="description" id="description"> {{$redx_specific->description}}</textarea>
                        </div>
                        </div>
                        
                        <div>
                        <label for="category" class="block text-lg font-medium text-gray-700">Certificate</label>
                        <div class="mt-1 flex">
                            <input type="file" name="certificate" id="certificate"  accept="image/jpeg,image/gif,image/png" autocomplete="given-name" class="images text-black py-3 px-4 block w-full border-2  shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
                            <img src="{{asset($redx_specific->certificate)}}" class="flex-1 w-16" alt="">
                        </div>
                        </div>


                        <div>
                        <label for="category_name" class="block text-lg font-medium text-gray-700">Upload PDF</label>
                            <div class="mt-1 flex">
                                <input type="file" name="pdf" id="pdf"  accept=".pdf" autocomplete="given-name" class=" text-black py-3 px-4 block w-full border-2  shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
                                @if($redx_specific->pdf != "")
                                    <a href="{{asset($redx_specific->pdf)}}" class="flex-1 w-48 fas fa-file-pdf text-red-700"></a>
                                @endif 
                            </div>
                        </div>
                      
                       
                        
                        <div class="sm:col-span-2">
  
                            <div class="mt-3 sm:mt-0 sm:ml-4 w-full text-right">
                                <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Add
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

<script>
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
            var url = this_var.attr('action');
           
            var data = new FormData(form);
            $.ajax({
                type: "POST",  // type of request
                url: url, // resource file with extension
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
                        swal("", "Successfully Updated!", "success")
                        .then((value) => {
                            window.location.href = "<?=route('admin.redx-specific')?>";
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
