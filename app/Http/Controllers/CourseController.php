<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    //
    public function consulter (){
        $course = Course::all();
        return response()->json($course);
    }
    
}
