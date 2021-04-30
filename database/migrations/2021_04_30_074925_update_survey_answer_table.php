<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateSurveyAnswerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('survey_answer', function (Blueprint $table) {
            $table->unsignedBigInteger('SurveyId');
            $table->unsignedBigInteger('ResponseId');
            $table->unsignedBigInteger('QuestionId');
            $table->unsignedBigInteger('StudentId');
            $table->foreign('SurveyId')->references('id')->on('survey');
            $table->foreign('ResponseId')->references('id')->on('users');  
            $table->foreign('QuestionId')->references('id')->on('question');
            $table->foreign('StudentId')->references('id')->on('users');    
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
