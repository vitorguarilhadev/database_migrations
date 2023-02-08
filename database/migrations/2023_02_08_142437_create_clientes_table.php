<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigInteger('id', true)->unsigned();
            $table->string('foto', 250)->nullable()->comment('Arquivo de foto do cliente');
            $table->string('nome', 100)->comment('Nome do cliente');
            $table->string('nome_mae', 100)->comment('Nome da mãe do cliente');
            $table->date('data_nascimento')->comment('Data de nascimento do cliente');
            $table->string('cpf', 14)->comment('CPF do cliente');
            $table->string('cns')->comment('cns do cliente');
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
        Schema::dropIfExists('clientes');
    }
}
