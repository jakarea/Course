<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return redirect('login');
});

//Registration Link
Route::resource('registration', 'StudentRegistrationController');
//Login Page
Route::resource('login', 'LoginController');
//All Course List For all User
Route::resource('course','AllCourseController');

//After Login UserProfile
Route::get('profile','StudentController@Profile');

//Take course
Route::resource('takecourse','TakeCourseController');

Route::resource('coursestatus','CourseStatusController');












Route::resource('student/', 'StudentController');








/*************************Auto Complete****************************/			 
		Route::controller('api/ac','AutoCompleteController');
/******************************************************************/