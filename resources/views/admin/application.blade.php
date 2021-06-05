@extends('layouts.admin')
@section('content')

    <div class="row gy-5 g-xl-8">
        
        <div class="col-sm-12">
            <div class="card">
               
                <div class="card-body">

            <table id="kt_datatable_example_1" class="table table-row-bordered gy-5">
                <thead>
                    <tr class="fw-bold fs-6 text-muted">
                        <th>Title</th>
                        <th>Scholarship Title</th>
                        <th>Degree in view</th>
                        <th>Status</th>
                        <th>View</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($applications as $item)
                    <tr>
                        <td>{{$item->course->title}}</td>
                        <td>{{$item->scholarship->title}}</td>
                        <td>{{$item->course->degree_in_view}}</td>
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
    <script>$("#kt_datatable_example_1").DataTable();</script>

  @endsection