<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormationdébouchéTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formation_débouchés', function (Blueprint $table) {
            $table->foreignId('formation_id');
            $table->foreignId('débouché_id');
            $table->primary(['formation_id', 'débouché_id']);
            $table->timestamps();

            $table->foreign('formation_id')->references('id')->on('formations');
            $table->foreign('débouché_id')->references('id')->on('débouché');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formation_débouchés');
    }
}
