<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Proposal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('proposals', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('user_id');
            $table->string('paper_title');
            $table->string('u_email');

            $table->string('second_author');
            $table->string('second_author_email');
            $table->string('second_author_gender');
            $table->string('second_author_institute');
            $table->string('second_author_status');

            $table->string('third_author');
            $table->string('third_author_email');
            $table->string('third_author_gender');
            $table->string('third_author_institute');
            $table->string('third_author_status');


            $table->string('fourth_author');
            $table->string('fourth_author_email');
            $table->string('fourth_author_gender');
            $table->string('fourth_author_institute');
            $table->string('fourth_author_status');
            
            $table->string('image_url');
            $table->string('status');

            $table->timestamps();
    });
 }
}