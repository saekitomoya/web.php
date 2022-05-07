<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('characters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name'); 
            $table->integer('type');  
            $table->string('image_path')->nullable(); 
            $table->integer('job'); 
            $table->integer('rarity'); 
            $table->integer('attribute'); 
            $table->string('detail'); 
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
        Schema::dropIfExists('characters');
    }
}


