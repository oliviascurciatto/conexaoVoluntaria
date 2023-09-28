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
            $table->string('cpf');
            $table->string('senha');
            $table->string('imagem');
            $table->integer('telefone_id')->unsigned();
            $table->foreign('telefone_id')->references('id_telefone')->on('telefones')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('genero_id')->unsigned();
            $table->foreign('genero_id')->references('id_genero')->on('generos')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('endereco_id')->unsigned();
            $table->foreign('endereco_id')->references('id_endereco')->on('enderecos')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('habilidade_id')->unsigned();
            $table->foreign('habilidade_id')->references('id_habilidade')->on('habilidades')->onUpdate('cascade')->onDelete('cascade');
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
