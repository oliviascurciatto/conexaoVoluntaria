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
        Schema::create('ongs', function (Blueprint $table) {
            $table->increments('id_ong');
            $table->timestamps();
            $table->string('nome');
            $table->string('email');
            $table->string('cnpj');
            $table->string('senha');
            $table->string('imagem');
            $table->text('descricaoOng');
            $table->integer('endereco_id')->unsigned();
            $table->foreign('endereco_id')->references('id_endereco')->on('enderecos')->onUpdate('cascade');
            $table->integer('causa_id')->unsigned();
            $table->foreign('causa_id')->references('id_causa')->on('causas')->onUpdate('cascade');
            $table->integer('vaga_id')->unsigned()->nullable();
            $table->foreign('vaga_id')->references('id_vaga')->on('vagas')->onUpdate('cascade');
            $table->integer('campanha_id')->unsigned()->nullable();
            $table->foreign('campanha_id')->references('id_campanha')->on('campanhas')->onUpdate('cascade');
            $table->integer('telefone_id');
            $table->foreign('telefone_id')->references('id_telefone')->on('telefones')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ongs');
    }
};
