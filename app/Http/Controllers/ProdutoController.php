<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdutoController extends Controller
{
       public function index()
    {
        $produtos = Produto::latest()->paginate(12);
        return view('produtos.index', compact('produtos'));
    }

    public function create()
    {
        return view('produtos.create');
    }

        public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nome' => 'required|unique:produtos|max:255',
            'preco' => 'required|numeric|min:0',
            'estoque' => 'required|integer|min:0',
            'categoria' => 'required|string|max:100',

            'foto_1' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240', 
            'foto_2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10240', 
            'foto_3' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10240', 
        ]);

        $data = $validatedData;

        $data['foto_1'] = $request->file('foto_1')->store('public/produtos');

        if ($request->hasFile('foto_2')) {
            $data['foto_2'] = $request->file('foto_2')->store('public/produtos');
        }

        if ($request->hasFile('foto_3')) {
            $data['foto_3'] = $request->file('foto_3')->store('public/produtos');
        }

        Produto::create($data);

        return redirect('/produtos-cadastrados')
            ->with('success', 'Produto cadastrado e imagens salvas com sucesso!');
    }

    
    public function show(Produto $produto)
    {
        return view('produtos.show', compact('produto'));
    }

  
    public function edit(Produto $produto)
    {
        return view('produtos.edit', compact('produto'));
    }

   
    public function update(Request $request, Produto $produto)
    {
        
        $validatedData = $request->validate([
            'nome' => 'required|max:255|unique:produtos,nome,' . $produto->id,
            'preco' => 'required|numeric|min:0',
            'estoque' => 'required|integer|min:0',
            'categoria' => 'required|string|max:100',

           
            'foto_1' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp,svg|max:10240',
            'foto_2' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp,svg|max:10240',
            'foto_3' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp,svg|max:10240',
        ]);

       
        $data = $validatedData;

        
        if ($request->hasFile('foto_1')) {
            Storage::delete($produto->foto_1); 
            $data['foto_1'] = $request->file('foto_1')->store('public/produtos');
        }

        if ($request->hasFile('foto_2')) {
            if ($produto->foto_2) {
                Storage::delete($produto->foto_2); 
            }
            $data['foto_2'] = $request->file('foto_2')->store('public/produtos');
        }

        if ($request->hasFile('foto_3')) {
            if ($produto->foto_3) {
                Storage::delete($produto->foto_3); 
            }
            $data['foto_3'] = $request->file('foto_3')->store('public/produtos');
        }

        $produto->update($data);

        return redirect('/produtos-cadastrados')
            ->with('success', 'Produto atualizado com sucesso!');
    }

    
    public function destroy(Produto $produto)
    {
        
        Storage::delete($produto->foto_1);

       
        if ($produto->foto_2) {
            Storage::delete($produto->foto_2);
        }
        if ($produto->foto_3) {
            Storage::delete($produto->foto_3);
        }

        $produto->delete();

        return redirect('/produtos-cadastrados')
            ->with('success', 'Produto excluído com sucesso!');
    }

}
