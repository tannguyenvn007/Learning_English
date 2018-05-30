<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_test', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->unsigned();
            $table->integer('id_question')->unsigned();
            $table->integer('id_answer')->unsigned();
            $table->integer('id_topics')->unsigned();
            $table->string('corect');
            $table->foreign('id_question')
            ->references('id')->on('question')
            ->onDelete('cascade');
            
            $table->foreign('id_user')
            ->references('id')->on('users')
            ->onDelete('cascade');
            $table->foreign('id_topics')
            ->references('id')->on('topics')
            ->onDelete('cascade');
            $table->foreign('id_answer')
            ->references('id')->on('answer')
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
        Schema::dropIfExists('user_test');
    }
}
