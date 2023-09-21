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
        Schema::create('enderecos', function (Blueprint $table) {
            $table->increments('id_endereco');
            $table->timestamps();
            $table->integer('cidade_id')->unsigned()->nullable();
            $table->foreign('cidade_id')->references('id_cidade')->on('cidades')->onUpdate('cascade');
            $table->integer('estado_id')->unsigned()->nullable();
            $table->foreign('estado_id')->references('id_estado')->on('estados')->onUpdate('cascade');
            $table->integer('rua_id')->unsigned()->nullable();
            $table->foreign('rua_id')->references('id_rua')->on('ruas')->onUpdate('cascade');
            $table->string('complemento')->nullable();
            $table->string('numero')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enderecos');
    }
};
