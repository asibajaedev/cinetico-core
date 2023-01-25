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
        Schema::create('casts', function (Blueprint $table) {
            $table->id('cast_id');
            $table->unsignedBigInteger('cast_type_id')->nullable(false);
            $table->string('name', length: 250)->nullable(false);

            $table->foreign('cast_type_id')->references('cast_type_id')->on('cast_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('casts', function (Blueprint $table) {
            $table->dropForeign(['cast_type_id']);
        });
        Schema::dropIfExists('casts');
    }
};
