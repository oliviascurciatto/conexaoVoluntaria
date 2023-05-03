<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOngsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ongs', function (Blueprint $table) {
            $table->increments('id_ong');
            $table->timestamps();
            $table->string('nome');
            $table->string('email');
            $table->string('cnpj');
            $table->text('descricaoOng');
            $table->integer('endereco_id')->unsigned();
            $table->foreign('endereco_id')->references('id_endereco')->on('enderecos')->onUpdate('cascade');
            $table->integer('causa_id')->unsigned();
            $table->foreign('causa_id')->references('id_causa')->on('causas')->onUpdate('cascade');
            $table->integer('vaga_id')->unsigned()->nullable();
            $table->foreign('vaga_id')->references('id_vaga')->on('vagas')->onUpdate('cascade');
            $table->integer('campanha_id')->unsigned()->nullable();
            $table->foreign('campanha_id')->references('id_campanha')->on('campanhas')->onUpdate('cascade');
            $table->integer('telefone_id')->unsigned();
            $table->foreign('telefone_id')->references('id_telefone')->on('telefones')->onUpdate('cascade');
            $table->string('empresaParceira');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ongs');
    }
}
