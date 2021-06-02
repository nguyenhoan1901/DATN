<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LearningOutcomes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('learning_outcomes', function (Blueprint $table) {
            $table->unsignedSmallInteger('id_student')->default(NULL)->nullable();
            $table->double('cpa')->default(NULL)->nullable();
            $table->double('gpa')->default(NULL)->nullable();
            $table->text('subject_debt')->default(NULL)->nullable();
            $table->string('semester',10)->default(NULL)->nullable();

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
        Schema::dropIfExists('learning_outcomes');
    }
}
