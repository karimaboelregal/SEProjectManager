<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->unsignedBigInteger('SurveyId')->nullable();
            $table->unsignedBigInteger('InstructorId')->nullable();
            $table->unsignedBigInteger('TaskId')->nullable();
            $table->foreign('SurveyId')->references('id')->on('survey');
            $table->foreign('InstructorId')->references('id')->on('users');
            $table->foreign('TaskId')->references('id')->on('submission');
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
