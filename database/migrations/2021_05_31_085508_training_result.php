<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TrainingResult extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('training_result', function (Blueprint $table) {
            $table->unsignedSmallInteger('id_student')->default(NULL)->nullable();
            $table->text('result')->default(NULL)->nullable();
            $table->date('date_current')->default(NULL)->nullable();

            $table->primary(['id_student','date_current']);
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
        Schema::dropIfExists('training_result');
    }
}
