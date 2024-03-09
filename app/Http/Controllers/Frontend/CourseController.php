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
    public function details(){
        $courseIsPopular=Course::where('isPopular',1)->first();
        $courseIsPost=Course::where('status',1)->take(2)->inRandomOrder()->get();
        $categories=Category::all();
        return view('pages.courses.course-details',compact('courseIsPopular','courseIsPost','categories'));
    }

}
