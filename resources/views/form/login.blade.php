@extends('template.login')
@section('title', 'Please LogIn')
@endsection
@section('main')
<div class="container">
   <div class="row">
      <form class="bs-component" method="POST" action="">
         {!! csrf_field() !!}
         <div class="col-md-4 col-md-offset-4 log">
            <fieldset>
               <h3>Login Form</h3>
               <hr class="colorgraph">
               
               <div class="form-group">
                  <label class="control-label" for="focusedInput">Student Id</label>
                  <input class="form-control" id="focusedInput" type="text" name="student_id" value="{{ old('student_id') }}" >
               </div>
               <div class="form-group">
                  <label class="control-label" for="focusedInput">Password</label>
                  <input class="form-control"  type="password" name="password">
               </div>
               <a class="pull-right" href="">Forgot password?</a>
               <div class="checkbox" style="width:140px;">
                  <label>
                  <input name="remember" type="checkbox"> Remember Me
                  </label>
               </div>
               <div class="input-group">
                  <span class="input-group-btn" >
                  <button class="btn btn-primary btn-block" type="submit" >Log In</button>
                  </span>
               </div>
               <hr class="colorgraph">
            </fieldset>
         </div>
      </form>
   </div>
</div>
@endsection
