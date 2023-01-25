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
        Schema::create('cinemas', function (Blueprint $table) {
            $table->id('cinema_id');
            $table->unsignedBigInteger('cinema_type_id')->nullable(false);
            $table->string('room_name', length: 30)->nullable(false);

            $table->foreign('cinema_type_id')->references('cinema_type_id')->on('cinema_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cinemas', function (Blueprint $table){
            $table->dropForeign(['cinema_type_id']);
        });
        Schema::dropIfExists('cinemas');
    }
};
