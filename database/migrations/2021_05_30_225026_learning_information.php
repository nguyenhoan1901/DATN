<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LearningInformation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('learning_infomartion', function (Blueprint $table) {
            $table->unsignedSmallInteger('id_student');
            $table->string('year_entered_school',4);
            $table->string('training_level',20);
            $table->string('program',50);
            $table->string('faculty',50);
            $table->string('study_status',20);
            $table->string('grade',20);
            $table->string('course',3);
            $table->string('status',20);
            $table->integer('accumulation')->default(NULL)->nullable();
            $table->string('level_warning')->default(NULL)->nullable();

            $table->primary('id_student');
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
        Schema::dropIfExists('commanders');
    }
}
