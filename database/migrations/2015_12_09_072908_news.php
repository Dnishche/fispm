<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class News extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id')->unsigned();

            $table->boolean('active');
            $table->string('title');

            $table->string('title_en')->unique();

            $table->string('img_url');
            $table->string('segment')->nullable();
            $table->text('content');
            
            $table->timestamp('published_at');
            $table->timestamps();
            $table->softDeletes();   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('news');
    }
}