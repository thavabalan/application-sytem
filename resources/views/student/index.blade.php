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
            
            <h5>Good day {{Auth::user()->firstname}} {{Auth::user()->middlename}} {{Auth::user()->surname}}. <br/> Please click new course Registration to do course selection submission. <br/> Below are your latest notifications</h5>
            @foreach ($notifications as $item)

            <!--end::Svg Icon-->
            <h5>{{$item->updated_at}}: {{$item->text}}</h5>
            @endforeach
        </div>
    </div>
</div>
    <div class="row gy-5 g-xl-8">
        <!--begin::Col-->
        <div class="col-xxl-6">
            <!--begin::Mixed Widget 2-->
            <div class="col bg-light-success px-6 py-8 rounded-2 me-7 mb-7">
                <!--begin::Svg Icon | path: icons/stockholm/Media/Equalizer.svg-->
                <span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"></rect>
                            <rect fill="#750000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5"></rect>
                            <rect fill="#750000" x="8" y="9" width="3" height="11" rx="1.5"></rect>
                            <rect fill="#750000" x="18" y="11" width="3" height="9" rx="1.5"></rect>
                            <rect fill="#750000" x="3" y="13" width="3" height="7" rx="1.5"></rect>
                        </g>
                    </svg>
                </span>
                <!--end::Svg Icon-->
                <a style="text-align:center;vertical-align:middle;font-size: 14px;color:black;" >  You have  {{$application_count}} Submitted Applications <br/></a>
                <a href="{{Route('newapplication')}}" class="btn btn-sm btn-primary me-2" >New Course Registration</a>
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
              <a style="text-align:center;vertical-align:middle;font-size: 14px;color:black;" >
              
                You have {{$approved_count}} Approved & {{$rejected_count}} Rejected Applications<br/>
                </a>
                <a href="{{Route('applications')}}" class="btn btn-sm btn-primary me-2" > View Detailed Status</a>
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
                <a href="{{Route('studentnotification')}}" style="text-align:center;vertical-align:middle;font-size: 14px;font-weight: bold;color:blue;" >Notification</a>
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
                <a href="{{Route('result')}}" style="text-align:center;vertical-align:middle;font-size: 14px;font-weight: bold;color:blue;" >My results</a>
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
                <a href="{{Route('upload')}}" style="text-align:center;vertical-align:middle;font-size: 14px;font-weight: bold;color:blue;" >My files</a>
            </div>
            <!--end::Mixed Widget 2-->
        </div>
        <!--end::Col-->
          <!--begin::Col-->
         <table >

    <td valign="middle" align="center"> <h1 class="text-dark mb-3">Application Tutorial</h1> <iframe width="100%" height="315" src="https://www.youtube.com/embed/qMtkC3dc9dY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
            </td>

</table>
        
    </div>
    <x-slot name="script">
    </x-slot>
</x-app-layout>
