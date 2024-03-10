<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function create($id){

        return view('teacher.quizz.create',compact('id'));
    }
}
