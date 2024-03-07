<?php

namespace App\Http\Controllers\Teacher;

use App\Models\Lesson;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LessonController extends Controller
{
    public function create($id){
        return view('teacher.Lesson.createlesson', compact('id'));
    }
public function store(Request $request){

    $lesson=new Lesson;
    $lesson->lesson_title=$request->lesson_title;
    $lesson->lesson_content=$request->lesson_content;
    $lesson->course_id=$request->course_id;
    $lesson->lesson_type=$request->lesson_type;
    $lesson->save();
    return to_route('teacher.lesson.store');

}
}
