<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage as StorageFacade;

class ProdutoController extends Controller
{
       public function index()
    {
        $produtos = Produto::latest()->paginate(12);
        return view('produtos.index', compact('produtos'));
    }

    public function create()
    {
        // The project stores the create form at resources/views/cadastra-produto.blade.php
        // Return that view so the admin "Adicionar produto" link opens the existing form.
        return view('cadastra-produto');
    }

        public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nome' => 'required|unique:produtos|max:255',
            'preco' => 'required|numeric|min:0',
            'estoque' => 'required|integer|min:0',
            'categoria' => 'required|string|max:100',
            'descricao' => 'nullable|string|max:2000',

            // allow svg and webp; avoid 'image' rule which rejects svg
            'foto_1' => 'required|mimes:jpeg,png,jpg,gif,webp,svg|max:10240', 
            'foto_2' => 'nullable|mimes:jpeg,png,jpg,gif,webp,svg|max:10240', 
            'foto_3' => 'nullable|mimes:jpeg,png,jpg,gif,webp,svg|max:10240', 


        ]);

        $data = $validatedData;

        // sanitize description to prevent malicious HTML/script tags, allow a small whitelist of tags
        $descricaoRaw = $request->input('descricao');
        $allowed = '<b><i><strong><em><p><br><ul><ol><li>';

        // Only include descricao if the produtos table actually has the column
        if (Schema::hasColumn('produtos', 'descricao')) {
            $data['descricao'] = $descricaoRaw ? strip_tags($descricaoRaw, $allowed) : null;
        } else {
            // ensure we don't try to insert an attribute the DB doesn't have
            unset($data['descricao']);
        }

        // foto_1 is required
        if ($request->hasFile('foto_1')) {
            $data['foto_1'] = $this->storeFileWithUniqueName($request->file('foto_1'));
        }

        if ($request->hasFile('foto_2')) {
            $data['foto_2'] = $this->storeFileWithUniqueName($request->file('foto_2'));
        }

        if ($request->hasFile('foto_3')) {
            $data['foto_3'] = $this->storeFileWithUniqueName($request->file('foto_3'));
        }

        // Create the produto record
        Produto::create($data);

        return redirect('/produtos-cadastrados')
            ->with('success', 'Produto cadastrado e imagens salvas com sucesso!');
    }

    
    public function show(Produto $produto)
    {
        return view('produtos.show', compact('produto'));
    }

    /**
     * Public product detail page (used by the storefront)
     */
    public function publicShow(Produto $produto)
    {
        // Recommended products: same category, exclude current product
        $recommended = Produto::where('categoria', $produto->categoria)
            ->where('id', '!=', $produto->id)
            ->latest()
            ->take(8)
            ->get();

        return view('exibir-produto', compact('produto', 'recommended'));
    }

    /**
     * Public search endpoint used by the site header.
     * Searches by product name and description (case-insensitive, partial match)
     */
    public function publicSearch(Request $request)
    {
        $q = trim($request->get('q', ''));
        $categoria = $request->get('categoria');
        $sort = $request->get('sort');

        // If no filters provided, for normal requests redirect to home.
        // For AJAX requests (filters triggered via JS) return the default latest products partial.
        if (empty($q) && empty($categoria) && empty($sort)) {
            if ($request->ajax()) {
                $produtos = Produto::latest()->get();
                return view('listagem.produtos', compact('produtos'));
            }
            return redirect('/');
        }

        $query = Produto::query();

        if (!empty($q)) {
            $query->where(function($sub) use ($q) {
                $sub->where('nome', 'LIKE', "%{$q}%")
                    ->orWhere('descricao', 'LIKE', "%{$q}%");
            });
        }

        if (!empty($categoria)) {
            $query->where('categoria', $categoria);
        }

        // Sorting
        if ($sort === 'price_asc') {
            $query->orderBy('preco', 'asc');
        } elseif ($sort === 'price_desc') {
            $query->orderBy('preco', 'desc');
        } else {
            $query->latest();
        }

        $produtos = $query->get();

        // If this is an AJAX request (filter via fetch), return only the products partial
        if ($request->ajax()) {
            return view('listagem.produtos', compact('produtos'));
        }

        return view('home', compact('produtos'));
    }

    /**
     * AJAX suggestions for autocomplete
     * Returns a small JSON array of matching products (id, nome, preco, imagem_url)
     */
    public function suggest(Request $request)
    {
        $q = trim($request->get('q', ''));

        if ($q === '') {
            return response()->json(['items' => []]);
        }

        $produtos = Produto::where('nome', 'LIKE', "%{$q}%")
            ->orWhere('descricao', 'LIKE', "%{$q}%")
            ->orderBy('nome')
            ->take(8)
            ->get();

        $items = $produtos->map(function($p){
            $image = null;
            if (!empty($p->foto_1)) {
                // Ensure full URL
                $image = StorageFacade::url($p->foto_1);
            } else {
                $image = asset('images/controle.svg');
            }

            return [
                'id' => $p->id,
                'nome' => $p->nome,
                'preco' => $p->preco,
                'imagem' => $image,
                'url' => route('produto.show', ['produto' => $p->id]),
            ];
        });

        return response()->json(['items' => $items]);
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
            'descricao' => 'nullable|string|max:2000',

            'foto_1' => 'nullable|mimes:jpeg,png,jpg,gif,webp,svg|max:10240',
            'foto_2' => 'nullable|mimes:jpeg,png,jpg,gif,webp,svg|max:10240',
            'foto_3' => 'nullable|mimes:jpeg,png,jpg,gif,webp,svg|max:10240',
        ]);

       
    $data = $validatedData;

    // sanitize descricao only if the column exists
    $descricaoRaw = $request->input('descricao');
    $allowed = '<b><i><strong><em><p><br><ul><ol><li>';
    if (Schema::hasColumn('produtos', 'descricao')) {
        $data['descricao'] = $descricaoRaw ? strip_tags($descricaoRaw, $allowed) : null;
    } else {
        unset($data['descricao']);
    }

        
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
        // If AJAX request, return updated admin grid HTML
        if ($request->ajax()) {
            $produtos = Produto::latest()->get();
            return view('admin.produtos-grid', compact('produtos'));
        }

        return redirect('/produtos-cadastrados')
            ->with('success', 'Produto atualizado com sucesso!');
    }

    
    public function destroy(Request $request, Produto $produto)
    {
        
        Storage::delete($produto->foto_1);

       
        if ($produto->foto_2) {
            Storage::delete($produto->foto_2);
        }
        if ($produto->foto_3) {
            Storage::delete($produto->foto_3);
        }

        $produto->delete();
        if ($request->ajax()) {
            $produtos = Produto::latest()->get();
            return view('admin.produtos-grid', compact('produtos'));
        }

        return redirect('/produtos-cadastrados')
            ->with('success', 'Produto excluído com sucesso!');
    }

    /**
     * Store uploaded file using its original name, appending a counter when duplicates exist.
     * Returns storage path like 'public/produtos/filename.jpg'
     */
    private function storeFileWithUniqueName($file)
    {
        $originalName = $file->getClientOriginalName();
        $name = pathinfo($originalName, PATHINFO_FILENAME);
        $ext = $file->getClientOriginalExtension();

        // sanitize name
        $base = Str::slug($name);
        if (empty($base)) {
            $base = uniqid('img_');
        }

        $filename = $base . '.' . $ext;
        $storagePath = 'public/produtos/' . $filename;
        $i = 1;
        // If file exists, append a counter
        while (Storage::exists($storagePath)) {
            $filename = $base . '-' . $i . '.' . $ext;
            $storagePath = 'public/produtos/' . $filename;
            $i++;
        }

        // Store the file and return the storage path
        Storage::putFileAs('public/produtos', $file, $filename);
        return $storagePath;
    }

}
