<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Scholarship;
use App\Models\Course;
use App\Models\Application;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{
    public function index(){
        return view('student.index');
    }

    public function scholarship(){

        $scholarships = Scholarship::where('closing_date','>=',date('Y-m-d'))->get()->except(1);

        return view('student.scholarship',['scholarships' => $scholarships]);
    }

    public function scholarshipsingle($id){
        $scholarship = Scholarship::find($id);
        $courses = Course::all();

        return view('student.course',['courses'=>$courses,'scholarship' => $scholarship]);
    }

    public function applications(){
        
        $applications = Application::where('user_id',Auth::id())->get();
        
        return view('student.applications',['applications'=>$applications]);
    }

    public function adminapplication(){
        
        $applications = Application::all();
        
        return view('admin.application',['applications'=>$applications]);
    }

    public function singleadminapplication($id){
        
        $application = Application::find($id);
        
        return view('admin.singleapplication',['application'=>$application]);
    }

    public function apply($scholarid,$courseid){
        
        $application = Application::create([
            'scholarship_id' => $scholarid,
            'course_id' => $courseid,
            'user_id' => Auth::id()
        ]);
        
        return response()->json(['success'=>$application->id,'courseid'=>$courseid]);
    }

    public function approveapplication($id){
        $random_string = md5(microtime());
    
        $fileName = $random_string.'.'.$request->offerletter->extension(); 
    
        $save_path           = storage_path() . '/app/public/Profile/';
    
        $path          = $save_path . $fileName ;
    
        $public_path        = '/storage/Profile/' . $fileName;
    
        File::makeDirectory($save_path, $mode = 0755, true, true);
    
        $request->offerletter->move($save_path, $fileName);
        $application = Application::find($id);
        $application->update([
            'status' => 'Approved',
            'offer_letter' => $public_path
            
        ]);
        
        return redirect()->route('admin.applications.show',$id);
    }

    public function rejectapplication($id){
        $application = Application::find($id);
        $application->update([
            'status' => 'Rejected',
            
        ]);
        
        return redirect()->route('admin.applications.show',$id);
    }

    public function processapplication($id){
        $application = Application::find($id);
        $application->update([
            'status' => 'Processing',
            
        ]);
        return redirect()->route('admin.applications.show',$id);
    }

    public function approvedapplications(){
        $applications = Application::where('status','Approved')->get();
        return view('admin.approved',['applications' => $applications]);
    }

    public function scholarshipapplications(){
        $scholarship = Scholarship::withCount('applications')->get();
        return view('admin.scholarship',['scholarship' => $scholarship]);
    }
    public function courseapplications(){
        $course = Course::withCount('applications')->get();
        return view('admin.course',['course' => $course]);
    }

    public function scholarshipapplicationsview($id){
        $applications = Application::where('scholarship_id',$id)->get();
        
        return view('admin.application',['applications'=>$applications]);
    }

    public function courseapplicationsview($id){
        $applications = Application::where('course_id',$id)->get();

        return view('admin.application',['applications'=>$applications]);

    }

    public function admindashboard(){
        $application_count = Application::all()->count();
        $approved_count = Application::where('status','Approved')->count();
        $pending_count = Application::where ('status','!=','Approved')->count();
        $female_count =  User::where('gender','Female')->count();
        $male_count =  User::where('gender','Male')->count();
        return view('admin.index',['application_count' => $application_count,'approved_count' => $approved_count,'pending_count' => $pending_count,'female_count' => $female_count,'male_count'=>$male_count ]);
    }
}
