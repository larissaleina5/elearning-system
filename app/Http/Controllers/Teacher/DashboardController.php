<?php

namespace App\Http\Controllers\Teacher;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /*public function index(){
        return 'teacher dashboard';
    }*/
    public function lecturer(){
        return view('teacher.dashboard');
    }

}
