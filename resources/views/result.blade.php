<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="row gy-5 g-xl-8">
        <!--begin::Col-->
        <div class="col-xxl-12">
            <div class="card card-flush pt-3 mb-5 mb-lg-10">
            <form action="{{route('save')}}" method="post">
                @csrf
                <div class="card-body pt-0">

            <div class="row">
                <div class="col-lg-3">
                    <!--begin::Option-->
                    <!--begin::Option-->
                    <label class="form-label fw-bolder text-dark fs-6">High School UTME/SSCE Exam Type</label>
                    <select name="OLevelExamType" id="ExamType" class="form-control">
                        <option value="">Select Exam Type</option>
                        <option value="WAEC">WAEC</option>
                        <option value="NECO">NECO</option>
                        <option value="NABTEB">NABTEB</option>
                        <option value="Other Board Exam">Other Board Exam</option>
                    </select>
                    <!--end::Option-->
                </div>
                    <!--end::Option-->
                <div class="col-lg-2">
                    <!--begin::Option-->
                    <label class="form-label fw-bolder text-dark fs-6">Exam Center/School</label>
                    <input type="text" required="" name="ExamCenter" id="ExamCenter" value="" class="form-control">      
                   
                    <!--end::Option-->
                </div>

                <div class="col-lg-2">
                    <!--begin::Option-->
                    <label class="form-label fw-bolder text-dark fs-6">Exam Registration Number</label>
                    <input type="text" required="" name="ExamNumber" id="ExamNumber" value="" class="form-control">       
                    <!--end::Option-->
                </div>
                <div class="col-lg-3">
                    <!--begin::Option-->
                    <label class="form-label fw-bolder text-dark fs-6">Exam Year</label>
                    <select name="ExamYear" id="ExamYear" class="form-control">
                        <option value="">Select Exam Year</option>
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                        <option value="2014">2014</option>
                        <option value="2013">2013</option>
                        <option value="2012">2012</option>
                        <option value="2011">2011</option>
                        <option value="2010">2010</option>
                        <option value="2009">2009</option>
                        <option value="2008">2008</option>
                        <option value="2007">2007</option>
                        <option value="2006">2006</option>
                        <option value="2005">2005</option>
                        <option value="2004">2004</option>
                        <option value="2003">2003</option>
                        <option value="2002">2002</option>
                        <option value="2001">2001</option>
                        <option value="2000">2000</option>
                        
                        <option value="1999">1999</option>
                        
                        <option value="1998">1998</option>
                        <option value="1997">1997</option>
                        <option value="1996">1996</option>
                        <option value="1995">1995</option>
                        <option value="1994">1994</option>
                        <option value="1993">1993</option>
                        <option value="1992">1992</option>
                        <option value="1991">1991</option>       
                                      <option value="Older">Older</option>                                         
                    </select>
                    <!--end::Option-->
                </div>
                <div class="col-lg-2 text-center align-bottom">
                    <!--begin::Option-->
                    <button type="submit" class="btn btn-sm btn-primary"  >Save</a>
                    <!--end::Option-->
                </div>
        </div></div>
    </form>
        </div></div>
        <div class="col-xxl-12">
            <!--begin::Mixed Widget 2-->
            <div class="card card-flush pt-3 mb-5 mb-lg-10">
                <!--begin::Card header-->
                <div class="card-header">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h2 class="fw-bolder">Results</h2>
                    </div>
                    <!--begin::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <button type="button" class="btn btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_product">Add Subjects Result</button>
                        <button type="button" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">
                            Upload Result
                        </button>
                    </div>
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
                                    <th class="min-w-100px sorting_disabled" rowspan="1" colspan="1" >Exam Type</th>
                                    <th class="min-w-100px sorting_disabled" rowspan="1" colspan="1" >Exam Registration Number</th>
                                    <th class="min-w-100px sorting_disabled" rowspan="1" colspan="1" >Exam Center/School</th>
                                    <th class="min-w-100px sorting_disabled" rowspan="1" colspan="1">Exam Year</th>
                                    <th class="min-w-100px  sorting_disabled" rowspan="1" colspan="1">Subject</th>
                                    <th class="min-w-100px  sorting_disabled" rowspan="1" colspan="1">Grade</th>
                                </tr>
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="text-gray-600">
                                
                                
                            @foreach ($exams as $item)
                            @foreach($item->results as $item2)
                            <tr class="odd">
                                
                                <td>{{$item2->exam->exam_type}}</td>
                                <td>{{$item2->exam->reg_no}}</td>
                                <td>{{$item2->exam->exam_center}}</td>
                                <td>{{$item2->exam->exam_year}}</td>
                                <td>{{$item2->subject}}</td>
                                <td>{{$item2->grade}}</td>
                                <td>
                                    <button type="button" class="btn btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_product{{$item2->id}}">Edit</button>
                                </td>
                                <div class="modal fade" id="kt_modal_add_product{{$item2->id}}" tabindex="-1" aria-hidden="true">
                                    <!--begin::Modal dialog-->
                                    <div class="modal-dialog modal-dialog-centered mw-650px">
                                        <!--begin::Modal content-->
                                        <div class="modal-content">
                                            <!--begin::Form-->
                                                <!--begin::Modal header-->
                                                <div class="modal-header">
                                                    <!--begin::Modal title-->
                                                    <h2 class="fw-bolder">Edit Result</h2>
                                                    <!--end::Modal title-->
                                                    <!--begin::Close-->
                                                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
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
                                                <div class="modal-body py-10 px-lg-17">
                                                    <!--begin::Label-->
                                                  
                                                    <!--end::Label-->
                                                    <!--begin::Scroll-->
                                                    <div class="scroll-y mh-300px me-n7 pe-7">
                                                        <!--begin::Product-->
                                                        <div class="row mb-10">
                                                        <div class="fv-row">
                                                            <form action="{{route('editresult',$item2->id)}}" method="POST" >
                                                                @csrf
                                                            <!--begin::Subscription-->
                                                            
                                                            <label class="d-flex align-items-center mb-5">
                                                                <!--begin::Radio-->
                                                                <div class="col-sm-4">
                                                                    <label class="form-label fw-bolder text-dark fs-6">Exam Type</label>
                                                                    <select name="exam_id" id="ExamType" class="form-control">
                                                                        <option value="">Select Exam Type</option>
                                                                        @foreach ($exams as $item)
                                                                        <option value="{{$item->id}}">{{$item->exam_type}}</option>  
                                                                        @endforeach
                                                                        
                                                                    </select>      
                                                                </div>                             
                                                                <!--end::Radio-->
                                                                <!--begin::Description-->
                                                                <div class="col-sm-4">
                            
                                                                    <label class="form-label fw-bolder text-dark fs-6">Subject</label>
                                                                    <select name="subject" id="ExamType" class="form-control">
                                                                        <option value="">Subject</option>
                                                                        @foreach($subjects as $item)
                                                                        <option value="{{$item->title}}">{{$item->title}}</option>
                                                                        @endforeach
                                                                       
                                                                    </select>
                                                                </div>
                                                                <!--end::Description-->
                                                                <!--begin::Pricing-->
                                                                <div class="col-sm-4">
                                                                <label class="form-label fw-bolder text-dark fs-6">Grade</label>
                                                                <input type="text" name="grade"  class="form-control">
                                                                  
                                                                <!--end::Pricing-->
                                                            </label>
                                                        </div>
                                                        </div>
                                                            <!--end::Subscription-->
                                                            <!--begin::Subscription-->
                                                            
                                                            <!--end::Subscription-->
                                                        </div>
                                                        <!--end::Input group-->
                                                    </div>
                                                    <!--end::Scroll-->
                                                </div>
                                                <!--end::Modal body-->
                                                <!--begin::Modal footer-->
                                                <div class="modal-footer flex-center">
                                                    <!--begin::Button-->
                                                    <button type="reset" id="kt_modal_add_product_cancel" class="btn btn-white me-3" data-bs-dismiss="modal">Reset</button>
                                                    <!--end::Button-->
                                                    <!--begin::Button-->
                                                    <button type="submit" class="btn btn-primary">
                                                        <span class="indicator-label">Submit</span>
                                                        <span class="indicator-progress">Please wait...
                                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                    </button>
                                                    <!--end::Button-->
                                                </div>
                                                <!--end::Modal footer-->
                                            </form>
                                            <!--end::Form-->
                                        </div>
                                    </div>
                                </div>
                            </tr>
                            @endforeach
                            @endforeach
                                
                                
                                
                               <!--end::Table body-->
                        </table>
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
        <div class="row">
            <div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end text-end">
                <a href="{{route('application.index')}}" class="btn btn-sm btn-primary" >
                    
                    Countinue to submit application
                   
                </a>
                </div>
            </div>
        <!--end::Col-->
        <!--begin::Col-->
       
        <!--end::Col-->
    </div>

    <div class="modal fade" id="kt_modal_new_card" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2>Upload Result Copy</h2>
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
                          
                            <div class="col-sm-4">
                                <label class="form-label fw-bolder text-dark fs-6">Exam Type</label>
                                <select name="title" id="ExamType" class="form-control">
                                    <option value="">Select Exam Type</option>
                                    @foreach ($exams as $item)
                                    <option value="{{$item->id}}">{{$item->exam_type}}</option>  
                                    @endforeach
                                    
                                </select>      
                            </div> 
                            <!--end::Label-->
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
    <div class="modal fade" id="kt_modal_add_product" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Form-->
                    <!--begin::Modal header-->
                    <div class="modal-header">
                        <!--begin::Modal title-->
                        <h2 class="fw-bolder">Add a Result</h2>
                        <!--end::Modal title-->
                        <!--begin::Close-->
                        <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
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
                    <div class="modal-body py-10 px-lg-17">
                        <!--begin::Label-->
                      
                        <!--end::Label-->
                        <!--begin::Scroll-->
                        <div class="scroll-y mh-300px me-n7 pe-7">
                            <!--begin::Product-->
                            <div class="row mb-10">
                            <div class="fv-row">
                                <form action="{{route('addresult')}}" method="POST" >
                                    @csrf
                                <!--begin::Subscription-->
                                
                                <label class="d-flex align-items-center mb-5">
                                    <!--begin::Radio-->
                                    <div class="col-sm-4">
                                        <label class="form-label fw-bolder text-dark fs-6">Exam Type</label>
                                        <select name="exam_id" id="ExamType" class="form-control">
                                            <option value="">Select Exam Type</option>
                                            @foreach ($exams as $item)
                                            <option value="{{$item->id}}">{{$item->exam_type}}</option>  
                                            @endforeach
                                            
                                        </select>      
                                    </div>                             
                                    <!--end::Radio-->
                                    <!--begin::Description-->
                                    <div class="col-sm-4">

                                        <label class="form-label fw-bolder text-dark fs-6">Subject</label>
                                        <select name="subject" id="ExamType" class="form-control">
                                            <option value="">Subject</option>
                                            @foreach($subjects as $item)
                                            <option value="{{$item->title}}">{{$item->title}}</option>
                                            @endforeach
                                           
                                        </select>
                                    </div>
                                    <!--end::Description-->
                                    <!--begin::Pricing-->
                                    <div class="col-sm-4">
                                    <label class="form-label fw-bolder text-dark fs-6">Grade</label>
                                    <input type="text" name="grade"  class="form-control">
                                      
                                    <!--end::Pricing-->
                                </label>
                            </div>
                            </div>
                                <!--end::Subscription-->
                                <!--begin::Subscription-->
                                
                                <!--end::Subscription-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Scroll-->
                    </div>
                    <!--end::Modal body-->
                    <!--begin::Modal footer-->
                    <div class="modal-footer flex-center">
                        <!--begin::Button-->
                        <button type="reset" id="kt_modal_add_product_cancel" class="btn btn-white me-3" data-bs-dismiss="modal">Reset</button>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button type="submit" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <!--end::Button-->
                    </div>
                    <!--end::Modal footer-->
                </form>
                <!--end::Form-->
            </div>
        </div>
    </div>
    
    <x-slot name="script">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" integrity="sha512-YUkaLm+KJ5lQXDBdqBqk7EVhJAdxRnVdT2vtCzwPHSweCzyMgYV/tgGF4/dCyqtCC2eCphz0lRQgatGVdfR0ww==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>    
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

   
    </x-slot>
</x-app-layout>
