<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Commanders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('commanders', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('username');
            $table->string('fullname',30);
            $table->date('birthday');
            $table->enum('gender', ['male', 'female'])->default('male');
            $table->string('hometown',100);
            $table->string('phonenumber',12);
            $table->string('email',50)->unique();
            $table->enum('rank',['11','21','31','41','12','22','32','42']);
            $table->string('position_government',50);
            $table->string('organization',50);
            $table->string('avatar',100);
            $table->rememberToken();

            $table->foreign('username')->references('username')->on('users');
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
