<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('metaTitle');
            $table->text('metaDescription');
            $table->string('slugPage');
            $table->string('category');
            $table->string('subcategory');
            $table->string('title');
            $table->text('subtitle');
            $table->string('imgSlug');
            $table->string('imgAuthor');
            $table->string('imgAlt');
            $table->string('imgTitle');
            $table->text('intro');
            $table->text('shortDescription');
            $table->text('largeDescription');
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
        Schema::dropIfExists('projects');
    }
}
