@extends('layouts.admin')
@section('content')

    <div class="row gy-5 g-xl-8">
        
        <div class="col-sm-12">
            <div class="card">
               
                <div class="card-body">
                    <div class="card-header">
                        <div class="card-toolbar">

                            <input type="text" id="myInput" placeholder="Search">
                        </div>
                    </div>
            <table id="kt_datatable_example_1" class="table table-row-bordered gy-5">
                <thead>
                    <tr class="fw-bold fs-6 text-muted">
                        <th>User ID</th>
                        <th>First Name</th>
                        <th>Email</th>
                        <th>Mobile Number</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->firstname}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->mobilenumber}}</td>
                        
                    </tr>
                @endforeach
                   
                    
                </tbody>
                
            </table>
                </div>
        </div>
    </div>
    </div>
    
    <script src="{{asset('assets/plugins/global/plugins.bundle.js')}}"></script>

    <link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css"/>
    <script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
    <script>var table = $("#kt_datatable_example_1").DataTable();
    $('#myInput').on( 'keyup', function () {
    table.search( this.value ).draw();
} );
    </script>

  @endsection