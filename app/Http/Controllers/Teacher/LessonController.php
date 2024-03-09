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
    public function list(){
        $lessons=Lesson::all();
        return view('teacher.Lesson.listlesson',compact('lessons'));
    }

public function store(Request $request, $id){

    $lesson=new Lesson;
    $lesson->lesson_title=$request->lesson_title;
    $lesson->lesson_content=htmlspecialchars($request->lesson_content);
    $lesson->course_id=$request->course_id;
    $lesson->save();
    return to_route('teacher.lesson.store',compact('id'));

}
public function edit($id){
    $lesson=Lesson::find($id);
    return view('teacher.Lesson.editlesson',compact('lesson'));

        }

        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request,$id){
            $lesson=Lesson::find($id);
            $lesson->update([
                'lesson_title'=>$request->lesson_title,
                'lesson_content'=>$request->lesson_content,
                'lesson_description'=>$request->lesson_description,
                'lesson_type'=>$request->lesson_type,

            ]);
            return  to_route('lessons');
        }

        /**
         * Remove the specified resource from storage.
         */
        public function delete($id){
            $lesson=Lesson::find($id);
            $lesson->delete();
            return back();
        }
}
