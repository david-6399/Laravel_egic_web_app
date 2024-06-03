<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formations', function (Blueprint $table) {
            $table->id();
            $table->string('nome_forma');
            $table->integer('duree_forma');
            $table->integer('tarif_forma');
            $table->integer('favoris')->default(0);
            $table->string('image_path')->nullable();
            $table->unsignedBigInteger('cod_typeformation');
            $table->unsignedBigInteger('cod_program')->unique();
            $table->timestamps();
            
            $table->foreign('cod_typeformation')->references('id')->on('type_formations');
            $table->foreign('cod_program')->references('id')->on('programs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formations');
    }
}
