<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViewsPost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('views_post', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_post')->unsigned();
            $table->foreign('id_post')->references('id')->on('posts')->onDelete('cascade');
            $table->integer('qtd');          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('views_post');
    }
}
