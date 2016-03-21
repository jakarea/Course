<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AutoCompleteController extends Controller
{
    //api/ac/area
    public function getCourseCode($query=""){
        return AllCourse::where('course_code', "like", "%$query%")->get();
    }
}
