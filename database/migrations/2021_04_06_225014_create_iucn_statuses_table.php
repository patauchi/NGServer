<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIucnStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iucn_statuses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('populationStatus');
            $table->string('iucn_category');

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
        Schema::dropIfExists('iucn_statuses');
    }
}
