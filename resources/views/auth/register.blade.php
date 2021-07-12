@extends('layouts.guest')    
@section('content')
<div class="d-flex flex-column flex-root">
    <!--begin::Authentication - Multi-steps-->
    <div class="d-flex flex-column flex-lg-row flex-column-fluid stepper stepper-pills stepper-column" id="kt_create_account_stepper">
        <!--begin::Aside-->
        <div class="d-flex flex-column flex-lg-row-auto w-xl-500px bg-lighten shadow">
            <!--begin::Header-->
            <div class="d-flex flex-column flex-center p-10 pt-lg-20">
                <!--begin::Logo-->
                <a href="/" class="mb-10 mb-lg-20">
                    <img alt="Logo" src="assets/media/logo1.png" class="h-45px" />
                </a>
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <!--end::Logo-->
                <!--begin::Nav-->
                <div class="stepper-nav">
                    <!--begin::Step 1-->
                    <div class="stepper-item current" data-kt-stepper-element="nav">
                        <!--begin::Line-->
                        <div class="stepper-line w-40px"></div>
                        <!--end::Line-->
                        <!--begin::Icon-->
                        <div class="stepper-icon w-40px h-40px">
                            <i class="stepper-check fas fa-check"></i>
                            <span class="stepper-number">1</span>
                        </div>
                        <!--end::Icon-->
                        <!--begin::Label-->
                        <div class="stepper-label">
                            <h3 class="stepper-title">Bio Data</h3>
                            <div class="stepper-desc fw-bold">Fill your Personal Details</div>
                        </div>
                        <!--end::Label-->
                    </div>
                    <!--end::Step 1-->
                    <!--begin::Step 2-->
                    <div class="stepper-item" data-kt-stepper-element="nav">
                        <!--begin::Line-->
                        <div class="stepper-line w-40px"></div>
                        <!--end::Line-->
                        <!--begin::Icon-->
                        <div class="stepper-icon w-40px h-40px">
                            <i class="stepper-check fas fa-check"></i>
                            <span class="stepper-number">2</span>
                        </div>
                        <!--end::Icon-->
                        <!--begin::Label-->
                        <div class="stepper-label">
                            <h3 class="stepper-title">Profile Photo</h3>
                            <div class="stepper-desc fw-bold">Add your profile photo</div>
                        </div>
                        <!--end::Label-->
                    </div>
                    <!--end::Step 2-->
                    <!--begin::Step 3-->
                    <div class="stepper-item" data-kt-stepper-element="nav">
                        <!--begin::Line-->
                        <div class="stepper-line w-40px"></div>
                        <!--end::Line-->
                        <!--begin::Icon-->
                        <div class="stepper-icon w-40px h-40px">
                            <i class="stepper-check fas fa-check"></i>
                            <span class="stepper-number">3</span>
                        </div>
                        <!--end::Icon-->
                        <!--begin::Label-->
                        <div class="stepper-label">
                            <h3 class="stepper-title">Admission type</h3>
                            <div class="stepper-desc fw-bold">Fill your admission type</div>
                        </div>
                        <!--end::Label-->
                    </div>
                    <!--end::Step 3-->
                    <!--begin::Step 4-->
                    <div class="stepper-item" data-kt-stepper-element="nav">
                        <!--begin::Line-->
                        <div class="stepper-line w-40px"></div>
                        <!--end::Line-->
                        <!--begin::Icon-->
                        <div class="stepper-icon w-40px h-40px">
                            <i class="stepper-check fas fa-check"></i>
                            <span class="stepper-number">4</span>
                        </div>
                        <!--end::Icon-->
                        <!--begin::Label-->
                        <div class="stepper-label">
                            <h3 class="stepper-title">Guardian Information</h3>
                            <div class="stepper-desc fw-bold">Fill your Guardian Information</div>
                        </div>
                        <!--end::Label-->
                    </div>
                    <!--end::Step 4-->
                    <!--begin::Step 5-->
                    <div class="stepper-item" data-kt-stepper-element="nav">
                        <!--begin::Line-->
                        <div class="stepper-line w-40px"></div>
                        <!--end::Line-->
                        <!--begin::Icon-->
                        <div class="stepper-icon w-40px h-40px">
                            <i class="stepper-check fas fa-check"></i>
                            <span class="stepper-number">5</span>
                        </div>
                        <!--end::Icon-->
                        <!--begin::Label-->
                        <div class="stepper-label">
                            <h3 class="stepper-title">Jamb Result (If Available)</h3>
                            <div class="stepper-desc fw-bold">Congrats, you are almost done</div>
                        </div>
                        <!--end::Label-->
                    </div>
                    <!--end::Step 5-->
                    <!--begin::Step 5-->
                 
                    <!--end::Step 5-->
                </div>
                <!--end::Nav-->
            </div>
            <!--end::Header-->
            <!--begin::Illustration-->
            <!--end::Illustration-->
        </div>
        <!--begin::Aside-->
        <!--begin::Body-->
        <div class="d-flex flex-column flex-lg-row-fluid py-10">
            <!--begin::Content-->
            <div class="d-flex flex-center flex-column flex-column-fluid">
                <!--begin::Wrapper-->
                <div class="w-lg-100 p-10 p-lg-15 mx-auto">
                    <!--begin::Form-->
                    <form class="my-auto pb-5" novalidate="novalidate" id="kt_create_account_form" method="POST" action="{{route('register')}}" enctype="multipart/form-data">
                       
                        <!--begin::Step 1-->
                        <div class="current" data-kt-stepper-element="content">
                            <!--begin::Wrapper-->
                            <div class="w-100">
                                <!--begin::Heading-->
                                <div class="pb-10 pb-lg-15">
                                    <!--begin::Title-->
                                    <h2 class="fw-bolder d-flex align-items-center text-dark">Bio Data
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Billing is issued based on your selected account type"></i></h2>
                                    <!--end::Title-->
                                    <!--begin::Notice-->
                                    <div class="text-gray-400 fw-bold fs-6">Fill your Personal Details
                                    </div>
                                    <!--end::Notice-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="row">
                                        <!--begin::Col-->
                                        <div class="col-lg-4">
                                            <!--begin::Option-->
                                            @csrf
                                            <label class="form-label fw-bolder text-dark fs-6">First Name</label>
                                            <input class="form-control form-control-lg form-control-solid" type="text" placeholder="" name="firstname" autocomplete="off" />
                                            
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-lg-4">
                                            <!--begin::Option-->
                                            <!--begin::Option-->
                                            <label class="form-label fw-bolder text-dark fs-6">Middle Name</label>
                                            <input class="form-control form-control-lg form-control-solid" type="text" placeholder="" name="middlename" autocomplete="off" />
                               
                                            <!--end::Option-->
                                        </div>
                                            <!--end::Option-->
                                        <div class="col-lg-4">
                                            <!--begin::Option-->
                                            <label class="form-label fw-bolder text-dark fs-6">SurName</label>
                                            <input class="form-control form-control-lg form-control-solid" type="text" placeholder="" name="surname" autocomplete="off" />
                               
                                            <!--end::Option-->
                                        </div>

                                        <div class="col-lg-4">
                                            <!--begin::Option-->
                                            <label class="form-label fw-bolder text-dark fs-6">Email</label>
                                            <input class="form-control form-control-lg form-control-solid" type="email" placeholder="" name="email" autocomplete="off" />
                               
                                            <!--end::Option-->
                                        </div>
                                        <div class="col-lg-4">
                                            <!--begin::Option-->
                                            <label class="form-label fw-bolder text-dark fs-6">Mobile Number</label>
                                            <input class="form-control form-control-lg form-control-solid" type="tel" placeholder="" name="mobilenumber" autocomplete="off"  id="phone"/>
                               
                                            <!--end::Option-->
                                        </div>
                                        <div class="col-lg-4">
                                            <!--begin::Option-->
                                            <label class="form-label fw-bolder text-dark fs-6">Date of Birth</label>
                                            <input class="form-control form-control-solid" placeholder="Pick date rage" id="kt_daterangepicker_3" name="dob"/>
                               
                                            <!--end::Option-->
                                        </div>
                                        <div class="col-lg-12">
                                            <!--begin::Option-->
                                            <label class="form-label fw-bolder text-dark fs-6">Address</label>
                                            <textarea name="address" id="" rows="4" class="form-control form-control-lg form-control-solid"></textarea>
                               
                                            <!--end::Option-->
                                        </div>
                                        <div class="col-lg-3">
                                            <!--begin::Option-->
                                            <label class="form-label fw-bolder text-dark fs-6">Nationality</label>
                                            <select name="nationality" class="form-select form-select-lg form-select-solid" data-control="select2" data-placeholder="Select..." data-allow-clear="true" >
                                              @foreach($countries as $item)
                                                <option value="{{$item['name']}}">{{$item['name']}}</option>
                                                @endforeach
                                            </select>
                                            
                                            <!--end::Option-->
                                        </div>
                                        <div class="col-lg-3">
                                            <!--begin::Option-->
                                            <label class="form-label fw-bolder text-dark fs-6">State</label>
                                            
                                            <input class="form-control form-control-solid" type="text"  name="state"/>
                                       
                                            <!--end::Option-->
                                        </div>
                                      
                                        <div class="col-lg-3">
                                            <!--begin::Option-->
                                            <label class="form-label fw-bolder text-dark fs-6">Gender</label>
                                            <select name="gender" class="form-select form-select-lg form-select-solid" data-control="select2" data-placeholder="Select..." data-allow-clear="true" >
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="Other">Other</option>
                                            </select>
                                            <!--end::Option-->
                                        </div>
                                        <!--begin::Input group-->
                                        <div class="col-lg-6">
                                        <div class="mb-10 fv-row" data-kt-password-meter="true">
                                            <!--begin::Wrapper-->
                                            <div class="mb-1">
                                                <!--begin::Label-->
                                                <label class="form-label fw-bolder text-dark fs-6">Password</label>
                                                <!--end::Label-->
                                                <!--begin::Input wrapper-->
                                                <div class="position-relative mb-3">
                                                    <input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="password" autocomplete="off" />
                                                    <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                                                        <i class="bi bi-eye-slash fs-2"></i>
                                                        <i class="bi bi-eye fs-2 d-none"></i>
                                                    </span>
                                                </div>
                                                <!--end::Input wrapper-->
                                                <!--begin::Meter-->
                                                <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                                                </div>
                                                <!--end::Meter-->
                                            </div>
                                            <!--end::Wrapper-->
                                            <!--begin::Hint-->
                                            <div class="text-muted">Use 8 or more characters with a mix of letters, numbers &amp; symbols.</div>
                                            <!--end::Hint-->
                                        </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="fv-row mb-5">
                                                <label class="form-label fw-bolder text-dark fs-6">Confirm Password</label>
                                                <input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="password_confirmation" autocomplete="off" />
                                            </div>
                                            </div>
                                        <!--end::Input group=-->
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Step 1-->
                        <!--begin::Step 2-->
                        <div class="" data-kt-stepper-element="content">
                            <!--begin::Wrapper-->
                            <div class="w-100">
                                <!--begin::Heading-->
                                <div class="pb-10 pb-lg-15">
                                    <!--begin::Title-->
                                    <h2 class="fw-bolder text-dark">Passport Size Photo (below 1 mb)</h2>
                                    <!--end::Title-->
                                    <!--begin::Notice-->
                                    <div class="text-gray-400 fw-bold fs-6">Upload your Passport size photo
                                    </div>
                                    <!--end::Notice-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center form-label mb-3">Passport size photo (JPEG or JPG only) BELOW 1 MB
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Provide your passport size photo"></i></label>
                                    <!--end::Label-->
                                    <!--begin::Row-->
                                    <div class="row mb-2" data-kt-buttons="true">
                                        <!--begin::Col-->
                                        <div class="col">
                                            <!--begin::Option-->
                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" id="blah" class="img-fluid"></div>
                                                <input type="file" required="" class="image_path btn-primary btn-block" name="profile" id="imgInp">
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                       
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                    <!--begin::Hint-->
                                    <div class="form-text">UPLOAD ONLY JPEG/JPG FORMAT BELOW 1 MB</div>
                                    <!--end::Hint-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                              
                                <!--end::Input group-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Step 2-->
                        <!--begin::Step 3-->
                        <div class="" data-kt-stepper-element="content">
                            <!--begin::Wrapper-->
                            <div class="w-100">
                                <!--begin::Heading-->
                                <div class="pb-10 pb-lg-12">
                                    <!--begin::Title-->
                                    <h2 class="fw-bolder text-dark">Admission Type</h2>
                                    <!--end::Title-->
                                    <!--begin::Notice-->
                                    <div class="text-gray-400 fw-bold fs-6">Select your admission type.
                                </div>
                                    <!--end::Notice-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <div class="row">
                                        <!--begin::Col-->
                                        <div class="col-lg-6">
                                            <!--begin::Option-->
                                            <label class="form-label fw-bolder text-dark fs-6">Admission Category</label>
                                            <select name="admission_type" class="form-select form-select-lg form-select-solid" data-control="select2" data-placeholder="Select..." data-allow-clear="true" >
                                                <option value="">Select Application Type</option>                                            
                                                <option value="JAMB UTME">JAMB UTME</option>
                                                <option value="NON JAMB">NON JAMB</option>
                                                <option value="Local Transfer">National Transfer</option>
                                                <option value="Foreign Transfer">Foreign Transfer</option>
                                                <option value="Foreign Fresh Admission">Foreign Fresh Admission</option>

                                                <option value="Lateral Entry Admission">Lateral/Directly Entry Admission</option>
                                            </select>
                                            <!--end::Option-->
                                        </div>
                                        <div class="col-lg-6">
                                            <!--begin::Option-->
                                            <label class="form-label fw-bolder text-dark fs-6">Is Hostel required</label>
                                            <select name="is_hotel" class="form-select form-select-lg form-select-solid" data-control="select2" data-placeholder="Select..." data-allow-clear="true" >
                                                <option value="">Select Application Type</option>                                            
                                                <option value="Yes">Yes </option>
                                                <option value="No">No</option>
                                                <option value="Maybe">Maybe required</option>

                                                
                                            </select>
                                            <!--end::Option-->
                                        </div>
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                          
                                <!--end::Input group-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Step 3-->
                        <!--begin::Step 4-->
                        <div class="" data-kt-stepper-element="content">
                            <!--begin::Wrapper-->
                            <div class="w-100">
                                <!--begin::Heading-->
                                <div class="pb-10 pb-lg-15">
                                    <!--begin::Title-->
                                    <h2 class="fw-bolder text-dark">Guardian Details</h2>
                                    <!--end::Title-->
                                    <!--begin::Notice-->
                                    <div class="text-gray-400 fw-bold fs-6">Fill your guardian details
                                    </div>
                                    <!--end::Notice-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="row">
                                        <!--begin::Col-->
                                        <div class="col-lg-4">
                                            <!--begin::Option-->
                                            <label class="form-label fw-bolder text-dark fs-6">First Name</label>
                                            <input class="form-control form-control-lg form-control-solid" type="text" placeholder="" name="guardian_firstname" autocomplete="off" />
                               
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-lg-4">
                                            <!--begin::Option-->
                                            <!--begin::Option-->
                                            <label class="form-label fw-bolder text-dark fs-6">Middle Name</label>
                                            <input class="form-control form-control-lg form-control-solid" type="text" placeholder="" name="guardian_middlename" autocomplete="off" />
                               
                                            <!--end::Option-->
                                        </div>
                                            <!--end::Option-->
                                        <div class="col-lg-4">
                                            <!--begin::Option-->
                                            <label class="form-label fw-bolder text-dark fs-6">Surname</label>
                                            <input class="form-control form-control-lg form-control-solid" type="text" placeholder="" name="guardian_surname" autocomplete="off" />
                               
                                            <!--end::Option-->
                                        </div>

                                        <div class="col-lg-4">
                                            <!--begin::Option-->
                                            <label class="form-label fw-bolder text-dark fs-6">Email</label>
                                            <input class="form-control form-control-lg form-control-solid" type="email" placeholder="" name="guardian_email" autocomplete="off" />
                               
                                            <!--end::Option-->
                                        </div>
                                        <div class="col-lg-4">
                                            <!--begin::Option-->
                                            <label class="form-label fw-bolder text-dark fs-6">Mobile Number</label>
                                            <input class="form-control form-control-lg form-control-solid" type="text" placeholder="" name="guardian_mobile" autocomplete="off" />
                               
                                            <!--end::Option-->
                                        </div>
                                        <div class="col-lg-4">
                                            <!--begin::Option-->
                                            <label class="form-label fw-bolder text-dark fs-6">Gender</label>
                                            <select name="guardian_gender" class="form-select form-select-lg form-select-solid" data-control="select2" data-placeholder="Select..." data-allow-clear="true" >
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="Other">Other</option>
                                            </select>
                               
                                            <!--end::Option-->
                                        </div>
                                        <div class="col-lg-12">
                                            <!--begin::Option-->
                                            <label class="form-label fw-bolder text-dark fs-6">Address</label>
                                            <textarea name="guardian_contact" id="" rows="4" class="form-control form-control-lg form-control-solid"></textarea>
                               
                                            <!--end::Option-->
                                        </div>
                                       
                                        
                                       
                                        <!--begin::Input group-->
                                       
                                            
                                        <!--end::Input group=-->
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Step 4-->
                        <!--begin::Step 5-->
                        <div class="" data-kt-stepper-element="content">
                            <!--begin::Wrapper-->
                            <div class="w-100">
                                <!--begin::Heading-->
                                <div class="pb-10 pb-lg-12">
                                    <!--begin::Title-->
                                    <h2 class="fw-bolder text-dark">Jamb Result (If Available)</h2>
                                    <!--end::Title-->
                                    <!--begin::Notice-->
                                    <div class="text-gray-400 fw-bold fs-6">Your Jamb Result Details
                                </div>
                                    <!--end::Notice-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <div class="row">
                                        <!--begin::Col-->
                                        <div class="col-lg-6">
                                            <!--begin::Option-->
                                            <label class="form-label fw-bolder text-dark fs-6">Jamb Registration Number</label>
                                            <input class="form-control form-control-lg form-control-solid" type="text" placeholder="" name="jamb_no" autocomplete="off" />
                               
                                            <!--end::Option-->
                                        </div>
                                        <div class="col-lg-6">
                                            <!--begin::Option-->
                                            <label class="form-label fw-bolder text-dark fs-6">Jamb Year</label>
                                            <input class="form-control form-control-lg form-control-solid" type="text" placeholder="" name="jamb_year" autocomplete="off" />
                               
                                            <!--end::Option-->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!--begin::Col-->
                                        <div class="col-lg-6">
                                            <!--begin::Option-->
                                            <label class="form-label fw-bolder text-dark fs-6">JAMB Subjects (seperate subjects with coma)</label>
                                            <input class="form-control form-control-lg form-control-solid" type="text" placeholder="" name="jamb_sub1" autocomplete="off" />
                               
                                            <!--end::Option-->
                                        </div>
                                        <div class="col-lg-6">
                                            <!--begin::Option-->
                                            <label class="form-label fw-bolder text-dark fs-6">Total JAMB Score</label>
                                            <input class="form-control form-control-lg form-control-solid" type="text" placeholder="" name="jamb_sub1score" autocomplete="off" />
                               
                                            <!--end::Option-->
                                        </div>
                                    </div>
                                   
                                   
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                          
                                <!--end::Input group-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Step 5-->
                        <!--begin::Step 6-->
                        
                        <!--end::Step 6-->
                        <!--begin::Actions-->
                        <div class="d-flex flex-stack pt-15">
                            <div class="mr-2">
                                <button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
                                <!--begin::Svg Icon | path: icons/stockholm/Navigation/Left-2.svg-->
                                <span class="svg-icon svg-icon-4 me-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24" />
                                            <rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000)" x="14" y="7" width="2" height="10" rx="1" />
                                            <path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997)" />
                                        </g>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->Previous</button>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-lg btn-primary" data-kt-stepper-action="submit">
                                    <span class="indicator-label">Submit
                                    <!--begin::Svg Icon | path: icons/stockholm/Navigation/Right-2.svg-->
                                    <span class="svg-icon svg-icon-4 ms-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                <rect fill="#000000" opacity="0.5" transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)" x="7.5" y="7.5" width="2" height="9" rx="1" />
                                                <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                            </g>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></span>
                                    <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                                <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">Continue
                                <!--begin::Svg Icon | path: icons/stockholm/Navigation/Right-2.svg-->
                                <span class="svg-icon svg-icon-4 ms-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24" />
                                            <rect fill="#000000" opacity="0.5" transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)" x="7.5" y="7.5" width="2" height="9" rx="1" />
                                            <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                        </g>
                                    </svg>
                                </span>
                                <!--end::Svg Icon--></button>
                            </div>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Content-->
         
            <!--end::Footer-->
        </div>
        <!--end::Body-->
    </div>
    <!--end::Authentication - Multi-steps-->
</div>
@endsection
@section('script')
<script>
    const phoneInputField = document.querySelector("#phone");
    const phoneInput = window.intlTelInput(phoneInputField, {
      utilsScript:
        "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    });
  </script>
<script>
    $("#kt_daterangepicker_3").daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        minYear: 1901,
        maxYear: parseInt(moment().format())
    }, function(start, end, label) {
        $('kt_daterangepicker_3').val(start)
        
    }
);

imgInp.onchange = evt => {
  const [file] = imgInp.files
  if (file) {
    blah.src = URL.createObjectURL(file)
  }
}

</script>
@endsection
