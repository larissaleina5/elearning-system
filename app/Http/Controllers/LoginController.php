<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('auth-login');
    }
    public function store(Request $request){
       return $request->password;
    }
    public function register(Request $request){
        return $request->name;
    }
}
