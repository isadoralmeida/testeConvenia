<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venda extends Models{

protected $fillable = [

		'idVendedor', 'valorVenda', 'valorComissao' ];


 public function vendedores(){

        return $this->belongsTo(Vendedor::class, 'idVendedor');
    }

}

?>