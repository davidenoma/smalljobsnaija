<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table -> bigInteger('talent_id',$autoIncrement = false,$unsigned = true);
            $table -> bigInteger('customer_id',$autoIncrement = false, $unsigned = true);
            $table -> foreign('talent_id')->references('id')->on('users');
            $table -> foreign('customer_id')->references('id')->on('users');
            
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
        Schema::dropIfExists('offers');
    }
}
