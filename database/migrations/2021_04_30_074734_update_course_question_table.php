<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateCourseQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('question', function (Blueprint $table) {
            $table->unsignedBigInteger('SurveyId');
            $table->unsignedBigInteger('TypeId');
            $table->foreign('SurveyId')->references('id')->on('survey');
            $table->foreign('TypeId')->references('id')->on('question_type');    
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
