<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Uploadpaper extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('uploadpapers', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('user_id');
            $table->string('u_email');
            $table->string('paper_title');
            $table->string('key1');
            $table->string('key2');
            $table->string('image_url');
            $table->string('status');
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
        //
    }
}
