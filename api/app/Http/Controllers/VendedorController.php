<?php


namespace App\http\Controllers;

use Illuminate\Http\Request;


class VendedorController extends Controller
{



	//Função para cadastrar vendedores
	public function store(Request $request)
	{

		$dados = $request->all();
		$vendedor = Vendedor::create($dados);
		
		if($vendedor){
			
			return response()->json(['data'=>$vendedor, 'status'=>true]);
		}else{

			return response()->json(['data'=>'Erro ao cadastrar vendedor', 'status'=>false]);
		}

		
	}

		
	}

	//Buscar o vendedor da sessão e retornar seu email e nome
	public function show($id){

         $vendedor = Vendedor::find($id);
       	 $nome = $request->query('nome');
       	 $email = $request->query('email');

        if($vendedor){
             return response()->json(['data'=>$nome, $email 'status'=>true]);
             
         }else{
            return response()->json(['data'=>'Não existe esse vendedor cadastrado', 'status'=>false]);
         }
     }
	}


}


?>