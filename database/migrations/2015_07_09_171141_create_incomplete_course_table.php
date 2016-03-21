<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncompleteCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incompletecourses',function(Blueprint $table){
            $table->increments('incompletecourse_id');
            $table->integer('student_app_id');
            $table->integer('course_id');
            $table->integer('marksin70');
            $table->integer('incomplete');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('incompletecourses');
    }
}
