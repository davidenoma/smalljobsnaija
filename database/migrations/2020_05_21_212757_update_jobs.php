<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateJobs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Jobs', function (Blueprint $table) {
            //
            $table -> bigInteger('employer_id',$autoIncrement = false, $unsigned = true);
            
            $table -> foreign('employer_id')->references('id')->on('Employers');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Jobs', function (Blueprint $table) {
            //
        });
    }
}
