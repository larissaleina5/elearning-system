<?php

namespace App\Http\Controllers\Teacher;

use App\Models\Lesson;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Chapter;
use App\Models\Course;

class LessonController extends Controller
{
    public function create($id){
        return view('teacher.Lesson.createlesson', compact('id'));
    }
    public function list($id){
        $lessons=Lesson::where('course_id',$id)->get();
        $course=Course::find($id);
        return view('teacher.Lesson.listlesson',compact('lessons','id','course'));
    }

public function store(Request $request, $id){

    $lesson=new Lesson;
    $lesson->lesson_title=$request->lesson_title;
    $lesson->slug=$this->slugify($request->lesson_title);
    $lesson->lesson_content=htmlspecialchars($request->lesson_content);
    $lesson->course_id=$request->course_id;
    $video_path = $request->lesson_video->store('lessons', 'public');
        $lesson->lesson_video=$video_path;
    $lesson->save();

    if(isset($request->chapter)){
        foreach($request->chapters as $chapter){
            if($chapter!=null){
                $chapter=new Chapter;
                $chapter->lesson_id=$chapter->chapter_title;
                $chapter->save();
            }

        }
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
        /*public function delete($id){
            $lesson=Lesson::find($id);
            $lesson->delete();
            return back();
        }*/

        function slugify($string, $delimiter = '-') {
            $oldLocale = setlocale(LC_ALL, '0');
            setlocale(LC_ALL, 'en_US.UTF-8');
            $clean = iconv('UTF-8', 'ASCII//TRANSLIT', $string);
            $clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
            $clean = strtolower($clean);
            $clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);
            $clean = trim($clean, $delimiter);
            setlocale(LC_ALL, $oldLocale);
            return $clean;
        }
}
