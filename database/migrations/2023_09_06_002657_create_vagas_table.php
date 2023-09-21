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
        Schema::create('vagas', function (Blueprint $table) {
            $table->increments('id_vaga');
            $table->timestamps();
            $table->string('nomeVaga');
            $table->integer('quantidade');
            $table->date('criada_em');
            $table->text('descricaoVaga');
            $table->integer('habilidade_id')->unsigned()->nullable();
            $table->foreign('habilidade_id')->references('id_habilidade')->on('habilidades')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vagas');
    }
};
