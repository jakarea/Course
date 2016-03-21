@extends('template.dashboard')
@section('title', 'Registration Form')
@endsection
@section('main')
<div class="container">
   <div class="row col-md-8 col-md-offset-2 custyle">
      <table class="table table-striped custab">
         <div class="well">
            <span class="h3"><b>All Course</b></span>
            <form class="navbar-form navbar-left" role="search" method="GET" action="{{route('course.index')}}" >
               <div class="row">
                  <div class="col-lg-3 col-md-offset-3">
                     <div class="input-group">
                        <input type="text" class="form-control" placeholder="Ex CSE 317" name="course_code" id="course_code">
                     </div>
                     <!-- /input-group -->
                  </div>
                  <!-- /.col-lg-6 -->
                  <div class="col-lg-6">
                     <div class="input-group">
                        <input type="text" class="form-control" placeholder="Course Title" name="course_title">
                        <span class="input-group-btn">
                        <button class="btn btn-default" type="submit">Search</button>
                        </span>
                     </div>
                     <!-- /input-group -->
                  </div>
                  <!-- /.col-lg-6 -->
               </div>
               <!-- /.row -->
            </form>
         </div>
         <thead>
            <tr>
               <th>Course Code</th>
               <th>Course Title</th>
               <th>Credit Hr</th>
               <th class="text-center">Action</th>
            </tr>
         </thead>
         @foreach ($allcourses as $allcourse)
         <tr>
            <td>{{$allcourse->course_code}} </td>
            <td>{{$allcourse->course_title}}</td>
            <td>{{$allcourse->course_credit}}</td>
            <td class="text-center">
               <a href="{{route('course.edit',[$allcourse->course_id])}}" class="btn btn-primary btn-xs">Edit</a>
               {!! Form::open(['route' => ['course.destroy', $allcourse->course_id], 'class' => 'form-inline', 'method' => 'delete']) !!}
               {!! Form::hidden('id', $allcourse->course_id) !!}
               {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
               {!! Form::close() !!}
            </td>
         </tr>
         @endforeach
      </table>
   </div>
   <div class="paginat text-center">
      {!! $allcourses->render() !!}
   </div>
</div>

<script>
   /**Sales Order Form**/
   new BloodhoundTypeahead({
      selector: '#course_code', 
      endpoint: App.baseUrl+'/api/ac/%QUERY', 
      value: 'name'
   });
</script>

@endsection