<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentinfos', function (Blueprint $table) {
            $table->increments('student_app_id');
            $table->string('student_id')->unique();
            $table->string('name');
            $table->string('batch');
            $table->string('mobile');
            $table->string('email')->unique();
            $table->string('fb');
            $table->string('address');
            $table->string('password', 60);
            $table->rememberToken();
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
        Schema::drop('studentinfos');
    }
}
