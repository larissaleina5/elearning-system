<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses=Course::all();
        return view('admin.courses.list',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teachers=User::where("role_id",3)->get();
        $categories=Category::all();
        return view('admin.courses.create',compact('teachers','categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $course=new Course;
        $course->course_name=$request->name;
        $course->course_description=$request->description;
        $course->user_id=$request->teacher_id;
        $course->category_id=$request->category_id;
        $course->level=$request->level;
        $course->slug=$this->slugify($request->name);
        if($request->status==='on'){
            $course->status=1;
        }else{
            $course->status=0;
        }
        $image_path = $request->course_profile->store('course', 'public');
        $course->course_profile=$image_path;


        $course->save();
        return to_route('courses.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id){
$course=Course::find($id);
return view('admin.courses.edit',compact('courses'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id){
        $course=Course::find($id);
        $course->update([
            'name'=>$request->course_name,
            'description'=>$request->course_description,
            'level'=>$request->level,
            'status'=>$request->status
        ]);
        return  to_route('courses');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id){
        $course=Course::find($id);
        $course->delete();
        return back();
    }

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
