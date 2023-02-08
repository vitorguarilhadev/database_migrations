<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->bigInteger('id', true)->unsigned();
            $table->string('cep', 50)->comment('CEP do cliente');
            $table->string('endereco', 100)->comment('Endereço do cliente');
            $table->string('cidade', 70)->comment('Cidade do cliente');
            $table->string('bairro', 150)->comment('Bairro do cliente');
            $table->string('estado', 70)->comment('Estado do cliente');
            $table->string('numero', 5)->comment('Número do cliente');
            $table->string('complemento', 50)->nullable()->comment('Complemento do cliente');
            $table->unsignedBigInteger('cliente_id');
            $table->foreign('cliente_id')->references('id')->on('clientes');
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
        Schema::dropIfExists('enderecos');
    }
}
