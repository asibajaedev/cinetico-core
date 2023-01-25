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
        Schema::create('cinema_listings', function (Blueprint $table) {
            $table->id('cinema_listing_id');
            $table->unsignedBigInteger('movie_id')->nullable(false);
            $table->unsignedBigInteger('cinema_id')->nullable(false);
            $table->boolean('active')->nullable(false)->default(1);

            $table->foreign('movie_id')->references('movie_id')->on('movies');
            $table->foreign('cinema_id')->references('cinema_id')->on('cinemas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cinema_schedules', function (Blueprint $table){
            $table->dropForeign(['movie_id']);
            $table->dropForeign(['cinema_id']);
        });
        Schema::dropIfExists('cinema_listings');
    }
};
