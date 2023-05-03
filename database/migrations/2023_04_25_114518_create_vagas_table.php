<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVagasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vagas', function (Blueprint $table) {
            $table->increments('id_vaga');
            $table->timestamps();
            $table->string('nomeVaga');
            $table->integer('quantidade');
            $table->date('criada_em');
            $table->text('descricaoVaga');
            $table->integer('habilidade_id')->unsigned();
            $table->foreign('habilidade_id')->references('id_habilidade')->on('habilidades')->onUpdate('cascade');
            $table->integer('servico_id')->unsigned();
            $table->foreign('servico_id')->references('id_servico')->on('servicos')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vagas');
    }
}
