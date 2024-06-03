<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupportCoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('support_cours', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('contenu');
            $table->date('date')->useCurrent();
            $table->string('nome_prof');
            $table->unsignedBigInteger('cod_module');
            $table->timestamps();

            $table->foreign('cod_module')->references('id')->on('modules');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('support_cours');
    }
}
