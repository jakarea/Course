<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InCompleteCourse extends Model
{
    protected $table="incompletecourses";
    protected $primaryKey ="incompletecourse_id";

    protected $fillable=[
    	'student_app_id'
    	,'course_code'
    	,'marksin70'
    	,'incomplete'
    ];
}
