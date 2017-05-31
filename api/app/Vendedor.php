<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendedor extends Models{

protected $fillable = [

		'nome', 'email' ];


}

 public function vendas(){

 	return $this->hasMany(Venda::class, 'idVendedor');
    }

?>