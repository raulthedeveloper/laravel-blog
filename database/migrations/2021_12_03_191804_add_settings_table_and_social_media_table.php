<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSettingsTableAndSocialMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_settings', function (Blueprint $table) {
             $table->unsignedBigInteger('settings_id');
             $table->foreign('settings_id')->references('id')->on('users');
             $table->string('contact_email');
             $table->string('facebook');
             $table->string('instagram');
             $table->string('linkedin');
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

        Schema::dropIfExists('user_settings');

       
    }
}
