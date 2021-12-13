<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->id('subject_id');
            $table->unsignedInteger('professor_id');
            $table->unsignedInteger('classroom_id');
            $table->time('start');
            $table->time('end');
            $table->timestamps();

            $table->foreign('professor_id')->references('professor_id')->on('professors');
            $table->foreign('classroom_id')->references('classroom_id')->on('classrooms');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subjects');
    }
}
