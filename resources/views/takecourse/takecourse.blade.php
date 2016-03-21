<?php
   $student=Session::get('user');

?>
@extends('template.dashboard')
@section('title', 'Take Course')
@endsection
@section('main')
<div class="container">
   <div class="row">
      <div class="row col-md-6 custyle">
         <div class="well well-success">
            <span class="h3"><b>Take Your Course</b></span>
         </div>
         <table class="table table-striped custab">
            <tbody>
            	<thead>
				<tr>
                  <td>Course Code</td>
                  <td>Course Title</td>
                  <td>Credit Hr</td>
                  <td>Action</td>
               </tr>            			
            	</thead>	
                @foreach ($allcourses as $allcourse)
		         <tr>
		            <td>{{$allcourse->course_code}} </td>
		            <td>{{$allcourse->course_title}}</td>
		            <td>{{$allcourse->course_credit}}</td>
		            <td>{!! Form::open(['route' => ['takecourse.store'], 'class' => 'form-inline', 'method' => 'POST']) !!}
                                {!! Form::hidden('course_id', $allcourse->course_id) !!}
                                {!! Form::hidden('student_app_id', $student[0]->student_app_id) !!}
                                {!! Form::submit('Take', ['class' => 'btn btn-danger btn-xs']) !!}
                            {!! Form::close() !!}
                  </td>
		         </tr>
		         @endforeach
            </tbody>
         </table>
         
       <div class="paginat text-center">
      {--!! $allcourses->render() !!--}
   </div>
      </div>
   </div>
</div>
@endsection