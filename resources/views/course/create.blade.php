@extends('template.dashboard')
@section('title', 'Add New Course')
@endsection
@section('main')
<div class="container">
   <div class="row clearfix">
      <div class="col-md-10 column col-md-offset-1">
         <form  method="POST" action="{{route('course.store')}}">
            {!! csrf_field() !!}
            <table class="table table-bordered table-hover" id="tab_logic">
               <thead>
                  <tr>
                     <th class="text-center">
                        #
                     </th>
                     <th class="text-center">
                        Course Code
                     </th>
                     <th class="text-center">
                        Course Title
                     </th>
                     <th class="text-center">
                        Credit Hr
                     </th>
                  </tr>
               </thead>
               <tbody>
                  <tr id='addr0'>
                     <td>
                        1
                     </td>
                     <td>
                        <input type="text" name="currentdata[0]['course_code']"  placeholder='Ex CSE-327' class="form-control"/>
                     </td>
                     <td>
                        <input type="text" name="currentdata[0]['course_title']" placeholder='Course Title' class="form-control"/>
                     </td>
                     <td>
                        <input type="text" name="currentdata[0]['course_credit']" placeholder='Credit Hr' class="form-control"/>
                     </td>
                  </tr>
                  <tr id='addr1'></tr>
               </tbody>
            </table>
            <button type="submit" class="btn btn-primary btn-default pull-right">Submit</button>
            <button type="reset" class="btn btn-default  pull-right">Cancel</button>
            <a id='delete_row' class=" btn btn-default">Delete Row</a>
            <a id="add_row" class="btn btn-default btn-primary">Add Row</a>
         </form>
      </div>
   </div>
</div>
@endsection