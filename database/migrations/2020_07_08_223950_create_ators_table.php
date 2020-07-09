<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ators', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_idmovie');
            $table->string('actor');
            $table->timestamps();

            $table->foreign('fk_idmovie')->references('id')->on('filmes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ators');
    }
}
