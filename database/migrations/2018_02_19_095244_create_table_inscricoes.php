<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableInscricoes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscricoes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomeCompleto');
            $table->date('dataNascimento');
            $table->string('pai');
            $table->string('mae');
            $table->string('sexo');
            $table->string('escolaridade');
            $table->string('identidade');
            $table->string('cpf')->unique();
            $table->string('estado');
            $table->string('cidade');
            $table->string('endereco');
            $table->string('cep');
            $table->string('bairro');
            $table->string('numero');
            $table->string('email')->unique();
            $table->string('telefone');
            $table->timestamps();
        });

        Schema::create('inscricao_publicacao', function (Blueprint $table) {
            $table->integer('inscricao_id')->unsigned();
            $table->integer('publicacao_id')->unsigned();

            $table->foreign('inscricao_id')->references('id')->on('inscricoes')->onDelete('cascade');
            $table->foreign('publicacao_id')->references('id')->on('publicacoes')->onDelete('cascade');


            $table->primary(['inscricao_id','publicacao_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inscricao_publicacao');
        Schema::dropIfExists('inscricoes');
    }
}
