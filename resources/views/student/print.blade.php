<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    .container1{
        
        border: 1px solid;
        border-color:black;
    }
    .container1 h1{
        text-align: center;
        font-size: 15px;
        background-color: orange;
    }
</style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <img src=" {{$application->course->profile}}" width="150px" height="180px">
            </div>
            <div class="col text-center">
               <h2>MEWAR INTERNATIONAL UNIVERSITY</h2>
               <h4>FIRST INDIAN UNIVERSITY IN AFRICA</h4> 
               <p>Approved under fulfilment of education Act, Cap E3 Laws of Federal Republic of Nigeria 2004 Accredited by the National University Commission (NUC), Ministry of Education, Nigeria</p>
                <h6>KM 21, Abuja-Keffi Expressway, Masaka, Karu, Nasarawa State Federal Republic of Nigeria</h6>
                <p>Website: www.miu.edu.ng
Facebook: fb.com/mewaruniversitynigeria
Tel: +2348183012911
E-mail: admission@miu.edu.ng</p>
            </div>
            <div class="col">
                <img src="https://admissionform.miu.edu.ng/assets/media/miulogo.png" alt="" width="150px" height="180px">
            </div>
        </div>
        <div class="container1">
            <div class="row">
                <div class="col-sm-12">
                <h1>Program Details*
                </h1>
                <div class="col-sm-4">Preferred Course of Study: </div>
                {{$application->course->title}}
                <p>JAMB Registration Number (if available):{{$application->user->jamb_no}} Year:{{$application->user->jamb_year}} Score:{{$application->user->jamb_sub1score}}
                </p>
            </div>
            </div>
        </div>
        <div class="container1">
            <div class="row">
                <div class="col-sm-12">
                <h1>Personal Details*
                </h1>
                <p>Full Name: {{$application->user->fistname}} {{$application->user->middlename}} {{$application->user->surname}}<p>
                <p>Gender:{{$application->user->gender}}   Date of Birth:{{$application->user->dob}}
                </p>
                <p>Nationality:{{$application->user->nationality}} State of Origin:{{$application->user->state}} LGA:{{$application->user->lga}}</p>
                <p>Permanent Home Address:{{$application->user->address}}
                    </p>
                    <p>Phone Number:{{$application->user->mobilenumber}} E-mail:{{$application->user->email}}
                    </p>
                    <p>Blood Group:___________________ Disability:_________________________________________________________</p>
                </div>
                </div>
        </div>
        <div class="container1">
            <div class="row">
                <div class="col-sm-12">
                <h1>Academic History*
                </h1>
                @foreach($application->user->exams as $item)
                                                        <p>Qualification Obtained:{{$item->exam_type}}</p>
                                                        <p> School Name:{{$item->exam_center}}</p>
                                                        <p>SSCE Registration Number (WAEC/NECO/Other):{{$item->reg_no}}</p>
                                                        <p>Year:{{$item->exam_year}}</p>
            @endforeach
                </div> </div>
        </div>
        <div class="container1">
            <div class="row">
                <div class="col-sm-6">
                    <h1>SSCE Subjects & Grade 

                    </h1>
                    @foreach($application->user->exams as $item)
                    @foreach($item->results as $item)
                    <p>1. {{$item->subject}} Language Grade {{$item->grade}}</p>
                    @endforeach
                    @endforeach
                </div>
                <div class="col-sm-6">
                    <h1>Next of Kin*
                    </h1>
                    <p>Name:___________________________________________
                    </p>
                    <p>Address:_________________________________________
                        ________________________________________________</p>
                    <p>Phone Number:___________________________________
                        </p>
                        <p>
                            E-mail:__________________________________________

                        </p>
                </div>
            </div>
        </div>
        <div class="container1">
            <div class="row">
                <div class="col-sm-4">
                    <h1>Facility Preference </h1>
                    <p>Hoste: {{$application->user->is_hotel}}</p>
                </div>
                <div class="col-sm-4">
                    <h1> Payment Plan
                    </h1>
                    <p>Full Payment Annually
                    </p>
                    <p>Full Payment Annually</p>
                    <p>Four installments annually

                        </p>
                      
                </div>
                <div class="col-sm-4">
                    <h1>Program type
                    </h1>
                    <p>Full Time
                    </p>
                    <p>Part Time</p>
                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>