<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicos', function (Blueprint $table) {
            $table->increments('id_servico');
            $table->timestamps();
            $table->string('tipoServico');
            $table->date('criado_em');
            $table->text('descricao');
            $table->integer('habilidade_id')->unsigned();
            $table->foreign('habilidade_id')->references('id_habilidade')->on('habilidades')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicos');
    }
}
