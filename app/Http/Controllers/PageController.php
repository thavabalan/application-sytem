<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exam;
use App\Models\Result;
use App\Models\Course;
use App\Models\Scholarship;
use App\Models\Files;
use App\Models\Subject;

use File;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        
    }
    public function resultadd(){
        $exams = Exam::where('user_id',Auth::id())->get();
        
        $results = Result::all();
        $subjects = Subject::all();
        return view('result',['exams' => $exams,'results'=>$results,'subjects' => $subjects]);
    }
    public function result(Request $request){
        $exam = Exam::create([
            'exam_type' => $request->OLevelExamType,
            'exam_center' => $request->ExamCenter,
            'reg_no' =>$request->ExamNumber,
            'exam_year' => $request->ExamYear,
            'user_id' => Auth::id()
        ]);

        return redirect()->route('result');

    }

    public function addresult(Request $request){

        $result = Result::create([
            'subject' => $request->subject,
            'grade' => $request->grade,
            'exam_id' =>$request->exam_id,
            
        ]);

        return redirect()->route('result');

    }

    public function editresult(Request $request,$id){
        $result = Result::find($id);
        $result->update([
            'subject' => $request->subject,
            'grade' => $request->grade,
            'exam_id' =>$request->exam_id,
        ]);
      

        return redirect()->route('result');

    }

    public function courses(){
        $courses = Course::all();

        return view('course.index',['courses' => $courses]);
    }

    public function scholarship(){
        $scholarships = Scholarship::all()->except(1);
        return view('scholarship.index',['scholarships' => $scholarships]);
    }
    public function addcourse(Request $request){

        $course = Course::create([
            'title' => $request->title,
            'department' => $request->department,
            'elegibility_criteria' => $request->elegibility_criteria,
            'degree_in_view' => $request->degree_in_view
        ]);
        return redirect('/course');

    }

    public function deletecourse($id){

        $course = Course::find($id);

        $course->delete();

        return redirect('/course');
    }

    public function editcourse(Request $request,$id){

        $course = Course::find($id);

        $course->update([
            'title' => $request->title,
            'opening_date' => $request->opening_date,
            'closing_date' => $request->closing_date,
            'elegibility' => $request->elegibility
        ]);

        return redirect('/course');
    }

    public function addscholarship(Request $request){

        $scholarship = Scholarship::create([
            'title' => $request->title,
            'opening_date' => $request->opening_date,
            'closing_date' => $request->closing_date,
            'elegibility' => $request->elegibility
        ]);

        return redirect('/scholarhip');
    }
    public function editscholarship(Request $request,$id){
        $scholarship = Scholarship::find($id);
        $scholarship -> update([
            'title' => $request->title,
            'opening_date' => $request->opening_date,
            'closing_date' => $request->closing_date,
            'elegibility' => $request->elegibility
        ]);

        return redirect('/scholarhip');
    }

    public function deletescholarship($id){

    $scholarship = Scholarship::find($id);

        $scholarship->delete();

        return redirect()->route('scholarship');
    }

    public function upload(){
        $files = Files::where('user_id',Auth::id())->get();
        return view('uploads.index',['files'=>$files]);
    }

    public function postupload(Request $request){

        
            $random_string = md5(microtime());
    
            $fileName = $random_string.'.'.$request->file->extension(); 
        
            $save_path           = storage_path() . '/app/public/Profile/' . Auth::user()->firstname;
        
            $path          = $save_path . $fileName ;
        
            $public_path        = '/storage/Profile/' .Auth::user()->firstname . '/' . $fileName;
        
            File::makeDirectory($save_path, $mode = 0755, true, true);
        
            $request->file->move($save_path, $fileName);

            $file = Files::create([
                'title' => $request->title,
                'description' => $request->description,
                'file' => $public_path,
                'user_id' => Auth::id()
            ]);
        
            return redirect()->route('upload');
    
    }

}
