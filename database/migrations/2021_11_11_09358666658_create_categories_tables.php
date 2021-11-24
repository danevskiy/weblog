<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoriesTables extends Migration
{
    public function up()
    {
           Schema::dropIfExists('category_translations');
        Schema::dropIfExists('categories');
        Schema::create('categories', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            
            createDefaultTableFields($table);
            
            // add those 2 columns to enable publication timeframe fields (you can use publish_start_date only if you don't need to provide the ability to specify an end date)
            // $table->timestamp('publish_start_date')->nullable();
            // $table->timestamp('publish_end_date')->nullable();
        });





        Schema::create('category_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'category');
            $table->string('title', 200)->nullable();
            $table->text('description')->nullable();
            $table->text('text_cat')->nullable();
        });

        Schema::create('category_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'category');
        });

        

        
    }

    public function down()
    {
        
        Schema::dropIfExists('category_translations');
        Schema::dropIfExists('categories');
    }
}
