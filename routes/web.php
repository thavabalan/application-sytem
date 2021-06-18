<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ApplicationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('student.index');
  
})->middleware(['auth'])->name('dashboard');
Route::get('/newapplication', function () {
    return view('dashboard');
  
})->middleware(['auth'])->name('newapplication');
Route::get('/result',  [PageController::class, 'resultadd'])->middleware('applicant')->name('result');
Route::post('/result', [PageController::class, 'result'])->middleware('applicant')->name('save');
Route::post('/scholarhip', [PageController::class, 'addscholarship'])->middleware('admin')->name('addscholarship');
Route::post('/resultadd', [PageController::class, 'addresult'])->middleware('applicant')->name('addresult');
Route::post('/editresult/{id}', [PageController::class, 'editresult'])->middleware('applicant')->name('editresult');

Route::post('/course', [PageController::class, 'addcourse'])->middleware('admin')->name('addcourse');
Route::post('/course/edit/{id}', [PageController::class, 'editcourse'])->middleware('admin')->name('editcourse');
Route::get('/course/delete/{id}', [PageController::class, 'deletecourse'])->middleware('admin')->name('deletecourse');
Route::get('/courses', [PageController::class, 'courses'])->middleware('admin')->name('course');

Route::get('/scholarhip', [PageController::class, 'scholarship'])->middleware('admin')->name('scholarship');
Route::post('/scholarhip/edit/{id}', [PageController::class, 'editscholarship'])->middleware('admin')->name('editscholarship');
Route::get('/scholarhip/delete/{id}', [PageController::class, 'deletescholarship'])->middleware('admin')->name('deletescholarship');

Route::get('/upload',[PageController::class, 'upload'])->middleware('applicant')->name('upload');
Route::post('/upload',[PageController::class, 'postupload'])->middleware('applicant')->name('postupload');
Route::get('/admin/application',[ApplicationController::class,'adminapplication'])->middleware('admin')->name('admin.applications');
Route::get('/admin/application/{id}',[ApplicationController::class,'singleadminapplication'])->middleware('admin')->name('admin.applications.show');
Route::post('/admin/application/approve/{id}',[ApplicationController::class,'approveapplication'])->middleware('admin')->name('admin.applications.approve');
Route::get('/admin/application/reject/{id}',[ApplicationController::class,'rejectapplication'])->middleware('admin')->name('reject');
Route::get('/admin/application/process/{id}',[ApplicationController::class,'processapplication'])->middleware('admin')->name('process');
Route::get('/admin/approved',[ApplicationController::class,'approvedapplications'])->middleware('admin')->name('approvedapplications');
Route::get('/admin/scholarship',[ApplicationController::class,'scholarshipapplications'])->middleware('admin')->name('scholarshipapplications');
Route::get('/admin/course',[ApplicationController::class,'courseapplications'])->middleware('admin')->name('courseapplications');
Route::get('/admin',[ApplicationController::class,'admindashboard'])->middleware('admin')->name('admin');
Route::get('/admin/subject',[ApplicationController::class,'addsubjectview'])->middleware('admin')->name('addsubjectview');
Route::post('/admin/subject',[ApplicationController::class,'addsubject'])->middleware('admin')->name('addsubject');
Route::get('/admin/subject/delete/{id}', [ApplicationController::class, 'deletesubject'])->middleware('admin')->name('deletesubject');
Route::get('/admin/notification',[ApplicationController::class,'notification'])->middleware('admin')->name('notification');
Route::post('/admin/notification/{id}',[ApplicationController::class,'addnotification'])->middleware('admin')->name('addnotification');
Route::post('/admin/notification/edit/{id}',[ApplicationController::class,'editnotification'])->middleware('admin')->name('editnotification');

Route::get('/admin/notification/all',[ApplicationController::class,'allnotification'])->middleware('admin')->name('allnotification');
Route::get('/admin/notification/delete/{id}',[ApplicationController::class,'deletenotification'])->middleware('admin')->name('deletenotification');

Route::get('/admin/scholarship/application/{id}',[ApplicationController::class,'scholarshipapplicationsview'])->middleware('admin')->name('scholarship.application');
Route::get('/admin/course/application/{id}',[ApplicationController::class,'courseapplicationsview'])->middleware('admin')->name('course.application');

Route::get('/studentapplications',[ApplicationController::class,'applications'])->middleware('applicant')->name('applications'); 
Route::get('/studentnotification',[ApplicationController::class,'studentnotification'])->middleware('applicant')->name('studentnotification');
Route::get('/application',[ApplicationController::class,'index'])->middleware('applicant')->name('application.index');
Route::get('/offerletter',[ApplicationController::class,'offerletter'])->middleware('applicant')->name('application.offerletter');

Route::get('/application/scholarship',[ApplicationController::class,'scholarship'])->middleware('applicant')->name('application.scholarship');
Route::get('/application/scholarship/{id}',[ApplicationController::class,'scholarshipsingle'])->middleware('applicant')->name('scholarship.single');
Route::get('/application/scholarship/{scholarid}/{courseid}',[ApplicationController::class,'apply'])->middleware('applicant')->name('scholarship.apply');
require __DIR__.'/auth.php';
