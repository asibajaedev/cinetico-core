<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_casts', function (Blueprint $table) {
            $table->id('movie_cast_id');
            $table->unsignedBigInteger('cast_id')->nullable(false);
            $table->unsignedBigInteger('movie_id')->nullable(false);

            $table->foreign('cast_id')->references('cast_id')->on('casts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('movie_casts', function (Blueprint $table) {
            $table->dropForeign(['cast_id']);
        });
        Schema::dropIfExists('movie_casts');
    }
};
