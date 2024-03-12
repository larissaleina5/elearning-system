<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Lesson;

class LessonController extends Controller
{
    public function show($course_slug,$lesson_slug){
        $course=Course::where('slug',$course_slug)->first();
       $lesson=Lesson::where('slug',$lesson_slug)->first();
       $categories=Category::all();
        return view('pages.lessons.show',compact('course','lesson','categories'));
    }
}
