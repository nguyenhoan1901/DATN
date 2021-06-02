<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PhysicalResult extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('physical_result', function (Blueprint $table) {
            $table->unsignedSmallInteger('id_student')->default(NULL)->nullable();
            $table->text('result')->default(NULL)->nullable();
            $table->date('date_update')->default(NULL)->nullable();

            $table->primary(['id_student','date_update']);
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
        Schema::dropIfExists('physical_result');
    }
}
