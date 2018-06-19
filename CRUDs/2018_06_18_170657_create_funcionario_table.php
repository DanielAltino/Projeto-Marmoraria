<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncionarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionario', function (Blueprint $table) {
            $table->increments('id');
		 $table->string('nome');
		 $table->date('dataNascimento');
		 $table->string('sexo');	
		 $table->string('CPF');
		 $table->string('RG');
		 $table->string('endereco');
		 $table->string('telefone');
		 $table->string('email');
		 $table->string('nroCarteiraTrabalho');
		 $table->string('cargoFuncionario');
		 $table->date('dataAdmissao');
		 $table->string('salario');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('funcionario');
    }
}
