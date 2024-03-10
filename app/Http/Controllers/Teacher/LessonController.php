<?php

namespace App\Http\Controllers\Teacher;

use App\Models\Lesson;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Chapter;

class LessonController extends Controller
{
    public function create($id){
        return view('teacher.Lesson.createlesson', compact('id'));
    }
    public function list($id){
        $lessons=Lesson::where('course_id',$id)->get();
        return view('teacher.Lesson.listlesson',compact('lessons','id'));
    }

public function store(Request $request, $id){

    $lesson=new Lesson;
    $lesson->lesson_title=$request->lesson_title;
    $lesson->lesson_content=htmlspecialchars($request->lesson_content);
    $lesson->course_id=$request->course_id;
    $video_path = $request->lesson_video->store('lessons', 'public');
        $lesson->lesson_video=$video_path;
    $lesson->save();

    foreach($request->chapters as $chapter){
        $chapter=new Chapter;
        $chapter->lesson_id=$chapter->chapter_title;
        $chapter->save();
    }

    return to_route('teacher.lessons.listlesson',$id);

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
