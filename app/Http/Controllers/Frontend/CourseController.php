<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Models\Course;
use App\Models\Category;
use App\Models\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Quiz;
use Illuminate\Support\Facades\Session;

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

        $result=Session::get('result');
        return view ('pages.courses.quiz',compact('categories','quizzes','id','result'));
        //return $quiz;
    }
    public function display($id){
        $quiz=Question::where('lesson_id',$id)->get();
        return $id;
    }
    public function store (Request   $request){
        $quizzes=Question::where('lesson_id',$request->lesson_id)->get();
        $isGood=[];
        $result=[];
        $i=0;
        foreach($quizzes as $quiz){
            foreach($quiz->propositions as $index=>$proposition){
                if($quiz->propositions[$index]->pivot->isGoodOrFalse===1){
                    array_push($isGood,$proposition->proposition_name);
                }
            }
        }

        foreach($request->propositions as $index=>$proposition){
            if($proposition===$isGood[$index]){
                array_push($result,"success");
            }else{
                array_push($result,"fail");
            }
        }

        foreach($result as $r){
            if($r==="success"){
                $i=$i+1;
            }
        }
        Session::push('result',$i);
            return to_route('result.test',$request->lesson_id);
    }

    public function result($id){
        $result=Session::get('result');
        $categories=Category::all();
        $quizzes=Question::where('lesson_id',$id)->get();
        return view('pages.result.test',compact('quizzes',"result",'id','categories'));
    }

}
