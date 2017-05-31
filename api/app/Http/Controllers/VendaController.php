<?php


namespace App\http\Controllers;

use Illuminate\Http\Request;

use App\Venda;


class VendaController extends Controller{


	public function _construct(){
		header('Access-Control-Allow-Original: *');

	}

	//Função para inserir dados da venda no banco e retornar comissão
	public function store(Request $request, $id){

		
		$dados = $request->all();
		
		//Recebe o valor da venda
		$valorVenda = $request->input('valorVenda');
		$id = Request::input('id');
		

		$email = DB::table('vendedores')->where('idVendedor',$id)->value('email');
		$nome = DB::table('vendedores')->where('idVendedor',$id)->value('nome');

		  
  		//Calcula a comissão e atribui valor ao campo do banco
		$dados['valorComissao'] = $valorVenda * 0.085;
		$request->fill($dados); 

		//Criação do registro e inserção dos seguintes dados no banco 
		$dadosVenda = Input::only('idVendedor', 'valorVenda', 'valorComissao');
		$venda = Venda::create($dadosVenda);

		
		if(Request::has($venda){
			 
			return response()->json(['data'=>$valorComissao, $nome, $email 'status'=>true]);
		}

		
	}


}


?>