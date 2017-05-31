<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendasTable extends Migration
{

/**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendas', function (Blueprint $table) {

        	$table->increments('idVenda');
            $table->integer('idVendedor')->unsigned();
        	$table->double('valorVenda');
        	$table->double('valorcomissao');
        	$table->timestamps();


            $table->foreign('idVendedor')->references('idVendedor')->on('vendedores');

        	  });
}

 /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendas');
    }
}

