<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Course;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    public function index(){
        $courseIsPopular=Course::where('isPopular',1)->first();
$courseIsPost=Course::where('status',1)->take(2)->inRandomOrder()->get();
$categories=Category::all();
        return view('pages.courses.index',compact('courseIsPopular','courseIsPost','categories'));
    }
    public function details(){
        $courseIsPopular=Course::where('isPopular',1)->first();
        $courseIsPost=Course::where('status',1)->take(2)->inRandomOrder()->get();
        $categories=Category::all();
        return view('pages.courses.course-details',compact('courseIsPopular','courseIsPost','categories'));
    }

}
