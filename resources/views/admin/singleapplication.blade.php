@extends('layouts.admin')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Toolbar-->
        
        <!--end::Toolbar-->
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container">
                <!--begin::Navbar-->
                <div class="card mb-5 mb-xl-10">
                    <div class="card-body pt-9 pb-0">
                        <!--begin::Details-->
                        <div class="d-flex flex-wrap flex-sm-nowrap mb-3">
                            <!--begin: Pic-->
                            <div class="me-7 mb-4">
                                <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                    <img src="{{$application->user->profile}}" alt="image" />
                                    <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-white h-20px w-20px"></div>
                                </div>
                            </div>
                            <!--end::Pic-->
                            <!--begin::Info-->
                            <div class="flex-grow-1">
                                <!--begin::Title-->
                                <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                    <!--begin::User-->
                                    <div class="d-flex flex-column">
                                        <!--begin::Name-->
                                        <div class="d-flex align-items-center mb-2">
                                            <a href="#" class="text-gray-800 text-hover-primary fs-2 fw-bolder me-1">{{$application->user->firstname}} {{$application->user->middlename}} {{$application->user->lastname}}</a>
                                            
                                        </div>
                                        <!--end::Name-->
                                        <!--begin::Info-->
                                        <div class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2">
                                            <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                            <!--begin::Svg Icon | path: icons/stockholm/General/User.svg-->
                                            <span class="svg-icon svg-icon-4 me-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                        <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                        <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                                    </g>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->{{$application->user->admission_type}}</a>
                                            <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                            <!--begin::Svg Icon | path: icons/stockholm/Map/Marker1.svg-->
                                            <span class="svg-icon svg-icon-4 me-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path d="M5,10.5 C5,6 8,3 12.5,3 C17,3 20,6.75 20,10.5 C20,12.8325623 17.8236613,16.03566 13.470984,20.1092932 C12.9154018,20.6292577 12.0585054,20.6508331 11.4774555,20.1594925 C7.15915182,16.5078313 5,13.2880005 5,10.5 Z M12.5,12 C13.8807119,12 15,10.8807119 15,9.5 C15,8.11928813 13.8807119,7 12.5,7 C11.1192881,7 10,8.11928813 10,9.5 C10,10.8807119 11.1192881,12 12.5,12 Z" fill="#000000" fill-rule="nonzero" />
                                                    </g>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->{{$application->user->nationality}}</a>
                                            <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
                                            <!--begin::Svg Icon | path: icons/stockholm/Communication/Mail-at.svg-->
                                            <span class="svg-icon svg-icon-4 me-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <path d="M11.575,21.2 C6.175,21.2 2.85,17.4 2.85,12.575 C2.85,6.875 7.375,3.05 12.525,3.05 C17.45,3.05 21.125,6.075 21.125,10.85 C21.125,15.2 18.825,16.925 16.525,16.925 C15.4,16.925 14.475,16.4 14.075,15.65 C13.3,16.4 12.125,16.875 11,16.875 C8.25,16.875 6.85,14.925 6.85,12.575 C6.85,9.55 9.05,7.1 12.275,7.1 C13.2,7.1 13.95,7.35 14.525,7.775 L14.625,7.35 L17,7.35 L15.825,12.85 C15.6,13.95 15.85,14.825 16.925,14.825 C18.25,14.825 19.025,13.725 19.025,10.8 C19.025,6.9 15.95,5.075 12.5,5.075 C8.625,5.075 5.05,7.75 5.05,12.575 C5.05,16.525 7.575,19.1 11.575,19.1 C13.075,19.1 14.625,18.775 15.975,18.075 L16.8,20.1 C15.25,20.8 13.2,21.2 11.575,21.2 Z M11.4,14.525 C12.05,14.525 12.7,14.35 13.225,13.825 L14.025,10.125 C13.575,9.65 12.925,9.425 12.3,9.425 C10.65,9.425 9.45,10.7 9.45,12.375 C9.45,13.675 10.075,14.525 11.4,14.525 Z" fill="#000000" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->{{$application->user->email}}</a>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Actions-->
                                    
                                    <div class="d-flex my-4">
                                        <a href="{{Route('process',$application->id)}}" class="btn btn-sm btn-primary me-2" >
                                            <!--begin::Svg Icon | path: icons/stockholm/Navigation/Double-check.svg-->
                                            
                                            <!--end::Svg Icon-->
                                            <!--begin::Indicator-->
                                            <span class="indicator-label">Start Processing</span>
                                            </span>
                                            <!--end::Indicator-->
                                        </a>
                                        <a href="#" class="btn btn-sm btn-success me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_share_earn">Accept</a>

                                        <a href="{{Route('reject',$application->id)}}" class="btn btn-sm btn-danger me-3" >Reject</a>
                                        <!--begin::Menu-->
                                        <button type="button" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">
                                            Upload file
                                        </button>
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Title-->
                                <!--begin::Stats-->
                                <div class="d-flex flex-wrap flex-stack">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column flex-grow-1 pe-8">
                                        <!--begin::Stats-->
                                        <div class="d-flex flex-wrap">
                                            <!--begin::Stat-->
                                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                <!--begin::Number-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Svg Icon | path: icons/stockholm/Navigation/Arrow-up.svg-->
                                                    
                                                    <!--end::Svg Icon-->
                                                    <div class="fs-2 fw-bolder counted" data-kt-countup="true" data-kt-countup-value="4500" data-kt-countup-prefix="$">{{$application->scholarship->title}}</div>
                                                </div>
                                                <!--end::Number-->
                                                <!--begin::Label-->
                                                <div class="fw-bold fs-6 text-gray-400">Scholarship</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Stat-->
                                            <!--begin::Stat-->
                                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                <!--begin::Number-->
                                                
                                                <!--end::Number-->
                                                <!--begin::Label-->
                                                <div class="fs-2 fw-bolder counted" data-kt-countup="true" data-kt-countup-value="4500" data-kt-countup-prefix="$">{{$application->course->title}}</div>

                                                <div class="fw-bold fs-6 text-gray-400">Course</div>
                                                <!--end::Label-->
                                            </div>

                                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3 bg-warning">
                                                <!--begin::Number-->
                                                
                                                <!--end::Number-->
                                                <!--begin::Label-->
                                                <div class="fs-2 fw-bolder counted" data-kt-countup="true" data-kt-countup-value="4500" data-kt-countup-prefix="$">{{$application->status}}</div>

                                                <div class="fw-bold fs-6 text-gray-400">Status</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Stat-->
                                            <!--begin::Stat-->
                                           
                                            <!--end::Stat-->
                                        </div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Progress-->
                                   
                                    <!--end::Progress-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Details-->
                        <!--begin::Navs-->
                        
                        <!--begin::Navs-->
                    </div>
                </div>
                <!--end::Navbar-->
                <!--begin::details View-->
                <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
                    <!--begin::Card header-->
                    <div class="card-header cursor-pointer">
                        <!--begin::Card title-->
                        <div class="card-title m-0">
                            <h3 class="fw-bolder m-0">Personal Details</h3>
                        </div>
                        <!--end::Card title-->
                        <!--begin::Action-->
                        <!--end::Action-->
                    </div>
                    <!--begin::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body p-9">
                        <!--begin::Row-->
                        <div class="row mb-7">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-bold text-muted">Full Name</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <span class="fw-bolder fs-6 text-dark">{{$application->user->firstname}} {{$application->user->middlename}} {{$application->user->lastanme}}</span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                        <!--begin::Input group-->
                        <div class="row mb-7">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-bold text-muted">Date of Birth</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <span class="fw-bold fs-6">{{$application->user->dob}}</span>
                            </div>
                            <!--end::Col-->
                        </div>

                          <!--begin::Input group-->
                        <div class="row mb-7">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-bold text-muted">Gender</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <span class="fw-bold fs-6">{{$application->user->gender}}</span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                         <!--begin::Input group-->
                         <div class="row mb-7">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-bold text-muted">Address</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <span class="fw-bold fs-6">{{$application->user->address}}</span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-7">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-bold text-muted">Contact Phone
                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Phone number must be active"></i></label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 d-flex align-items-center">
                                <span class="fw-bolder fs-6 me-2">{{$application->user->mobilenumber}}</span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-7">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-bold text-muted">Email</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <a href="#" class="fw-bold fs-6 text-dark text-hover-primary">{{$application->user->mobilenumber}}</a>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-7">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-bold text-muted">Nationaliy
                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Country of origination"></i></label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <span class="fw-bolder fs-6 text-dark">{{$application->user->nationality}}</span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-7">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-bold text-muted">State</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <span class="fw-bolder fs-6 text-dark">{{$application->user->state}}</span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-10">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-bold text-muted">LGA</label>
                            <!--begin::Label-->
                            <!--begin::Label-->
                            <div class="col-lg-8">
                                <span class="fw-bold fs-6">{{$application->user->lga}}</span>
                            </div>
                            <!--begin::Label-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Notice-->
                        
                        <!--end::Notice-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::details View-->
                <!--begin::Row-->
                <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
                    <!--begin::Card header-->
                    <div class="card-header cursor-pointer">
                        <!--begin::Card title-->
                        <div class="card-title m-0">
                            <h3 class="fw-bolder m-0">Guardian Details</h3>
                        </div>
                        <!--end::Card title-->
                        <!--begin::Action-->
                        <!--end::Action-->
                    </div>
                    <!--begin::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body p-9">
                        <!--begin::Row-->
                        <div class="row mb-7">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-bold text-muted">Full Name</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <span class="fw-bolder fs-6 text-dark">{{$application->user->guardian_firstname}} {{$application->user->guardian_middlename}} {{$application->user->guardian_surname}}</span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                        <!--begin::Input group-->
                      

                          <!--begin::Input group-->
                        <div class="row mb-7">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-bold text-muted">Gender</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <span class="fw-bold fs-6">{{$application->user->guardian_gender}}</span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                         <!--begin::Input group-->
                         <div class="row mb-7">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-bold text-muted">Address</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <span class="fw-bold fs-6">{{$application->user->guardian_contact	}}</span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-7">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-bold text-muted">Contact Phone
                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Phone number must be active"></i></label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 d-flex align-items-center">
                                <span class="fw-bolder fs-6 me-2">{{$application->user->guardian_mobile}}</span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-7">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-bold text-muted">Email</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <a href="#" class="fw-bold fs-6 text-dark text-hover-primary">{{$application->user->guardian_email	}}</a>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                       
                        <!--end::Input group-->
                        <!--begin::Notice-->
                        
                        <!--end::Notice-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
                                    <!--begin::Card header-->
                                    <div class="card-header cursor-pointer">
                                        <!--begin::Card title-->
                                        <div class="card-title m-0">
                                            <h3 class="fw-bolder m-0">Academic Details</h3>
                                        </div>
                                        <!--end::Card title-->
                                        <!--begin::Action-->
                                        <!--end::Action-->
                                    </div>
                                    <!--begin::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body p-9">
                                        <!--begin::Row-->
                                        <div class="row mb-7">
                                            <!--begin::Label-->
                                            <label class="col-lg-4 fw-bold text-muted">Admission Type</label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8">
                                                <span class="fw-bolder fs-6 text-dark">{{$application->user->admission_type}}</span>
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Input group-->
                                        @if(isset($application->user->jamb_year))

                
                                          <!--begin::Input group-->
                                        <div class="row mb-7">
                                            <!--begin::Label-->
                                            <label class="col-lg-4 fw-bold text-muted">Jamb Number</label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8 fv-row">
                                                <span class="fw-bold fs-6">{{$application->user->jamb_no}}</span>
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->
                                         <!--begin::Input group-->
                                         <div class="row mb-7">
                                            <!--begin::Label-->
                                            <label class="col-lg-4 fw-bold text-muted">Jamb Year</label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-8 fv-row">
                                                <span class="fw-bold fs-6">{{$application->user->jamb_year	}}</span>
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->

                                        <div class="row mb-7">
                                            <!--begin::Label-->
                                            <h3 class="fw-bolder m-0">Jamb Result</h3>

                                            <table class="table table-row-bordered align-middle gy-4 gs-9">
                                                <thead class="border-bottom border-gray-200 fs-6 text-gray-600 fw-bolder bg-light bg-opacity-75">
                                                    <tr>
                                                        <td class="min-w-150px">Subject</td>
                                                        <td class="min-w-250px">Results</td>
                                                        

                                                    </tr>
                                                </thead>
                                                <tbody class="fw-bold text-gray-600">
                                                    <!--begin::Table row-->
                                                    <tr>
                                                        <td>{{$application->user->jamb_sub1}}</td>
                                                        <td>{{$application->user->jamb_sub1score}}</td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>{{$application->user->jamb_sub2}}</td>
                                                        <td>{{$application->user->jamb_sub2score}}</td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>{{$application->user->jamb_sub3}}</td>
                                                        <td>{{$application->user->jamb_sub3score}}</td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>{{$application->user->jamb_sub4}}</td>
                                                        <td>{{$application->user->jamb_sub4score}}</td>
                                                        
                                                    </tr>
                                                    <!--end::Table row-->
                                                    <!--begin::Table row-->
                                                   
                                                </tbody>
                                            </table>
                                            <!--end::Col-->
                                        </div>
                                        @else
                                        <h3 class="col-lg-4 fw-bold text-danger">Jamb Not avaialble</h3>
                                        @endif
                                        <!--begin::Input group-->
                                        <div class="row mb-7">
                                            <!--begin::Label-->
                                            <h3 class="fw-bolder m-0">Exams</h3>

                                            <table class="table table-row-bordered align-middle gy-4 gs-9">
                                                <thead class="border-bottom border-gray-200 fs-6 text-gray-600 fw-bolder bg-light bg-opacity-75">
                                                    <tr>
                                                        <td class="min-w-150px">Exam Type</td>
                                                        <td class="min-w-250px">Exam Center</td>
                                                        <td class="min-w-250px">Reg No</td>
                                                        <td class="min-w-250px">Exam Year</td>

                                                    </tr>
                                                </thead>
                                                <tbody class="fw-bold text-gray-600">
                                                    <!--begin::Table row-->
                                                    @foreach($application->user->exams as $item)
                                                    <tr>
                                                        <td>{{$item->exam_type}}</td>
                                                        <td>{{$item->exam_center}}</td>
                                                        <td>{{$item->reg_no}}</td>
                                                        <td>{{$item->exam_year}}</td>
                                                    </tr>
                                                    @endforeach
                                                    <!--end::Table row-->
                                                    <!--begin::Table row-->
                                                   
                                                </tbody>
                                            </table>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                       
                                        <!--end::Input group-->
                                        <!--begin::Notice-->
                                        
                                        <!--end::Notice-->
                                    </div>
                                    <!--end::Card body-->
                 </div>
                 <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
                 <div class="card">
                    <!--begin::Card header-->
                    <div class="card-header card-header-stretch border-bottom border-gray-200">
                        <!--begin::Title-->
                        <div class="card-title">
                            <h3 class="fw-bolder m-0">Uploaded Files</h3>
                        </div>
                        <!--end::Title-->
                        <!--begin::Toolbar-->
                        
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Tab Content-->
                    <div class="tab-content">
                        <!--begin::Tab panel-->
                      
                        <!--end::Tab panel-->
                        <!--begin::Tab panel-->
                        <div id="kt_billing_year" class="card-body p-0 tab-pane fade active show" role="tabpanel" aria-labelledby="kt_billing_year">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table table-row-bordered align-middle gy-4 gs-9">
                                    <thead class="border-bottom border-gray-200 fs-6 text-gray-600 fw-bolder bg-light bg-opacity-75">
                                        <tr>
                                            <td class="min-w-150px">Title</td>
                                            <td class="min-w-250px">Description</td>
                                            <td class="min-w-150px">PDF</td>
                                        </tr>
                                    </thead>
                                    <tbody class="fw-bold text-gray-600">
                                        <!--begin::Table row-->
                                        @foreach($application->user->files as $item)
                                        <tr>
                                            <td>{{$item->title}}</td>
                                            <td>
                                                {{$item->description}}
                                            </td>
                                            <td><a href="{{$item->file}}" class="btn btn-sm btn-light btn-active-light-primary">PDF</a></td>
                                            
                                            
                                        </tr>
                                        @endforeach
                                        <!--end::Table row-->
                                        <!--begin::Table row-->
                                       
                                    </tbody>
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--end::Tab panel-->
                        <!--begin::Tab panel-->
                        
                        <!--end::Tab panel-->
                    </div>
                    <!--end::Tab Content-->
                </div></div>
                @foreach ($application->user->exams as $item)
                <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">

                <div class="card">
                    <!--begin::Card header-->
                    <div class="card-header card-header-stretch border-bottom border-gray-200">
                        <!--begin::Title-->
                        <div class="card-title">
                            <h3 class="fw-bolder m-0">{{$item->exam_type}} Results</h3>

                        </div> 
                        <!--end::Title-->
                        <!--begin::Toolbar-->
                        <p class="align-self-center">Exam Center</p>
                        <a class="btn btn-primary align-self-center">{{$item->exam_center}}</a>
                        <p class="align-self-center">Reg No</p>

                        <a class="btn btn-primary align-self-center">{{$item->reg_no}}</a>
                        <p class="align-self-center">Year</p>

                        <a class="btn btn-primary align-self-center">{{$item->exam_year}}</a>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Tab Content-->
                    <div class="tab-content">
                        <!--begin::Tab panel-->
                      
                        <!--end::Tab panel-->
                        <!--begin::Tab panel-->
                        <div id="kt_billing_year" class="card-body p-0 tab-pane fade active show" role="tabpanel" aria-labelledby="kt_billing_year">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table table-row-bordered align-middle gy-4 gs-9">
                                    <thead class="border-bottom border-gray-200 fs-6 text-gray-600 fw-bolder bg-light bg-opacity-75">
                                        <tr>
                                            <td class="min-w-150px">Subject</td>
                                            <td class="min-w-250px">Grade</td>
                                        </tr>
                                    </thead>
                                    <tbody class="fw-bold text-gray-600">
                                        <!--begin::Table row-->
                                        @foreach($item->results as $item)
                                        <tr>
                                            <td>{{$item->subject}}</td>
                                            <td>
                                                {{$item->grade}}
                                            </td>
                                            
                                            
                                        </tr>
                                        @endforeach
                                        <!--end::Table row-->
                                        <!--begin::Table row-->
                                       
                                    </tbody>
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--end::Tab panel-->
                        <!--begin::Tab panel-->
                        
                        <!--end::Tab panel-->
                    </div>
                    <!--end::Tab Content-->
                </div>
                </div>
                @endforeach
                
                                <!--end::Row-->
            
                            </div>
            
                            <!--end::Container-->
        
                        </div>
        <!--end::Post-->
    </div>
    <div class="modal fade" id="kt_modal_new_card" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2>Add Scholarship</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <!--begin::Svg Icon | path: icons/stockholm/Navigation/Close.svg-->
                        <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
                                    <rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
                                    <rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1" />
                                </g>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                    <!--begin::Form-->
                    <form id="kt_modal_new_card_form" class="form" action="{{route('postupload')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-7 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                <span class="required">Title</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid" placeholder="" name="title" value="" />
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-7 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                <span class="required">Description</span>
                            </label>
                            <!--end::Label-->
                            <textarea class="form-control form-control-solid" placeholder="" name="description" value="" ></textarea>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-7 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                <span class="required">File</span>
                            </label>
                            <!--end::Label-->
                            <input type="file" class="form-control form-control-solid" placeholder="" name="file" value="" />
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                       
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="text-center pt-15">
                            <button type="submit" id="kt_modal_new_card_submit12" class="btn btn-primary">
                                <span class="indicator-label">Submit</span>
                                <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <div class="modal fade" id="kt_modal_share_earn" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-800px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <!--begin::Svg Icon | path: icons/stockholm/Navigation/Close.svg-->
                        <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
                                    <rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
                                    <rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1" />
                                </g>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <!--begin::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body scroll-y pt-0 pb-15">
                    <!--begin::Wrapper-->
                    <div class="mw-lg-600px mx-auto">
                        <!--begin::Heading-->
                        <div class="mb-13 text-center">
                            <!--begin::Title-->
                            <h1 class="mb-3">Accept the Application</h1>
                            <!--end::Title-->
                            <!--begin::Description-->
                            <form action="{{route('admin.applications.approve',$application->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                            <div class="text-gray-400 fw-bold fs-5">Add Offer Letter
                                <input type="file" class="form-control form-control-solid" placeholder="" name="offerletter" value="" />

                            <!--end::Description-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Input group-->
                        
                        <!--end::Input group-->
                        <!--begin::Actions-->
                       
                        <!--end::Actions-->
                        <!--begin::Input group-->
                        <div class="d-flex align-items-center mt-10">
                            <!--begin::Label-->
                            <div class="flex-grow-1">
                                <button type="submit"  class="btn btn-sm btn-success me-3">Accept</button>
                            </div>
                        </form>
                            <!--end::Label-->
                            <!--begin::Switch-->
                            
                            <!--end::Switch-->
                        </div>
                        <!--end::Input group-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    
   
        <script src="{{asset('assets/plugins/global/plugins.bundle.js')}}"></script>
    
        <link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css"/>
        <script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
        <script>$("#kt_datatable_example_1").DataTable();</script>
    
        
   @endsection