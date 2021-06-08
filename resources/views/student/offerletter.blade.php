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
                                    <th class="min-w-100px sorting_disabled" rowspan="1" colspan="1" >Application ID</th>
                                    <th class="min-w-100px sorting_disabled" rowspan="1" colspan="1" >Scholarship Category</th>
                                    <th class="min-w-100px sorting_disabled" rowspan="1" colspan="1" >Course Preference</th>
                                    <th class="min-w-100px sorting_disabled" rowspan="1" colspan="1">Offer letter copy </th>

                                    
                                </tr>
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="text-gray-600">
                                
                                @foreach ($applications as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->scholarship->title}}</td>
                                        <td>{{$item->course->title}}</td>
                                        <td>
                                           
                                            <a href="{{$item->offer_letter}}" class="menu-link px-3">Your offerletter</a>
                                           
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
</x-app-layout>
