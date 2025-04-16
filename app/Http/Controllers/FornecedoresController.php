<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;

class FornecedoresController extends Controller
{
    public function index(){
        return View('site.fornecedor.index', ['pagina' => 'Página de']);
    }

    public function listar(Request $request){

        $fornecedores = Fornecedor::where('nome', 'like', '%'.$request->input('nome').'%')
            ->where('site', 'like', '%'.$request->input('site').'%')
            ->where('uf', 'like', '%'.$request->input('uf').'%')
            ->where('email', 'like', '%'.$request->input('email').'%')
            // ->get();
            ->simplePaginate(2);

        return View('site.fornecedor.listar', ['pagina' => 'Página de', 'fornecedores' => $fornecedores]);
    }

    public function adicionar(Request $request){

        $msg = '';

        //Inserção
        if ($request->input('_token') != '' && $request->input('id') == ''){
            //validação
            $regras = [
                'nome' => 'required|min:3|max:40',
                'site' => 'required',
                'uf' => 'required|min:2|max:2',
                'email' => 'email'
            ];

            $feedback = [
                'nome.required' => 'O campo nome precisa ser preenchido',
                'nome.min' => 'O campo nome precisa ter no mínimo 3 caracteres',
                'nome.max' => 'O campo nome precisa ter no máximo 40 caracteres',
                'site.required' => 'O campo site precisa ser preenchido',
                'uf.required' => 'O campo UF precisa ser preenchido',
                'uf.min' => 'O campo UF precisa ter no mínimo 2 caracteres',
                'uf.max' => 'O campo UF precisa ter no máximo 2 caracteres',
                'email.email' => 'O campo email não é válido'
            ];

            $request->validate($regras, $feedback);

            $fornecedor = new Fornecedor();
            $fornecedor->create($request->all());
            
            $msg = 'Cadastro realizado com sucesso!';
        }

        //Edição
        if ($request->input('_token') != '' && $request->input('id') != ''){
            $fornecedor = Fornecedor::find($request->input('id'));
            $update = $fornecedor->update($request->all());

            if ($update){
                $msg = 'Cadastro atualizado com sucesso!';
            } else {
                $msg = 'Erro ao atualizar o cadastro!';
            }
        }
        
        return View('site.fornecedor.adicionar', ['pagina' => 'Página de ', 'msg' => $msg]);
    }

    public function editar($id){
        $fornecedor = Fornecedor::find($id);
        return View('site.fornecedor.adicionar', ['pagina' => 'Página de ', 'fornecedor' => $fornecedor]);
        
    }
}
