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
        Schema::create('voluntarios', function (Blueprint $table) {
            $table->increments('id_voluntario');
            $table->timestamps();
            $table->string('nome');
            $table->string('email');
            $table->string('senha');
            $table->integer('telefone_id')->unsigned();
            $table->foreign('telefone_id')->references('id_telefone')->on('telefones')->onUpdate('cascade');
            $table->integer('genero_id')->unsigned();
            $table->foreign('genero_id')->references('id_genero')->on('generos')->onUpdate('cascade');
            $table->integer('endereco_id')->unsigned();
            $table->foreign('endereco_id')->references('id_endereco')->on('enderecos')->onUpdate('cascade');
            $table->string('cpf');
            $table->integer('habilidade_id')->unsigned();
            $table->foreign('habilidade_id')->references('id_habilidade')->on('habilidades')->onUpdate('cascade');
            $table->integer('causa_id')->unsigned();
            $table->foreign('causa_id')->references('id_causa')->on('causas')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voluntarios');
    }
};
