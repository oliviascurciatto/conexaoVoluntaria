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
            $table->id();
            $table->string('nome');
            $table->string('cpf');
            $table->string('email');
            $table->string('password');
            $table->string('imagem')->nullable();
            $table->text('sobre')->nullable();
            $table->string('telefone');
            $table->string('cidade')->nullable();
            $table->string('estado')->nullable();
            $table->foreignId('genero_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('habilidade_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
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
