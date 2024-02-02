<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
     //public function teacher(){
      //  return view('All');
    //}
    public function greate(){
    return view ('goodmorning');
    }
    public function index(){
        $categories=category::where('category_name')->get();
        return view('category.list',compact('category'));
}
public function list(){
    $caregories=category::where()->get();
    //return $categories;

    return view('category.list',compact('categories'));
}
}
