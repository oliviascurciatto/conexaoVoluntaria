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
            $table->integer('cidade_id')->unsigned();
            $table->foreign('cidade_id')->references('id_cidade')->on('cidades')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('estado_id')->unsigned();
            $table->foreign('estado_id')->references('id_estado')->on('estados')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('rua_id')->unsigned();
            $table->foreign('rua_id')->references('id_rua')->on('ruas')->onUpdate('cascade')->onDelete('cascade');
            $table->string('complemento');
            $table->string('numero');
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
