<?php

namespace App\Http\Controllers\Teacher;

use App\Models\Course;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{

    public function list(){
        $courses=Course::where('user_id',auth()->user()->id)->get();
        return view ('teacher.Courses.listcourse', compact('courses'));
    }

    public function create(){
        $categories=Category::all();
        return view('teacher.Courses.createcourse',compact('categories'));

    }
    public function store(Request $request){
        $course=new Course;
        $course->course_name=$request->name;
        $course->course_description=$request->description;
        $course->user_id=auth()->user()->id;
        $course->category_id=$request->category_id;
        $course->level=$request->level;
        if($request->status==='on'){
            $course->status=1;
        }else{
            $course->status=0;
        }
        $image_path = $request->course_profile->store('course', 'public');
        $course->course_profile=$image_path;


        $course->save();
        return to_route('teach.courses');
    }
}

