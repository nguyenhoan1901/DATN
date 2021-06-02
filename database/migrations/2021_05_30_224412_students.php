<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Students extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('students', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('username');
            $table->string('fullname',30);
            $table->date('birthday');
            $table->enum('gender', ['male', 'female'])->default('male');
            $table->string('hometown',100);
            $table->string('phonenumber',12);
            $table->string('email',50)->unique();
            $table->enum('rank',['b1','b2','h1','h2','h3']);
            $table->string('position_government',50);
            $table->string('organization',50);
            $table->date('date_enlistment');
            $table->date('date_party');
            $table->date('official');
            $table->string('position_party',50);
            $table->string('avatar',50);
            $table->enum('role',[0,1])->default(0)->nullable();
            $table->unsignedTinyInteger('id_group')->nullable();
            $table->rememberToken();

            $table->foreign('username')->references('username')->on('users');
            $table->foreign('id_group')->references('id')->on('group');
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
