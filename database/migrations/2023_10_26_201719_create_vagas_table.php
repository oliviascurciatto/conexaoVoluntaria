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
        Schema::create('vagas', function (Blueprint $table) {
            $table->id();
            $table->string('nomeVaga');
            $table->text('descricaoVaga')->nullable();
            $table->integer('quantidade')->nullable();
            $table->dateTime('encerra_em');
            $table->foreignId('ong_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('habilidade_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vagas');
    }
};
