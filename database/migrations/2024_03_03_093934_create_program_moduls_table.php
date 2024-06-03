<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramModulsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('program_moduls', function (Blueprint $table) {
            $table->foreignid('program_id');
            $table->foreignid('module_id');
            $table->primary(['program_id','module_id']);
            $table->timestamps();

            $table->foreign('program_id')->references('id')->on('programs');
            $table->foreign('module_id')->references('id')->on('modules');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('program_moduls');
    }
}
