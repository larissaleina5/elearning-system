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
        if($request->status==='on'){
            $course->status=1;
        }else{
            $course->status=0;
        }

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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}