@extends('template.dashboard')
@section('title', 'Add New Course')
@endsection
@section('main')
<div class="container">
   <div class="row">
      <div class="col-md-6 col-md-offset-3">
            {!! Form::open(['route' => ['course.update', $course->course_id], 'class' => 'form-horizontal', 'method' => 'put']) !!}
            <fieldset>
               <legend>Update Course</legend>
               <div class="form-group">
                  <label for="course_code" class="col-lg-2 control-label">Course Code</label>
                  <div class="col-lg-10">
                     <input type="text" class="form-control" id="course_code" name="course_code" value="{{$course->course_code}}" />
                  </div>
               </div>
               <div class="form-group">
                  <label for="course_title" class="col-lg-2 control-label">Course Title</label>
                  <div class="col-lg-10">
                     <input type="text" class="form-control" id="course_title" name="course_title"  value="{{$course->course_title}}">
                  </div>
               </div>
               <div class="form-group">
                  <label for="course_credit" class="col-lg-2 control-label">Credit Hr</label>
                  <div class="col-lg-10">
                     <input type="text" class="form-control" id="course_credit" name="course_credit"  value="{{$course->course_credit}}">
                  </div>
               </div>
               
               <div class="form-group">
                  <div class="col-lg-10 col-lg-offset-2">
                     <button type="reset" class="btn btn-default">Cancel</button>
                     <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
               </div>
            </fieldset>
         {!! Form::close() !!}
      </div>
   </div>
</div>
@endsection