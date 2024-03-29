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
            $table->string('imagem')->nullable();
            $table->text('sobre')->nullable();
            $table->string('telefone');
            $table->string('cidade')->nullable();
            $table->string('estado')->nullable();
            $table->foreignIdFor(\App\Models\Genero::class)->nullable()->constrained()->onDelete('cascade')->onUpdate('cascade');;
            $table->foreignIdFor(\App\Models\Habilidade::class)->nullable()->constrained()->onDelete('cascade')->onUpdate('cascade');;
            $table->foreignIdFor(\App\Models\User::class)->constrained()->onDelete('cascade')->onUpdate('cascade');;
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
