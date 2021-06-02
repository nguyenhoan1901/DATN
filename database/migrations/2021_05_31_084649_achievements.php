<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Achievements extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('achievements', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->unsignedSmallInteger('id_student');
            $table->text('content')->default(NULL);
            $table->date('date_echievement')->default(NULL);
            $table->enum('level',['1','2','3','4','5']);

            $table->foreign('id_student')->references('id')->on('students');
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
        Schema::dropIfExists('achievements');
    }
}
