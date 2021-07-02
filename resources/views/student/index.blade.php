<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
<div class="row">
    <div class="col-sm-12">
        <div class="col bg-success px-6 py-8 rounded-2 me-7 mb-7">
            <!--begin::Svg Icon | path: icons/stockholm/Media/Equalizer.svg-->
            <h1>Notification</h1>
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
            @foreach ($notifications as $item)
            <!--end::Svg Icon-->
            <h4 class="text-warning fw-bold fs-6">{{$item->text}}</h4>
            @endforeach
        </div>
    </div>
</div>
    <div class="row gy-5 g-xl-8">
        <!--begin::Col-->
        <div class="col-xxl-6">
            <!--begin::Mixed Widget 2-->
            <div class="col bg-light-info px-6 py-8 rounded-2 me-7 mb-7">
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
                <a href="{{Route('newapplication')}}" class="text-warning fw-bold fs-6">New Application</a>
            </div>
            <!--end::Mixed Widget 2-->
        </div>
        <div class="col-xxl-6">
            <!--begin::Mixed Widget 2-->
            <div class="col bg-light-danger px-6 py-8 rounded-2 me-7 mb-7">
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
                <a href="{{Route('applications')}}" class="text-warning fw-bold fs-6">Application Status</a>
            </div>
            <!--end::Mixed Widget 2-->
        </div>
        <!--end::Col-->
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
                <!--end::Svg Icon-->
                <a href="{{Route('studentnotification')}}" class="text-warning fw-bold fs-6">Notification</a>
            </div>
           
            <!--end::Mixed Widget 2-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xxl-4">
            <!--begin::Mixed Widget 2-->
            <div class="col bg-light-success px-6 py-8 rounded-2 me-7 mb-7">
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
                <a href="{{Route('result')}}" class="text-warning fw-bold fs-6">My results</a>
            </div>
            <!--end::Mixed Widget 2-->
        </div>
        <!--end::Col-->
          <!--begin::Col-->
          <div class="col-xxl-4">
            <!--begin::Mixed Widget 2-->
            <div class="col bg-light-primary px-6 py-8 rounded-2 me-7 mb-7">
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
                <a href="{{Route('upload')}}" class="text-warning fw-bold fs-6">My files</a>
            </div>
            <!--end::Mixed Widget 2-->
        </div>
        <!--end::Col-->
          <!--begin::Col-->
         
        
    </div>
    <x-slot name="script">
    </x-slot>
</x-app-layout>
