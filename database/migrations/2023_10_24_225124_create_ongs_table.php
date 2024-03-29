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
            $table->id();
            $table->string('nomeOng');
            $table->string('cnpj')->unique();
            $table->string('imagem')->nullable();
            $table->text  ('sobre')->nullable();
            $table->string('telefone');
            $table->string('rua')->nullable();
            $table->string('numero')->nullable();
            $table->string('complemento')->nullable();
            $table->string('bairro')->nullable();
            $table->string('cidade');
            $table->string('estado');
            $table->foreignIdFor(\App\Models\Causa::class)->nullable()->constrained()->onDelete('cascade')->onUpdate('cascade');;
            $table->foreignIdFor(\App\Models\User::class)->constrained()->onDelete('cascade')->onUpdate('cascade');;
            $table->timestamps();
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
