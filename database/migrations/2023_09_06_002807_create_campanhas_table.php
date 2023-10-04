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
        Schema::create('campanhas', function (Blueprint $table) {
            $table->increments('id_campanha');
            $table->timestamps();
            $table->string('nomeCampanha');
            $table->date('criada_em');
            $table->text('descricaoCampanha')->nullable();
            $table->integer('causa_id')->unsigned()->nullable();
            $table->foreign('causa_id')->references('id_causa')->on('causas')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campanhas');
    }
};
