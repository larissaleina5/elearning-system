<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeacherRequest;
use App\Models\User;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    //public function teacher(){
      //  return view('All');
    //}
    public function index(){
        $teachers=User::where('role_id',3)->get();
        return view('teacher.list',compact('teachers'));
    }
public function addTeacher(){
    return view('teacher.create');
}
public function storeTeacher(TeacherRequest  $request){

    $user=User::create([
'name'=>$request ->name,
'email'=>$request->email,
'password'=>$request->password,
'phone'=>$request->phone,
'role_id'=>3
]);

return to_route('teachers');
}
public function renew($id){
    $user=User::find($id);
    return view('teacher.edit', compact('user'));
}
public function  update(Request $request,$id ){
$user=User::find($id);
$user->update([
'name'=>$request->name,
'emale'=>$request->email,
'phone'=>$request->phone
]);
return  to_route('teachers');
}
public function destroy($id){
$user=User::find($id);
$user->delete();
return back();
}

}
