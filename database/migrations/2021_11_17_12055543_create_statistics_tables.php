<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStatisticsTables extends Migration
{
    public function up()
    {
        Schema::dropIfExists('statistic_translations');
        Schema::dropIfExists('statistic_slugs');
        Schema::dropIfExists('statistics');
        Schema::create('statistics', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);
            
            $table->integer('position')->unsigned()->nullable();
            
            // add those 2 columns to enable publication timeframe fields (you can use publish_start_date only if you don't need to provide the ability to specify an end date)
            // $table->timestamp('publish_start_date')->nullable();
            // $table->timestamp('publish_end_date')->nullable();
        });

        Schema::create('statistic_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'statistic');
            $table->string('title', 200)->nullable();
            $table->text('sub_title')->nullable();
            $table->text('description')->nullable();

        });

        Schema::create('statistic_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'statistic');
        });

        
    }

    public function down()
    {
        
        Schema::dropIfExists('statistic_translations');
        Schema::dropIfExists('statistic_slugs');
        Schema::dropIfExists('statistics');
    }
}
