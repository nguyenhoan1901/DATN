<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Schedule extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('schedule', function (Blueprint $table) {
            $table->unsignedSmallInteger('id_student')->default(NULL)->nullable();
            $table->string('semester',10)->default(NULL)->nullable();
            $table->date('date_start')->default(NULL)->nullable();
            $table->date('date_finish')->default(NULL)->nullable();
            $table->text('content')->default(NULL)->nullable();

            $table->primary(['id_student','semester']);
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
        Schema::dropIfExists('schedule');
    }
}
