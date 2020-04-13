<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForumDislikes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Forum_dislikes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table -> bigInteger('forum_post_id',$autoIncrement = false,$unsigned=true);
            $table-> bigInteger('user_id',$autoIncrement = false,$unsigned = true);
            $table -> foreign('forum_post_id')->references('id')->on('forum_posts');
            $table -> foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('Forum_dislikes');
    }
}
