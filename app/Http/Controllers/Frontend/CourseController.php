<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Models\Course;
use App\Models\Category;
use App\Models\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
    public function quiz($id){
        $categories=Category::all();
        $quizzes=Question::where('lesson_id',$id)->get();
        return view ('pages.courses.quiz',compact('categories','quizzes'));
        //return $quiz;
    }
    public function display($id){
        $quiz=Question::where('lesson_id',$id)->get();
        return $id;
    }

}
