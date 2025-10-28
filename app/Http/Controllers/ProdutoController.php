<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // You can return a view with produtos list here
        $produtos = Produto::latest()->paginate(12);
        return view('produtos.index', compact('produtos'));
    }

    public function create()
    {
        return view('produtos.create'); // Retorna o formulário criado
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 1. VALIDAÇÃO: Garante que todos os dados, incluindo as fotos, são válidos.
        $validatedData = $request->validate([
            'nome' => 'required|unique:produtos|max:255',
            'preco' => 'required|numeric|min:0',
            'estoque' => 'required|integer|min:0',
            'categoria' => 'required|string|max:100',

            // Validação de Imagens (Requisitos)
            'foto_1' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120', // Obrigatória, max 5MB
            'foto_2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120', // Opcional
            'foto_3' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120', // Opcional
        ]);

        $data = $validatedData;

        // 2. LÓGICA DE UPLOAD
        // O método store() do Laravel cuida de:
        // a) Gerar um nome de arquivo único (hash).
        // b) Mover o arquivo para o disco (storage/app/public/produtos).
        // c) Retornar o caminho do arquivo (ex: 'public/produtos/hash.jpg'), que será salvo no DB.

        // Foto 1 (Obrigatória)
        $data['foto_1'] = $request->file('foto_1')->store('public/produtos');

        // Foto 2 (Opcional)
        if ($request->hasFile('foto_2')) {
            $data['foto_2'] = $request->file('foto_2')->store('public/produtos');
        }

        // Foto 3 (Opcional)
        if ($request->hasFile('foto_3')) {
            $data['foto_3'] = $request->file('foto_3')->store('public/produtos');
        }

        // 3. PERSISTÊNCIA NO BANCO DE DADOS
        Produto::create($data);

        // 4. RESPOSTA AO CLIENTE (Redirecionamento)
        // Redirect to the existing admin listing page
        return redirect('/produtos-cadastrados')
            ->with('success', 'Produto cadastrado e imagens salvas com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produto $produto)
    {
        return view('produtos.show', compact('produto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produto $produto)
    {
        return view('produtos.edit', compact('produto'));
    }

    /**
     * Update the specified resource in storage.
     */
   /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produto $produto)
    {
        // 1. VALIDAÇÃO: Regras um pouco diferentes do 'store'
        // 'unique' agora precisa ignorar o ID do produto atual
        $validatedData = $request->validate([
            'nome' => 'required|max:255|unique:produtos,nome,' . $produto->id,
            'preco' => 'required|numeric|min:0',
            'estoque' => 'required|integer|min:0',
            'categoria' => 'required|string|max:100',

            // Fotos são 'nullable' (opcionais) na atualização
            'foto_1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'foto_2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'foto_3' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
        ]);

        // Começa com os dados validados
        $data = $validatedData;

        // 2. LÓGICA DE UPLOAD (Apenas se um novo arquivo foi enviado)
        
        // Foto 1
        if ($request->hasFile('foto_1')) {
            // Apaga a foto antiga
            Storage::delete($produto->foto_1); 
            // Salva a nova
            $data['foto_1'] = $request->file('foto_1')->store('public/produtos');
        }

        // Foto 2
        if ($request->hasFile('foto_2')) {
            if ($produto->foto_2) {
                Storage::delete($produto->foto_2); // Apaga a antiga (se existir)
            }
            $data['foto_2'] = $request->file('foto_2')->store('public/produtos');
        }

        // Foto 3
        if ($request->hasFile('foto_3')) {
            if ($produto->foto_3) {
                Storage::delete($produto->foto_3); // Apaga a antiga (se existir)
            }
            $data['foto_3'] = $request->file('foto_3')->store('public/produtos');
        }

        // 3. ATUALIZA NO BANCO
        $produto->update($data);

        // 4. REDIRECIONA DE VOLTA
        return redirect('/produtos-cadastrados')
            ->with('success', 'Produto atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    /**
     * Remove the specified resource from storage.
     */
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produto $produto)
    {
        // 1. Apaga as imagens do armazenamento (storage)
        
        // foto_1 é obrigatória, então podemos deletar com segurança.
        Storage::delete($produto->foto_1);

        // !! A CORREÇÃO ESTÁ AQUI !!
        // Só deleta foto_2 e foto_3 SE elas existirem (não forem nulas)
        if ($produto->foto_2) {
            Storage::delete($produto->foto_2);
        }
        if ($produto->foto_3) {
            Storage::delete($produto->foto_3);
        }

        // 2. Apaga o produto do banco de dados
        $produto->delete();

        // 3. Redireciona de volta com uma mensagem de sucesso
        return redirect('/produtos-cadastrados')
            ->with('success', 'Produto excluído com sucesso!');
    }

}
