@extends('layouts.admin')
@section('content')
<div class="row gy-5 g-xl-8">
    <!--begin::Col-->
    <div class="col-xxl-4">
        <!--begin::Mixed Widget 2-->
        <div class="col bg-light-warning px-6 py-8 rounded-2 me-7 mb-7">
            <!--begin::Svg Icon | path: icons/stockholm/Media/Equalizer.svg-->
            <span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24"></rect>
                        <rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5"></rect>
                        <rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5"></rect>
                        <rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5"></rect>
                        <rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5"></rect>
                    </g>
                </svg>
            </span>
            <h1>{{$application_count}}</h1>
            <!--end::Svg Icon-->
            <a href="#" class="text-warning fw-bold fs-6">Total Applications</a>
        </div>
        <!--end::Mixed Widget 2-->
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col-xxl-4">
        <!--begin::List Widget 5-->
        <div class="col bg-light-warning px-6 py-8 rounded-2 me-7 mb-7">
            <!--begin::Svg Icon | path: icons/stockholm/Media/Equalizer.svg-->
            <span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24"></rect>
                        <rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5"></rect>
                        <rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5"></rect>
                        <rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5"></rect>
                        <rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5"></rect>
                    </g>
                </svg>
            </span>
            <h1>{{$approved_count}}</h1>

            <!--end::Svg Icon-->
            <a href="#" class="text-warning fw-bold fs-6">Approved Applications</a>
        </div>
        <!--end: List Widget 5-->
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col-xxl-4">
        <!--begin::Mixed Widget 7-->
        <div class="col bg-light-warning px-6 py-8 rounded-2 me-7 mb-7">
            <!--begin::Svg Icon | path: icons/stockholm/Media/Equalizer.svg-->
            <span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24"></rect>
                        <rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5"></rect>
                        <rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5"></rect>
                        <rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5"></rect>
                        <rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5"></rect>
                    </g>
                </svg>
            </span>
            <!--end::Svg Icon-->
            <h1>{{$pending_count}}</h1>
            <a href="#" class="text-warning fw-bold fs-6">Peding Applications</a>
        </div>
        <!--end::Mixed Widget 10-->
    </div>
    <!--end::Col-->
    <div class="col-xxl-6">
        <!--begin::Statistics Widget 5-->
        <a href="#" class="card bg-warning hoverable card-xl-stretch mb-xl-8">
            <!--begin::Body-->
            <div class="card-body">
                <!--begin::Svg Icon | path: icons/stockholm/Communication/Group.svg-->
                <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                        <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
                    </svg>
                </span>
                <!--end::Svg Icon-->
                <div class="text-inverse-warning fw-bolder fs-2 mb-2 mt-5">{{$female_count}}</div>
                <div class="fw-bold text-inverse-warning fs-7">Female Applicants</div>
            </div>
            <!--end::Body-->
        </a>
        <!--end::Statistics Widget 5-->
    </div>
    <div class="col-xxl-6">
        <!--begin::Statistics Widget 5-->
        <a href="#" class="card bg-success hoverable card-xl-stretch mb-xl-8">
            <!--begin::Body-->
            <div class="card-body">
                <!--begin::Svg Icon | path: icons/stockholm/Communication/Group.svg-->
                <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                        <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
                    </svg>
                </span>
                <!--end::Svg Icon-->
                <div class="text-inverse-warning fw-bolder fs-2 mb-2 mt-5">{{$male_count}}</div>
                <div class="fw-bold text-inverse-warning fs-7">Male Applicants</div>
            </div>
            <!--end::Body-->
        </a>
        <!--end::Statistics Widget 5-->
    </div>
</div>
@endsection