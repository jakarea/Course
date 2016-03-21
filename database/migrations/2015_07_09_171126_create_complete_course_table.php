<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompleteCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('completecourses', function (Blueprint $table) {
            $table->increments('completecourse_id');
            $table->integer('student_app_id');
            $table->integer('course_id');
            $table->integer('marks');
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
        Schema::drop('completecourses');
    }
}
