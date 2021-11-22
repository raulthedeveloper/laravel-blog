<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Images extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_images', function (Blueprint $table) {
            $table->string('name');
            $table->string('image');

            $table->bigInteger('post_id')->unsigned()->nullable();
            $table->foreign('post_id')->references('post_id')->on('posts');

            // $table->unsignedBigInteger('post_id');
            // $table->foreign('post_id')->references('post_id')->on('posts');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_images');
    }
}
