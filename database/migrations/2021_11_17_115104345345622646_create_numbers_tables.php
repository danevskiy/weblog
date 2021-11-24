<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNumbersTables extends Migration
{
    public function up()
    {


        Schema::dropIfExists('number_translations');
        Schema::dropIfExists('number_slugs');
        Schema::dropIfExists('numbers');
        
        Schema::create('numbers', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);
            
            $table->integer('position')->unsigned()->nullable();
            
            // add those 2 columns to enable publication timeframe fields (you can use publish_start_date only if you don't need to provide the ability to specify an end date)
            // $table->timestamp('publish_start_date')->nullable();
            // $table->timestamp('publish_end_date')->nullable();
        });

        Schema::create('number_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'number');
            $table->string('title', 200)->nullable();
            $table->string('real_title', 200)->nullable();
            $table->string('price_title', 200)->nullable();
            $table->string('price_title_prefix', 200)->nullable();
            $table->string('price_title_info', 200)->nullable();

            $table->string('bl1_numb', 200)->nullable();
            $table->string('bl1_text', 200)->nullable();

            $table->string('bl2_numb', 200)->nullable();
            $table->string('bl2_text', 200)->nullable();

            $table->string('bl3_numb', 200)->nullable();
            $table->string('bl3_text', 200)->nullable();

            $table->string('bl4_numb', 200)->nullable();
            $table->string('bl4_text', 200)->nullable();

            $table->string('bl5_numb', 200)->nullable();
            $table->string('bl5_text', 200)->nullable();


            
        });

        Schema::table('numbers', function (Blueprint $table) {
         
            $table->integer('bl1_pos')->nullable();
            $table->integer('bl2_pos')->nullable();
            $table->integer('bl3_pos')->nullable();
            $table->integer('bl4_pos')->nullable();
            $table->integer('bl5_pos')->nullable();
        });

        Schema::create('number_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'number');
        });

        
    }

    public function down()
    {
        
        Schema::dropIfExists('number_translations');
        Schema::dropIfExists('number_slugs');
        Schema::dropIfExists('numbers');
    }
}
