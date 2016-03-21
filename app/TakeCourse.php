<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Session;

class TakeCourse extends Model
{
    protected $table="takecourses";
    protected $primaryKey="taken_id";
    protected $fillable=[
    	'course_id'
    	,'student_app_id'
    ];

    //Taking Course That I can take

    public static function toTakeCourse(){
        $student=Session::get('user');
        $student=$student[0]['student_app_id'];
	 	$sql = "SELECT a.course_id,a.course_code,a.course_title,a.course_credit 
            from allcourses a where a.course_id not in 
                (select b.course_id from takecourses b 
                    where b.student_app_id=$student)";
	 	return DB::Select($sql);
	  }

      //

    public function courseStatus() {
        $student=Session::get('user');
        $student=$student[0]['student_app_id'];
        return $this->belongsTo('App\AllCourse','course_id','course_id');
    }


}
