<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->increments('id_endereco');
            $table->timestamps();
            $table->integer('cidade_id')->unsigned();
            $table->foreign('cidade_id')->references('id_cidade')->on('cidades')->onUpdate('cascade');
            $table->integer('estado_id')->unsigned();
            $table->foreign('estado_id')->references('id_estado')->on('estados')->onUpdate('cascade');
            $table->integer('rua_id')->unsigned();
            $table->foreign('rua_id')->references('id_rua')->on('ruas')->onUpdate('cascade');
            $table->string('complemento')->nullable();
            $table->string('numero');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enderecos');
    }
}
