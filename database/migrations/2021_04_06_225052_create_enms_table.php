<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('shortDescription');
            $table->text('largeDescription');


             $table->unsignedBigInteger('species_id')->unique();
             $table->foreign('species_id')
                ->references('id')->on('species')
                ->onDelete('cascade');

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
        Schema::dropIfExists('enms');
    }
}
