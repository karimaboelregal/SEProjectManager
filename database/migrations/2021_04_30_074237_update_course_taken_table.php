<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateCourseTakenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('course_taken', function (Blueprint $table) {
            $table->unsignedBigInteger('StudentId');
            $table->unsignedBigInteger('CourseId');
            $table->foreign('StudentId')->references('id')->on('users');
            $table->foreign('CourseId')->references('id')->on('courses');    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
