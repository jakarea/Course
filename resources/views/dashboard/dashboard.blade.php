@extends('template.dashboard')
@section('title', 'Student Dashboard')
@endsection
@section('main')


<div class="container">
   <div class="row">
      <div class="row col-md-6 custyle">
         <div class="well well-success">
            <span class="h3"><b>My Public Profile</b></span>
         </div>
         <table class="table table-striped custab">
            <tbody>
               <tr>
                  <td>Name</td>
                  <td>{{$profile->name}}</td>
               </tr>
               <tr>
                  <td>Id</td>
                  <td>{{$profile->student_id}}</td>
               </tr>
               <tr>
                  <td>Batch </td>
                  <td>{{$profile->batch}}</td>
               </tr>
               <tr>
                  <td>Mobile  </td>
                  <td>{{$profile->mobile}}</td>
               </tr>
               <tr>
                  <td>Fb Link</td>
                  <td>{{$profile->fb}}</td>
               </tr>
               <tr>
                  <td>Email</td>
                  <td>{{$profile->email}}</td>
               </tr>
               <tr>
                  <td>Address</td>
                  <td>{{$profile->address}}</td>
               </tr>
            </tbody>
         </table>
      </div>
      <div class="col-md-6">
         <div class="panel panel-danger">
            <div class="panel-heading">
               <h3 class="panel-title"><b>My Course Summary</b></h3>
            </div>
            <div class="panel-body">
               <span class="pro-head">Complete Credit</span>
               <span class="pro">100</span><br>
               <span class="pro-head">InComplete Credit</span>
               <span class="pro">14</span><br>
               <span class="pro-head">Fail Credit</span>
               <span class="pro">26</span><br>
               <span class="pro-head">Taken Credit</span>
               <span class="pro">140</span><br>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection