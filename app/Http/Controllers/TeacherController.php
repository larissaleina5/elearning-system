<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    //public function teacher(){
      //  return view('All');
    //}
    public function employ(){
        $teacher=User::where('role_id',3)->get();
        return view('teacher.create',compact('teacher'));
    }
public function addTeacher(){
    return view('teacher.create');
}
public function storeTeacher(Request  $request){

    $user=User::create([
'name'=>$request ->name,
'email'=>$request->email,
'password'=>$request->password,
'phone'=>$request->phone,
'role_id'=>3
]);

return $user;
}
}
