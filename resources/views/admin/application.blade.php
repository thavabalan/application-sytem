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
                        <th>Application ID</th>
                        <th>Applicant</th>
                        <th>Scholarship Category</th>
                        <th>Course Preference</th>
                        <th>Status</th>
                        <th>Action</th>
                        <th>Print</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($applications as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->user->firstname}}</td>
                        <td>{{$item->scholarship->title}}</td>
                        <td>{{$item->course->title}}</td>
                        <td>
                            @if($item->status === 'Submitted')
                            <span class="badge badge-light-primary fs-8 fw-bolder">Submitted</span>
                            @elseif($item->status === 'Processing')
                            <span class="badge badge-light-warning fs-8 fw-bolder">Processing</span>
                            @elseif($item->status === 'Approved')
                            <span class="badge badge-light-success fs-8 fw-bolder">Accepted</span>
                            
                            @elseif($item->status === 'Rejected')
                            <span class="badge badge-light-danger fs-8 fw-bolder">Rejected</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{route('admin.applications.show',$item->id)}}" class="menu-link px-3">View</a>
                        </td>
                        <td><a href="{{'applicationprint',$item->id}}" class="menu-link px-3">Print</a>  </td>
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
