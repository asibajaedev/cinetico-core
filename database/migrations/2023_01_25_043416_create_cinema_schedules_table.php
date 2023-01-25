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
        Schema::create('cinema_schedules', function (Blueprint $table) {
            $table->id('cinema_schedule_id');
            $table->unsignedBigInteger('cinema_id')->nullable(false);
            $table->unsignedBigInteger('schedule_id')->nullable(false);

            $table->foreign('cinema_id')->references('cinema_id')->on('cinemas');
            $table->foreign('schedule_id')->references('schedule_id')->on('schedules');
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
            $table->dropForeign(['cinema_id']);
            $table->dropForeign(['schedule_id']);
        });
        Schema::dropIfExists('cinema_schedules');
    }
};
