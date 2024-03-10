<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Lesson;

class LessonController extends Controller
{
    public function show($course_name,$lesson_name){
        $course=Course::where('course_name',$course_name)->first();
       $lesson=Lesson::where('lesson_title',$lesson_name)->first();
       $categories=Category::all();
        return view('pages.lessons.show',compact('course','lesson','categories'));
    }
}
