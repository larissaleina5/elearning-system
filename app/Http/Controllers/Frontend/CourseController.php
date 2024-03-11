<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Course;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class CourseController extends Controller
{
    public function index(){
        $courses=Course::all();
        $users=User::all();
        $categories=Category::all();
        return view('pages.courses.index',compact('courses','users','categories'));
    }
    public function details($name){
        $course=Course::where('slug',$name)->first();
        $categories=Category::all();
        return view('pages.courses.course-details',compact('course','categories'));
    }

}
