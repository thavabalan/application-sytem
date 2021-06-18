
@extends('layouts.guest')    
@section('content')
    
<div class="d-flex flex-column flex-root">
    <!--begin::Authentication - Sign-in -->
    <div class="d-flex flex-column flex-lg-row flex-column-fluid">
        <!--begin::Aside-->
        <div class="d-flex flex-column flex-lg-row-auto w-xl-600px" >
            <!--begin::Header-->
            <div class="d-flex flex-column text-center p-10 pt-lg-20">
                <!--begin::Logo-->
                <a href="/" class="py-9">
                    <img alt="Logo" src="assets/media/miu logo.png" class="h-300px" />
                </a>
                <!--end::Logo-->
                <!--begin::Title-->
                <h1 class="fw-bolder fs-2qx pb-5 pb-md-10" >Welcome To MIU Central Scholarships Portal</h1>
                <!--end::Title-->
                <!--begin::Description-->
                <p class="fw-bold fs-2" style="color: #986923;">Don't Have an Account
                </p>
                <div class="text-center">

                <a href="{{route('register')}}" class="btn btn-primary w-100px" >Sign Up</a>
                </div>
                <!--end::Description-->
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
                <div class="w-lg-500px p-10 p-lg-15 mx-auto">
                    <!--begin::Form-->
                    <form class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate" method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <!--begin::Heading-->
                        <div class="text-center mb-10">
                            <!--begin::Title-->
                            <h1 class="text-dark mb-3">Forgot Password ?</h1>
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />
                            <!--end::Title-->
                            <!--begin::Link-->
                            <div class="text-gray-400 fw-bold fs-4">Enter your email to reset your password.</div>
                            <!--end::Link-->
                        </div>
                        <!--begin::Heading-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-10 fv-plugins-icon-container">
                            <label class="form-label fw-bolder text-gray-900 fs-6">Email</label>
                            <input class="form-control form-control-solid" type="email" placeholder="" name="email" autocomplete="off">
                        <div class="fv-plugins-message-container"></div></div>
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="d-flex flex-wrap justify-content-center pb-lg-0">
                            <button type="submit" id="kt_password_reset_submit" class="btn btn-lg btn-primary fw-bolder me-4">
                                <span class="indicator-label">Submit</span>
                                <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                        <!--end::Actions-->
                    <div></div></form>
                    <!--end::Form-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Content-->
            <!--begin::Footer-->
           
            <!--end::Footer-->
        </div>
        <!--end::Body-->
    </div>
    <!--end::Authentication - Sign-in-->
</div>

    @endsection
