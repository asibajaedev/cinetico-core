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
        Schema::create('movies', function (Blueprint $table) {
            $table->id('movie_id');
            $table->unsignedBigInteger('gender_id')->nullable(false);
            $table->unsignedBigInteger('classification_id')->nullable(false);
            $table->string('name', length: 255)->nullable(false)->unique();
            $table->text('synopsis')->nullable(false);
            $table->date('release_date')->nullable(false);
            $table->boolean('coming_soon')->nullable(false)->default(1);
            $table->timestamps();

            $table->foreign('gender_id')->references('gender_id')->on('genders');
            $table->foreign('classification_id')->references('classification_id')->on('classifications');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('movies', function (Blueprint $table){
            $table->dropForeign(['gender_id']);
            $table->dropForeign(['classification_id']);
        });
        Schema::dropIfExists('movies');
    }
};
