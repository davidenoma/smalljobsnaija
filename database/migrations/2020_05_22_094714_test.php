<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Test extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('offers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table -> bigInteger('talent_id', $autoIncrement = false, $unsigned = true);
            $table -> bigInteger('job_id', $autoIncrement = false, $unsigned = true);
            $table -> foreign('talent_id')->references('id')->on('users');
            $table -> foreign('job_id')->references('id')->on('jobs');
            $table -> string('name');
            $table -> integer('amount');
            $table -> smallInteger('status');
            
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
