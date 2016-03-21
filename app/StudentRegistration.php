<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentRegistration extends Model
{
    protected $table = 'studentinfos';
    protected $primaryKey='student_app_id';

     protected $fillable = [
     	'student_id'
     	,'name'
     	,'batch'
     	,'mobile'
     	,'email'
     	,'fb'
     	,'address'
     	,'password'
     	];
}
