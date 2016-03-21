<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AllCourse extends Model
{
	protected $table="allcourses";
	protected $primaryKey="course_id";

     protected $fillable = [
     			'course_code'
     			,'course_title'
     			,'course_credit'
     	];
    //
}