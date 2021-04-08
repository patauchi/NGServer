<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('metaTitle');
            $table->text('metaDescription');
            $table->string('pageSlug');
            $table->string('category');
            $table->string('subcategory');
            $table->text('title');
            $table->text('subtitle');
            $table->text('shortDescription');
            $table->text('largDescription');
            $table->string('authorNews');
            $table->string('imageTitle');
            $table->string('imageSlug');
            $table->string('imageAuthor');
            $table->string('status');
            $table->string('homeMain');
            $table->string('newsMain');

            $table->unsignedBigInteger('categorie_id')->nullable();
            $table->foreign('categorie_id')
                ->references('id')->on('newscategories')
                ->onDelete('set null');

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
        Schema::dropIfExists('news');
    }
}
