<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('endereco');
            $table->string('tell', 15);
            $table->string('redes_sociais');
            $table->string('membro_igreja');
            $table->string('imagem');
            $table->date('niver');
            $table->date('data_membro');
            $table->string('observacoes');
            $table->string('casado_com');
            $table->date('niver_casamento');
            $table->boolean('tipo');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pessoas');
    }
}