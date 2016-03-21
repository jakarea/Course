<?php
namespace App\Http\Controllers;
use Request; 
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\AllCourse;
class AllCourseController extends Controller
    {
        /**
        * Display a listing of the resource.
        *
        * @return Response
        */
        public function index()
            {
                $allcourses = AllCourse::orderBy('course_title');

                $course_code=Request::get('course_code');
                    if(!empty($course_code)){
                        $allcourses->where('course_code','LIKE','%'.$course_code.'%');
                    }
                $course_title = Request::get('course_title');
                    if(!empty($course_title)){
                        $allcourses->where('course_title','LIKE','%'.$course_title.'%');
                     }

                $allcourses=$allcourses->paginate(7);

            return view('course.allcourse',compact('allcourses'));
            }
        /**
        * Show the form for creating a new resource.
        *
        * @return Response
        */
        public function create()
            {
                
            return view('course.create');
            }
        /**
        * Store a newly created resource in storage.
        *
        * @return Response
        */
        public function store()
            {
                $inputs = Request::get('currentdata',[]);
                foreach ($inputs as $input) {
                    $d=Array(['course_code'] => "sf177", ['course_title'] => "2232", ['course_credit'] => "324" );
                AllCourse::create($d);
                }exit;
            return redirect('course');
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
                $course = AllCourse::findOrFail($id);
            return view('course.edit',compact('course'));
            }
        /**
        * Update the specified resource in storage.
        *
        * @param  int  $id
        * @return Response
        */
        public function update($id)
            {
                $input = Request::all();
                $course = AllCourse::findOrFail($id);
                $course->update($input);
            return redirect()->route('course.index');
            }
        /**
        * Remove the specified resource from storage.
        *
        * @param  int  $id
        * @return Response
        */
        public function destroy($id)
            {
                $course = AllCourse::findOrFail($id);
                $course->delete();
            return redirect()->route('course.index');
            }
    }