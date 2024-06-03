<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormationSUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formations-user', function (Blueprint $table) {
            $table->foreignId('formation_id');
            $table->foreignId('user_id');
            $table->primary(['formation_id', 'user_id']);
            $table->timestamps();

            $table->foreign('formation_id')->references('id')->on('formations');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_formations');
    }
}
