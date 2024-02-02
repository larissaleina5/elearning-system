<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployteaController;
use App\Http\Controllers\TeadetailController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\StudetailsController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\EnliststudentController;
use App\Http\Controllers\Student\DashboardController as StudentDashboardController;
use App\Http\Controllers\Teacher\DashboardController as TeacherDashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('user/{id}',[StudentController::class,'show']);



Route::middleware("admin",'auth')->group(function(){
    Route::resource('courses',CourseController::class);
    Route::post('/add/student',[StudentController::class,'storeStudent'])->name('store-student');
    Route::post('/add/teacher',[TeacherController::class,'storeTeacher'])->name('store-teacher');
    Route::get('/admin/dasboard',[DashboardController::class,'dashboard'])->name('admin.dashboard');
    Route::get('/add/student',[StudentController::class,'addStudent'])->name('add-student');
    Route::get('/add/teacher',[TeacherController::class,'addTeacher'])->name('add-teacher');
    Route::get('/teachers',[TeacherController::class,'index'])->name('teachers');
    Route::get('/students',[StudentController::class,'list'])->name('students');
    Route::put('/student/{id}',[StudentController::class,'update'])->name('update.student');
    Route::get('/update/student/{id}',[StudentController::class,'renew'])->name('edit.student');
    Route::put('/teacher/{id}',[TeacherController::class,'update'])->name('update.teacher');
    Route::get('update/teacher/{id}',[TeacherController::class,'renew'])->name('edit.teacher');
    Route::delete('/delete/student/{id}',[StudentController::class,'delete'])->name('delete.student');
    Route::delete('/delete/teacher/{id}',[TeacherController::class,'destroy'])->name('destroy.teacher');
});

Route::middleware("student",'auth')->group(function(){
Route::get('/student/dashboard',[StudentDashboardController::class,'index'])->name('student.dashboard');
});
Route::middleware("teacher",'auth')->group(function(){
Route::get('/teacher/dashboard',[TeacherDashboardController::class,'index'])->name('teacher.dashboard');
});
Route::middleware('auth')->group(function (){
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('test',function(){
        return auth()->user();
    });


Route::put('/students/{id}','StudentController@update');


Route::get('/employtea',[EmployteaController::class,'add']);
Route::get('/studetails',[StudetailsController::class,'studetails']);
Route::get('/teadetail',[TeadetailController::class,'teadetail']);



});

Route::get('/',[HomeController::class,'welcome']);


Route::post('/login2',[LoginController::class,'store'])->name('store-in');


require __DIR__.'/auth.php';
