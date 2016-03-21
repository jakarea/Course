@extends('template.dashboard')
@section('title', 'Registration Form')
@endsection
@section('main')
<div class="container">
   <div class="row">
      <div class="col-md-6 col-md-offset-3">
         <form class="form-horizontal" method="POST" action="/auth/register">
            {!! csrf_field() !!}
            <fieldset>
               <legend>Registration Form</legend>
               <div class="form-group">
                  <label for="inputName" class="col-lg-2 control-label">Name</label>
                  <div class="col-lg-10">
                     <input type="text" class="form-control" id="inputName" name="name" placeholder="Name" >
                  </div>
               </div>
               <div class="form-group">
                  <label for="inputId" class="col-lg-2 control-label">Student Id</label>
                  <div class="col-lg-10">
                     <input type="text" class="form-control" id="inputId" name="student_id" placeholder="Student Id">
                  </div>
               </div>
               <div class="form-group">
                  <label for="inputBatch" class="col-lg-2 control-label">Batch</label>
                  <div class="col-lg-10">
                     <input type="text" class="form-control" id="inputBatch" name="batch" placeholder="Batch">
                  </div>
               </div>
               <div class="form-group">
                  <label for="inputMobile" class="col-lg-2 control-label">Mobile</label>
                  <div class="col-lg-10">
                     <input type="text" class="form-control" id="inputMobile" name="mobile" placeholder="Mobile">
                  </div>
               </div>
               <div class="form-group">
                  <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                  <div class="col-lg-10">
                     <input type="text" class="form-control" id="inputEmail" name="email" placeholder="Email">
                  </div>
               </div>
               <div class="form-group">
                  <label for="inputFb_Id" class="col-lg-2 control-label">Fb Id</label>
                  <div class="col-lg-10">
                     <input type="text" class="form-control" id="inputFb Id" name="fb" placeholder="Fb Id">
                  </div>
               </div>
               <div class="form-group">
                  <label for="inputAddress" class="col-lg-2 control-label">Address</label>
                  <div class="col-lg-10">
                     <input type="text" class="form-control input-lg" id="inputAddress" name="address" placeholder="Address">
                  </div>
               </div>
               <div class="form-group">
                  <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                  <div class="col-lg-10">
                     <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">
                  </div>
               </div>
               <div class="form-group">
                  <label for="inputConfirmPassword" class="col-lg-2 control-label">Confirm Password</label>
                  <div class="col-lg-10">
                     <input type="password" class="form-control" id="inputConfirmPassword" name="password_confirmation" placeholder="ConfirmPassword">
                  </div>
               </div>
               <div class="form-group">
                  <div class="col-lg-10 col-lg-offset-2">
                     <button type="reset" class="btn btn-default">Cancel</button>
                     <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
               </div>
            </fieldset>
         </form>
      </div>
   </div>
</div>
@endsection