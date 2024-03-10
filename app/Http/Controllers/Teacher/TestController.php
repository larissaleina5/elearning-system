<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function create($id){

        return view('teacher.quizz.create',compact('id'));
    }

    public function store(Request $request){
        $question=new Question;
        $question->question_name=$request->question_name;
        $question->lesson_id=$request->lesson_id;
        $question->save();
    }
}
