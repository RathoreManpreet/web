@extends('admin.layout')
@section('title', 'Project')
@section('styles')
 <!--Regular Datatables CSS-->
 <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <!--Responsive Extension Datatables CSS-->
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
    <!--Button Extension Datatables CSS-->
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">
    <style>
        /* Overrides to match the Tailwind CSS */

        .dataTables_wrapper {
            padding-top: 0.25rem;
            padding-bottom: 0.25rem
        }

        table.dataTable.no-footer {
            border-bottom-width: 1px;
            border-color: #d2d6dc
        }

        table.dataTable tbody td, table.dataTable tbody th {
            padding: 0.75rem 1rem;
            border-bottom-width: 1px;
            border-color: #d2d6dc
        }

        div.dt-buttons {
            padding: 1rem 1rem 1rem 0;
            display: flex;
            align-items: center
        }

        .dataTables_filter, .dataTables_info {
            padding: 1rem
        }

        .dataTables_wrapper .dataTables_paginate {
            padding: 1rem
        }

        .dataTables_filter label input {
            padding: 0.5rem;
            border-width: 2px;
            border-radius: 0.5rem
        }

        .dataTables_filter label input:focus {
            box-shadow: 0 0 0 3px rgba(118, 169, 250, 0.45);
            outline: 0
        }

        table.dataTable thead tr {
            border-radius: 0.5rem
        }

        table.dataTable thead tr th:not(.text-center) {
            text-align: left
        }

        table.dataTable thead tr th {
            background-color: #edf2f7;
            border-bottom-width: 2px;
            border-top-width: 1px;
            border-color: #d2d6dc
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button.current:not(.disabled), .dataTables_wrapper .dataTables_paginate .paginate_button.next:not(.disabled), .dataTables_wrapper .dataTables_paginate .paginate_button.previous:not(.disabled), .dataTables_wrapper .dataTables_paginate .paginate_button:not(.disabled), button.dt-button {
            transition-duration: 150ms;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: #374151 !important;
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            font-size: 0.75rem;
            font-weight: 600;
            align-items: center;
            display: inline-flex;
            border-width: 1px !important;
            border-color: #d2d6dc !important;
            border-radius: 0.375rem;
            background: #ffffff;
            overflow: visible;
            margin-bottom: 0
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button.next:focus:not(.disabled), .dataTables_wrapper .dataTables_paginate .paginate_button.next:hover:not(.disabled), .dataTables_wrapper .dataTables_paginate .paginate_button.previous:focus:not(.disabled), .dataTables_wrapper .dataTables_paginate .paginate_button.previous:hover:not(.disabled), .dataTables_wrapper .dataTables_paginate .paginate_button:focus:not(.disabled), .dataTables_wrapper .dataTables_paginate .paginate_button:hover:not(.disabled), button.dt-button:focus, button.dt-button:focus:not(.disabled), button.dt-button:hover, button.dt-button:hover:not(.disabled) {
            background-color: #edf2f7 !important;
            border-width: 1px !important;
            border-color: #d2d6dc !important;
            color: #374151 !important
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button.current:not(.disabled) {
            background: #6875f5 !important;
            color: #ffffff !important;
            border-color: #8da2fb !important
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover, .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
            background-color: #8da2fb !important;
            color: #ffffff !important;
            border-color: #8da2fb !important
        }

        .dataTables_length select {
            padding: .25rem;
            border-radius: .25rem;
            background-color: #edf2f7;
        }

        .dataTables_length {
            padding-top: 1.25rem;
        }
    </style>
@stop
@section('content')
<div class="m-8">
<div class="pb-5 border-b border-gray-200 sm:flex sm:items-center sm:justify-between">
  
  <div class="mt-3 sm:mt-0 sm:ml-4 w-full text-right">
    <a href="{{route('admin.add.event')}}" type="button" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
      Add Event
    </a>
  </div>
</div>
<div class="flex flex-col">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg bg-white p-4">
        <table class="min-w-full divide-y divide-gray-200 table table-striped table-bordered" id="project-table"  style="width:100%">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Event Name
              </th>
            
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Description
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Thumbnail
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Status
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Action
              </th>
            </tr>
          </thead>
          <tbody>
            <!-- Odd row -->
            @foreach($events as $event)
            <tr class="bg-white">
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                {{$event->event_name}}
              </td>
             
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
              {{ strlen(strip_tags($event->event_desc)) > 50 ? substr(strip_tags($event->event_desc),0,50)."..." : strip_tags($event->event_desc) }}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                <img src="{{asset($event->thumbnail)}}" class="w-8" alt="">
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
              
              @if($event->status == 0) 
                <span class="text-red-600 font-semibold"> {{$event->getStatus($event->status)}} </span>
              @elseif($event->status == 1) 
                <span class="text-green-600 font-semibold"> {{$event->getStatus($event->status)}} </span>
              @endif
            </td>
              
              <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                <a href="{{route('admin.edit.event',[$event->id])}}" class="text-indigo-600 hover:text-indigo-900 fas fa-edit"></a>
                <button data-url="{{route('admin.delete.event',[$event->id])}}" class="delete-project text-red-600 hover:text-red-900"><i class="fas fa-trash"></i></button>
              </td>
            </tr>
            @endforeach
          
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
      </div>
@stop
@section('scripts')

<!--Datatables -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.22/b-1.6.4/b-flash-1.6.4/b-html5-1.6.4/b-print-1.6.4/datatables.min.js"></script>
<script>
    $(document).ready(function () {
        let table = $('#project-table').DataTable({
            responsive: true,
            dom: 'Blfrtip',
            buttons: []
        }).columns.adjust().responsive.recalc();
    });

    
    $(document).on('click', '.delete-project', function(e){

      var url = $(this).attr('data-url')

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

              $.ajax({
                  type: "GET", 
                  url: url,
                  dataType:'JSON',
                  success: function (e) {
                      swal("", "Event is successfully deleted!", "success")
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
    })
    </script>
@endsection
