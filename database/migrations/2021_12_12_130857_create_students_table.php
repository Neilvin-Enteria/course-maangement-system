<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id('student_id');
            $table->unsignedInteger('section_id');
            $table->unsignedInteger('course_id');
            $table->string('firstname', 100);
            $table->string('lastname', 100);
            $table->timestamps();

            $table->foreign('section_id')->references('section_id')->on('sections');
            $table->foreign('course_id')->references('course_id')->on('courses');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
