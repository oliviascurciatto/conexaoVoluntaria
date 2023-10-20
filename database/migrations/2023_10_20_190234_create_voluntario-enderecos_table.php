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
        Schema::create('voluntario-enderecos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('endereco_id')->unsigned()->nullable();
            $table->foreign('endereco_id')->references('id_endereco')->on('enderecos')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('voluntario_id')->unsigned()->nullable();
            $table->foreign('voluntario_id')->references('id_voluntario')->on('voluntarios')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voluntario-enderecos');
    }
};
