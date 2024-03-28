<?php

namespace App\Http\Controllers\Student;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        $categories=Category::all();

        return view('students.Courses.viewcourse',compact('categories'));
    }
}
