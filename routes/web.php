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
use App\Http\Controllers\StudetailsController;
use App\Http\Controllers\EnliststudentController;

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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/',[HomeController::class,'welcome']);

Route::post('/login2',[LoginController::class,'store'])->name('store-in');
Route::get('/teacher',[TeacherController::class,'teacher']);
Route::get('/students',[StudentController::class,'student'])->name('students');
Route::get('/dasboard',[DashboardController::class,'dashboard']);
Route::get('/enlists',[EnliststudentController::class,'enlist']);
Route::get('/employtea',[EmployteaController::class,'add']);
Route::get('/studetails',[StudetailsController::class,'studetails']);
Route::get('/teadetail',[TeadetailController::class,'teadetail']);

require __DIR__.'/auth.php';
