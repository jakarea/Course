<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\FailCourse;
use App\TakeCourse;
use Session;

class CourseStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $student=Session::get('user');
        $student=$student[0]['student_app_id'];
        $coursestatuses= TakeCourse::with('courseStatus')->where('student_app_id', $student)->get();
        //return $coursestatuses;
        return view('coursestatus.change',compact('coursestatuses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */

    public function store()
    {
        $input = Request::all();
        FailCourse::create($input);
        return redirect('coursestatus');
    }
    public function complete()
    {
        $input = Request::all();
        FailCourse::create($input);
        return redirect('coursestatus');
    }
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
