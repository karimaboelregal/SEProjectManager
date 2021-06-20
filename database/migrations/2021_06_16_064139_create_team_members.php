<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamMembers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_members', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('TeamId');
            $table->unsignedBigInteger('TeamMemberId');
            $table->foreign('TeamMemberId')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('TeamId')->references('id')->on('team');
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
        Schema::dropIfExists('team_members');
    }
}
