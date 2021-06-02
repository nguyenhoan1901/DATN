<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BreakDiscipline extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('break_discipline', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->unsignedSmallInteger('id_student')->default(NULL)->nullable();
            $table->text('content')->default(NULL)->nullable();
            $table->date('date_break')->default(NULL)->nullable();
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
        Schema::dropIfExists('break_discipline');
    }
}
