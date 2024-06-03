<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormationNivEtudsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formation_niv_etuds', function (Blueprint $table) {
            $table->foreignId('formation_id');
            $table->foreignId('niv_etudiant_id');
            $table->primary(['formation_id', 'niv_etudiant_id']);
            $table->timestamps();

            $table->foreign('formation_id')->references('id')->on('formations');
            $table->foreign('niv_etudiant_id')->references('id')->on('niv_etudiants');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formation_niv_etuds');
    }
}
