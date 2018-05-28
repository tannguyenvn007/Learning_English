<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anwsers', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('anwser');
            $table->string('corect');
       
            $table->timestamps();
            $table->integer('id_question')->unsigned();
            $table->foreign('id_question')
      ->references('id')->on('questions')
      ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anwsers');
    }
}
