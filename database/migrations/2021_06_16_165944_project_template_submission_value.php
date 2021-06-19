<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProjectTemplateSubmissionValue extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('project_template_submission_value', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ProjectId');
            $table->unsignedBigInteger('TemplateId')->nullable();
            $table->unsignedBigInteger('SubmissionId');
            $table->string('OriginalName','200');
            $table->longText('LaravelName');
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
        //
    }
}
