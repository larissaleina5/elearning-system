<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function list(){
        $students=User::where('role_id',2)->get();
        //return $students;

        return view('students.list',compact('students'));
    }

    public function addStudent(){

            return view('students.create');

    }

    public function show($id){
        $user=User::find($id);
        return $user;
    }
    public function storeStudent(StudentRequest  $request){
        //first step to create into a database in laravel
//         $user=User::create([
// 'name'=>$request ->name,
// 'email'=>$request->email,
// 'password'=>$request->password,
// 'phone'=>$request->phone,
// 'role_id'=>2
//         ]);
//second step to create into a database laravel
        $user=new User;
        $user->name=$request ->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->phone=$request->phone;
        $user->role_id=2;
        $user->save();


        return $user;
    }
}
