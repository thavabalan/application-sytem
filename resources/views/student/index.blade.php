<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="row gy-5 g-xl-8">
        <!--begin::Col-->
        <div class="col-xxl-6">
            <!--begin::Mixed Widget 2-->
            <div class="card bgi-no-repeat card-xl-stretch mb-xl-8" style="background-position: right top; background-size: 30% auto; background-image: url(assets/media/svg/shapes/abstract-4.svg)">
                <!--begin::Body-->
                <div class="card-body">
                    <a href="{{Route('application.scholarship')}}/1" class="card-title fw-bolder text-muted text-hover-primary fs-4">Admission without scholarship</a>
                    <div class="fw-bolder text-primary my-6">Processing</div>
                    
                </div>
                <!--end::Body-->
            </div>
            <!--end::Mixed Widget 2-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xxl-6">
            <!--begin::Mixed Widget 2-->
            <div class="card  bgi-no-repeat card-xl-stretch mb-xl-8" style="background-position: right top; background-size: 30% auto; background-image: url(assets/media/svg/shapes/abstract-4.svg)">
                <!--begin::Body-->
                <div class="card-body ">
                    <a href="{{Route('application.scholarship')}}" class="card-title fw-bolder text-muted text-hover-primary fs-4">Admission with scholarship</a>
                    <div class="fw-bolder text-primary my-6">Processing</div>
                    
                </div>
                <!--end::Body-->
            </div>
            <!--end::Mixed Widget 2-->
        </div>
        <!--end::Col-->
    </div>
    <x-slot name="script">
    </x-slot>
</x-app-layout>
