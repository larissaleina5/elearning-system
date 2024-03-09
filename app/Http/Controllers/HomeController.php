<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function welcome(){
        //to get just one value type $course=Course::where('level',difficult)->first();
         //to get two or mor value type $course=Course::where('level',difficult)->take(2 or more)->get();
 //to get all value type $course=Course::all()->first();
//$course=Course::where('level','difficult')->take(1)->inRandomOrder()->get();
//return $course;

$courseIsPopular=Course::where('isPopular',1)->first();
$courseIsPost=Course::where('status',1)->take(2)->inRandomOrder()->get();
$categories=Category::all();
    return view('welcome', compact('courseIsPopular','courseIsPost','categories'));
    }


}
