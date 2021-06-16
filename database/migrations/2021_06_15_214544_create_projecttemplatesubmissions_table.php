<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjecttemplatesubmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projecttemplatesubmissions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('projectTempID')->nullable();
            $table->foreign('projectTempID')->references('id')->on('projecttemplate');
            $table->string('submissionName');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projecttemplatesubmissions');
    }
}
