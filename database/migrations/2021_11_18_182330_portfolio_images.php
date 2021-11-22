<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PortfolioImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolio_images', function (Blueprint $table) {
            $table->string('name');
            $table->string('image');
            // $table->unsignedBigInteger('item_id');
            // $table->foreign('item_id')->references('item_id')->on('portfolio');

            $table->bigInteger('item_id')->unsigned()->nullable();
            $table->foreign('item_id')->references('item_id')->on('portfolio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portfolio_images');
    }
}
