<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ScheduleDuty extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('schedule_duty', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->date('date_duty')->nullable();
            $table->unsignedSmallInteger('id_student')->nullable();
            $table->unsignedTinyInteger('id_commander')->nullable();
            $table->timestamps();

            $table->foreign('id_student')->references('id')->on('students');
            $table->foreign('id_commander')->references('id')->on('commanders');
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
        Schema::dropIfExists('schedule_duty');
    }
}
