<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="row gy-5 g-xl-8">
        
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Files</h3>
                    <div class="card-toolbar">
                        <button type="button" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">
                            Upload file
                        </button>
                    </div>
                </div>
                <div class="card-body">

            <table id="kt_datatable_example_1" class="table table-row-bordered gy-5">
                <thead>
                    <tr class="fw-bold fs-6 text-muted">
                        <th>Title</th>
                        <th>Description</th>
                        <th class="text-end">View File</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach ($files as $item)
                       <tr>
                           <td>{{$item->title}}</td>
                           <td>{{$item->description}}</td>
                           <td><a href="{{$item->file}}" target="_blank" class="menu-link px-3">View</a>
                           </td>
                       </tr>

                   @endforeach
                   
                    
                </tbody>
                
            </table>
                </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">               Highschool (SSCE/UTME)
                </h3>

            </div>
            <div class="card-body">
                <form id="kt_modal_new_card_form" class="form" action="{{route('postupload')}}" method="POST" enctype="multipart/form-data">
                    
                    @csrf
                    <div class="d-flex flex-column mb-7 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">File</span>
                        </label>
                        <!--end::Label-->
                        <input type="hidden" class="form-control form-control-solid" placeholder="" name="title" value="Highschool (SSCE/UTME)" />
                        <input type="hidden" class="form-control form-control-solid" placeholder="" name="description" value="Highschool (SSCE/UTME)" />

                        <input type="file" class="form-control form-control-solid" placeholder="" name="file" value="" required/>
                    </div>
                    <div class="text-center pt-15">
                        <button type="submit" id="kt_modal_new_card_submit12" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">2nd Seat Highschool (SSCE/UTME)
                </h3>

            </div>
            <div class="card-body">
                <form id="kt_modal_new_card_form" class="form" action="{{route('postupload')}}" method="POST" enctype="multipart/form-data">
                    
                    @csrf
                    <div class="d-flex flex-column mb-7 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">File</span>
                        </label>
                        <!--end::Label-->
                        <input type="hidden" class="form-control form-control-solid" placeholder="" name="title" value="2nd Seat Highschool (SSCE/UTME)" />
                        <input type="hidden" class="form-control form-control-solid" placeholder="" name="description" value="2nd Seat Highschool (SSCE/UTME)" />

                        <input type="file" class="form-control form-control-solid" placeholder="" name="file" value="" required/>
                    </div>
                    <div class="text-center pt-15">
                        <button type="submit" id="kt_modal_new_card_submit12" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">JAMB
                </h3>

            </div>
            <div class="card-body">
                <form id="kt_modal_new_card_form" class="form" action="{{route('postupload')}}" method="POST" enctype="multipart/form-data">
                    
                    @csrf
                    <div class="d-flex flex-column mb-7 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">File</span>
                        </label>
                        <!--end::Label-->
                        <input type="hidden" class="form-control form-control-solid" placeholder="" name="title" value="JAMB" />
                        <input type="hidden" class="form-control form-control-solid" placeholder="" name="description" value="JAMB" />

                        <input type="file" class="form-control form-control-solid" placeholder="" name="file" value="" required/>
                    </div>
                    <div class="text-center pt-15">
                        <button type="submit" id="kt_modal_new_card_submit12" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">University Transcript (If transfer case)
                </h3>

            </div>
            <div class="card-body">
                <form id="kt_modal_new_card_form" class="form" action="{{route('postupload')}}" method="POST" enctype="multipart/form-data">
                    
                    @csrf
                    <div class="d-flex flex-column mb-7 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">File</span>
                        </label>
                        <!--end::Label-->
                        <input type="hidden" class="form-control form-control-solid" placeholder="" name="title" value=" University Transcript (If transfer case)" />
                        <input type="hidden" class="form-control form-control-solid" placeholder="" name="description" value=" University Transcript (If transfer case)" />

                        <input type="file" class="form-control form-control-solid" placeholder="" name="file" value="" required/>
                    </div>
                    <div class="text-center pt-15">
                        <button type="submit" id="kt_modal_new_card_submit12" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"> Any ID (Passport/Driving Licence etc)
                </h3>

            </div>
            <div class="card-body">
                <form id="kt_modal_new_card_form" class="form" action="{{route('postupload')}}" method="POST" enctype="multipart/form-data">
                    
                    @csrf
                    <div class="d-flex flex-column mb-7 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">File</span>
                        </label>
                        <!--end::Label-->
                        <input type="hidden" class="form-control form-control-solid" placeholder="" name="title" value="Any National ID" />
                        <input type="hidden" class="form-control form-control-solid" placeholder="" name="description" value=" Any National ID" />

                        <input type="file" class="form-control form-control-solid" placeholder="" name="file" value="" required/>
                    </div>
                    <div class="text-center pt-15">
                        <button type="submit" id="kt_modal_new_card_submit12" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">                Registration Fees Payment Proof
                </h3>

            </div>
            <div class="card-body">
                <form id="kt_modal_new_card_form" class="form" action="{{route('postupload')}}" method="POST" enctype="multipart/form-data">
                    
                    @csrf
                    <div class="d-flex flex-column mb-7 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">File</span>
                        </label>
                        <!--end::Label-->
                        <input type="hidden" class="form-control form-control-solid" placeholder="" name="title" value="   Registration Fees Payment Proof " />
                        <input type="hidden" class="form-control form-control-solid" placeholder="" name="description" value="   Registration Fees Payment Proof" />

                        <input type="file" class="form-control form-control-solid" placeholder="" name="file" value="" required/>
                    </div>
                    <div class="text-center pt-15">
                        <button type="submit" id="kt_modal_new_card_submit12" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
    </div>
    <div class="modal fade" id="kt_modal_new_card" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2>Add File</h2>
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
                            <input type="file" class="form-control form-control-solid" placeholder="" name="file" value="" required />
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
 <x-slot name="script">
    <script src="assets/plugins/global/plugins.bundle.js"></script>

    <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css"/>
    <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
    
    
 </x-slot>
</x-app-layout>
