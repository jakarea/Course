<?php

namespace App;
use DB;
use Session;
use Illuminate\Database\Eloquent\Model;

class FailCourse extends Model
{
    protected $table ="failcourses";
    protected $primaryKey = "failcourse_id";
    protected $fillable = [
    	'student_app_id'
    	,'course_id'
    ];
}
