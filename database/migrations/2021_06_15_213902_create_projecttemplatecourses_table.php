<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjecttemplatecoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projecttemplatecourses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('projectTempID')->nullable();
            $table->foreign('projectTempID')->references('id')->on('projecttemplate');
            $table->unsignedBigInteger('courseID')->nullable();
            $table->foreign('courseID')->references('id')->on('courses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projecttemplatecourses');
    }
}
