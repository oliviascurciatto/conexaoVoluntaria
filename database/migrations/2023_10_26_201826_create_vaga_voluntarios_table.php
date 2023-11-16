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
        Schema::create('vaga_voluntarios', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Voluntario::class)->constrained();
            $table->foreignIdFor(\App\Models\Vaga::class)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vaga_voluntarios');
    }
};
