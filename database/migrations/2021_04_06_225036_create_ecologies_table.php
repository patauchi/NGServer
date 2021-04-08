<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEcologiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecologies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('habitat');
            $table->text('feedingBehavior');
            $table->text('eegs');
            $table->text('nesting');
            $table->text('naturalHistoryDescription');

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
        Schema::dropIfExists('ecologies');
    }
}
