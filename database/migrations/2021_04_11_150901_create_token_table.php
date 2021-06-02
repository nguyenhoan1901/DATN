<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTokenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('token', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('thumb')->nullable();
            $table->string('video')->nullable();
            $table->decimal('price')->default(0);
            $table->decimal('priceInDollar', 18, 8)->default(0);
            $table->integer('auctionCreatedAt')->default(0);
            $table->string('backgroundColor')->nullable();
            $table->string('coinrankingUrl')->nullable();
            $table->string('tokenId')->nullable();
            $table->string('dappName')->nullable();
            $table->string('dappSlug')->nullable();
            $table->string('slug')->nullable();
            $table->string('registryId')->nullable();
            $table->string('source_id', 190);
            $table->integer('dapps_id');
            $table->text('raw_data');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('token');
    }
}
