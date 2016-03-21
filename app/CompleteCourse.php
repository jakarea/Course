<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompleteCourse extends Model
{
    protected $table = "completecoureses";
    protected $primaryKey = "completecourse_id";

    protected $fillable=[
    	'student_app_id'
    	,'course_id'
    	,'marks'
    	];
}
