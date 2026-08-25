<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\plataformaModel;
use App\Models\usadoModel;
use App\Models\retroModel;
use App\Models\colecionadorModel;
use App\Models\corModel;
use App\Models\acessorioModel;

class acessorioController extends Controller
{
    // =============================================
    // 1. INDEX - exibe a página (GET /acessorio/index)
    // =============================================
    public function index()
    {
        // Carrega TODOS os dados necessários
        $acessorios = acessorioModel::all();
        $plataformas = plataformaModel::all();
        $estados = usadoModel::all();
        $retros = retroModel::all();
        $colecionadores = colecionadorModel::all();
        $colecionadores = corModel::all();

        // Envia para a view
        return view('acessorio.index', compact('acessorios', 'plataformas', 'estados', 'retros', 'colecionadores','cors'));
    }

    // =============================================
    // 2. ADD - salva um novo acessorio (POST /acessorio/add)
    // =============================================
    public function add(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'quantidade' => 'required|integer|min:1',
            'id_plataforma' => 'required|exists:plataforma_database,id',
            'id_estado' => 'required|exists:usado_database,id',
            'id_retro' => 'required|exists:retro_database,id',
            'id_colecionador' => 'required|exists:colecionador_database,id',
            'id_cor' => 'required|exists:cor_database,id',
        ]);

        acessorioModel::create($request->all());

        return redirect()->route('acessorio.index')
                         ->with('success', 'acessorio criado com sucesso!');
    }

    // =============================================
    // 3. REMOVE - remove um acessorio (DELETE /acessorio/remove?id=1)
    // =============================================
    public function remove(Request $request)
    {

        if (!$id) {
            return redirect()->route('acessorio.index')
                             ->with('error', 'ID não informado!');
        }

        $acessorio = acessorioModel::findOrFail($id);
        $acessorio->delete();

        return redirect()->route('acessorio.index')
                         ->with('success', 'acessorio removido com sucesso!');
    }

    // =============================================
    // 4. atualiza - atualiza um acessorio (atualiza /acessorio/atualiza?id=1)
    // =============================================

public function atualizar($id)
    {
        // Buscar o acessorio específico
        $acessorio = acessorioModel::find($id);
        
        if (!$acessorio) {
            return redirect()->route('acessorio.index')->with('error', 'acessorio não encontrado!');
        }

        // Buscar os dados para os selects
        $plataformas = plataformaModel::all();
        $estados = estadoModel::all();
        $retros = retroModel::all();
        $colecionadores = colecionadorModel::all();
        $cor = corModel::all();

        return view('acessorio.atualizar', compact('acessorio', 'plataformas', 'estados', 'retros', 'colecionadores','cors'));
    }

    public function save(Request $request)
    {
        // Validação
        $request->validate([
            'id' => 'required|exists:acessorios,id',
            'nome' => 'required|string|max:255',
            'quantidade' => 'required|integer|min:1',
            'id_plataforma' => 'required|exists:plataformas,id',
            'id_estado' => 'required|exists:estados,id',
            'id_retro' => 'required|exists:retros,id',
            'id_colecionador' => 'required|exists:colecionadores,id',
            'id_cor' => 'required|exists:cores,id',
        ]);

        // Buscar e atualizar o acessorio
        $acessorio = acessorioModel::find($request->id);
        
        if (!$acessorio) {
            return redirect()->route('acessorio.index')->with('error', 'acessorio não encontrado!');
        }

        $acessorio->nome = $request->nome;
        $acessorio->quantidade = $request->quantidade;
        $acessorio->id_plataforma = $request->id_plataforma;
        $acessorio->id_estado = $request->id_estado;
        $acessorio->id_retro = $request->id_retro;
        $acessorio->id_colecionador = $request->id_colecionador;
        $acessorio->id_cor = $request->id_cor;
        $acessorio->save();

        return redirect()->route('acessorio.index')->with('success', 'acessorio atualizado com sucesso!');
    }
}