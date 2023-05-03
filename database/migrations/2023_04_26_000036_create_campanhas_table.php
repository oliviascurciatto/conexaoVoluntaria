<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampanhasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campanhas', function (Blueprint $table) {
            $table->increments('id_campanha');
            $table->timestamps();
            $table->string('nomeCampanha');
            $table->date('criada_em');
            $table->text('descricaoCampanha');
            $table->integer('causa_id')->unsigned();
            $table->foreign('causa_id')->references('id_causa')->on('causas')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campanhas');
    }
}
