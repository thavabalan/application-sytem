<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="row gy-5 g-xl-8">
        <!--begin::Col-->
        
        <div class="col-xxl-12">
            <!--begin::Mixed Widget 2-->
            <div class="card card-flush pt-3 mb-5 mb-lg-10">
                <!--begin::Card header-->
                <div class="card-header">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h2 class="fw-bolder">Your Applications</h2>
                    </div>
                    <!--begin::Card title-->
                    <!--begin::Card toolbar-->
                    
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Table wrapper-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <div id="kt_subscription_products_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="table-responsive">
                            <table class="table align-middle table-row-dashed fs-6 fw-bold gy-4 dataTable no-footer" id="kt_subscription_products_table" role="grid">
                            <!--begin::Table head-->
                            <thead>
                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0" role="row">
                                    <th class="min-w-100px sorting_disabled" rowspan="1" colspan="1" >Course Name</th>
                                    <th class="min-w-100px sorting_disabled" rowspan="1" colspan="1" >Scholarship</th>
                                    
                                    <th class="min-w-100px sorting_disabled" rowspan="1" colspan="1">Status </th>

                                    
                                </tr>
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="text-gray-600">
                                
                                @foreach ($applications as $item)
                                    <tr>
                                        <td>{{$item->course->degree_in_view}} {{$item->course->title}}</td>
                                        <td>{{$item->scholarship->title}}</td>
                                        <td>
                                            @if($item->status === 'Submitted')
                                            <span class="badge badge-light-primary fs-8 fw-bolder">Submitted</span>
                                            @elseif($item->status === 'Processing')
                                            <span class="badge badge-light-warning fs-8 fw-bolder">Processing</span>
                                            @elseif($item->status === 'Approved')
                                            <span class="badge badge-light-success fs-8 fw-bolder">Accepted</span>
                                            <a href="{{$item->offer_letter}}" target="_blank" class="menu-link px-3">Your offerletter</a>
                                            @elseif($item->status === 'Rejected')
                                            <span class="badge badge-light-danger fs-8 fw-bolder">Rejected</span>
                                            @endif
                                        </td>
                                        </td>
                                    </tr>
                                @endforeach
                                
                                
                                
                               <!--end::Table body-->
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start">
                            </div>
                            <div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                                </div>
                            </div>
                        </div>
                        <!--end::Table-->
                    </div>
                    <!--end::Table wrapper-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Mixed Widget 2-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
       
        <!--end::Col-->
    </div>
   
   <x-slot name="script">
       
   </x-slot>
   <h2 align="center" class="fw-bolder">Latest updates on Facebook</h2> <p align="center"> 
   <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fmewaruniversitynigeria&tabs=timeline%2C%20%20events%2C%20messages&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=2996869833749594" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe></p>
</x-app-layout>
