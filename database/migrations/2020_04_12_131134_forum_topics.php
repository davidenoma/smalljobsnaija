<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForumTopics extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Forum_Topics', function (Blueprint $table) {
            $table->increments('id');           
            $table->timestamps();
            // $table -> primary('id');
            $table -> string('topic');
            $table -> string('category');
            $table -> bigInteger('user_id', $autoIncrement = false, $unsigned = true);                       
            $table -> foreign('user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ForumTopics');
    }
}
