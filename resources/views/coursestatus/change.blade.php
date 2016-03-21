<?php
   $student=Session::get('user');

?>
@extends('template.dashboard')
@section('title', 'Chnange Status')
@endsection
@section('main')
<div class="container">
   <div class="row">
      <div class="row col-md-6 custyle">
         <div class="well well-success">
            <span class="h3"><b>Complete your task</b></span>
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

                @foreach ($coursestatuses as $coursestatus)
		         <tr>
                <td>{{$coursestatus->courseStatus->course_code}} </td>
                <td>{{$coursestatus->courseStatus->course_title}} </td>
		            <td>{{$coursestatus->courseStatus->course_credit}} </td>
                <td>{!! Form::open(['route' => ['coursestatus.store'], 'class' => 'form-inline', 'method' => 'POST']) !!}
                                {!! Form::hidden('course_id', $coursestatus->course_id) !!}
                                {!! Form::hidden('student_app_id', $coursestatus->student_app_id) !!}
                                {!! Form::submit('Fail', ['class' => 'btn btn-danger btn-xs']) !!}
                            {!! Form::close() !!}
                  </td>
                <td>
                  
                </td>


		         </tr>
		         @endforeach
            </tbody>
         </table>
         <div class="container">
  <h2>Small Modal</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Open Small Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Please Give Your Marks</h4>
        </div>
       
     
        
        <div class="modal-footer">
          <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>
</div>
       <div class="paginat text-center">
      {--!! $coursestatuses->render() !!--}
   </div>
      </div>
   </div>
</div>

@endsection