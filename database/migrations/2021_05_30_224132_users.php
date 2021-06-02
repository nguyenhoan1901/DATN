<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('users', function (Blueprint $table) {
            $table->string('username');
            $table->string('password');
            $table->boolean('is_admin')->default(0);
            $table->softDeletes();
            $table->rememberToken();

            $table->primary('username');
        });

        Schema::create('group', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('name_group',10)->default(NULL)->nullable();
            $table->string('school',100)->default(NULL)->nullable();

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
        Schema::dropIfExists('users');
        Schema::dropIfExists('group');
    }
}
