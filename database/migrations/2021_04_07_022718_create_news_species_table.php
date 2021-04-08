<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsSpeciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_species', function (Blueprint $table) {
            $table->id();
            $table->timestamps();


             $table->unsignedBigInteger('news_id');
             $table->unsignedBigInteger('species_id');

             $table->foreign('news_id')->references('id')->on('news')->onDelete('cascade');
             $table->foreign('species_id')->references('id')->on('species')->onDelete('cascade');




        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news_species');
    }
}
