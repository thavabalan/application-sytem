@extends('layouts.admin')
@section('content')
    

    <div class="row gy-5 g-xl-8">
        <!--begin::Col-->
        @foreach($scholarship as $item)
        <div class="col-xxl-6">
            <!--begin::Mixed Widget 2-->
            <div class="card bgi-no-repeat card-xl-stretch mb-xl-8" style="background-position: right top; background-size: 30% auto; background-image: url(assets/media/svg/shapes/abstract-4.svg)">
                <!--begin::Body-->
                <div class="card-body">
                    <a href="{{Route('scholarship.application',$item->id)}}" class="card-title fw-bolder text-muted text-hover-primary fs-4">{{$item->title}}</a>
                    <div class="fw-bolder text-primary my-6">{{$item->applications_count}}</div>
                    
                </div>
                <!--end::Body-->
            </div>
            <!--end::Mixed Widget 2-->
        </div>
        @endforeach
        <!--end::Col-->
        <!--begin::Col-->
       
        <!--end::Col-->
    </div>
    @endsection
    
    
