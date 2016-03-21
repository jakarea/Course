<?php

namespace App;
use Session;

use Illuminate\Database\Eloquent\Model;

class UserLogin extends Model
{
    public static function userAuth($input){

    	$log = StudentRegistration::where('student_id',$input['student_id'])->where('password',$input['password'])->get();
   		$count = $log->count();
   		if($count==1){
   			Session::put('user',$log);
   			Session::put('role',"jakarea");
   		}
   		return $count;
    }
}
