<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table -> string('content');
     
            $table-> bigInteger('source_id',$autoIncrement = false,$unsigned = true);
            $table-> bigInteger('loc_id',$autoIncrement = false,$unsigned = true);
            $table->timestamps();
            $table -> foreign('source_id')->references('id')->on('users');
            $table -> foreign('loc_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
