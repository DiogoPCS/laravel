<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\plataformaModel;
use App\Models\usadoModel;
use App\Models\retroModel;
use App\Models\colecionadorModel;
use App\Models\jogoModel;

class JogoController extends Controller
{
    // =============================================
    // 1. INDEX - exibe a página (GET /jogo/index)
    // =============================================
    public function index()
    {
        // Carrega TODOS os dados necessários
        $jogos = jogoModel::all();
        $plataformas = plataformaModel::all();
        $estados = usadoModel::all();
        $retros = retroModel::all();
        $colecionadores = colecionadorModel::all();

        // Envia para a view
        return view('jogo.index', compact('jogos', 'plataformas', 'estados', 'retros', 'colecionadores'));
    }

    // =============================================
    // 2. ADD - salva um novo jogo (POST /jogo/add)
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
        ]);

        jogoModel::create($request->all());

        return redirect()->route('jogo.index')
                         ->with('success', 'Jogo criado com sucesso!');
    }

    // =============================================
    // 3. REMOVE - remove um jogo (DELETE /jogo/remove?id=1)
    // =============================================
    public function remove(Request $request)
    {

        if (!$id) {
            return redirect()->route('jogo.index')
                             ->with('error', 'ID não informado!');
        }

        $jogo = jogoModel::findOrFail($id);
        $jogo->delete();

        return redirect()->route('jogo.index')
                         ->with('success', 'Jogo removido com sucesso!');
    }

    // =============================================
    // 4. atualiza - atualiza um jogo (atualiza /jogo/atualiza?id=1)
    // =============================================

public function atualizar($id)
    {
        // Buscar o jogo específico
        $jogo = jogoModel::find($id);
        
        if (!$jogo) {
            return redirect()->route('jogo.index')->with('error', 'Jogo não encontrado!');
        }

        // Buscar os dados para os selects
        $plataformas = plataformaModel::all();
        $estados = estadoModel::all();
        $retros = retroModel::all();
        $colecionadores = colecionadorModel::all();

        return view('jogo.atualizar', compact('jogo', 'plataformas', 'estados', 'retros', 'colecionadores'));
    }

    public function save(Request $request)
    {
        // Validação
        $request->validate([
            'id' => 'required|exists:jogos,id',
            'nome' => 'required|string|max:255',
            'quantidade' => 'required|integer|min:1',
            'id_plataforma' => 'required|exists:plataformas,id',
            'id_estado' => 'required|exists:estados,id',
            'id_retro' => 'required|exists:retros,id',
            'id_colecionador' => 'required|exists:colecionadores,id',
        ]);

        // Buscar e atualizar o jogo
        $jogo = jogoModel::find($request->id);
        
        if (!$jogo) {
            return redirect()->route('jogo.index')->with('error', 'Jogo não encontrado!');
        }

        $jogo->nome = $request->nome;
        $jogo->quantidade = $request->quantidade;
        $jogo->id_plataforma = $request->id_plataforma;
        $jogo->id_estado = $request->id_estado;
        $jogo->id_retro = $request->id_retro;
        $jogo->id_colecionador = $request->id_colecionador;
        $jogo->save();

        return redirect()->route('jogo.index')->with('success', 'Jogo atualizado com sucesso!');
    }
}