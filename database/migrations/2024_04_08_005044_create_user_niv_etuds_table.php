<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_niv_etuds', function (Blueprint $table) {
            $table->foreignId('user_id');
            $table->foreignId('niv_etud_id');

            $table->primary(['user_id','niv_etud_id']);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('user');
            $table->foreign('niv_etud_id')->references('id')->on('niv_etudiant');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_niv_etuds');
    }
};
