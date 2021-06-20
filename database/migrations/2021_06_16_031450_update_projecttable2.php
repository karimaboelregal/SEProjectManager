<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateProjecttable2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
       

        Schema::table('project', function (Blueprint $table) {
            $table->unsignedBigInteger('ProjectTemplateId');
            $table->foreign('ProjectTemplateId')->references('id')->on('projecttemplate');
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
