<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function create()
    {
        return view('produtos.create');
    }

    public function store(Request $request)
    { //usamos esse nome para boas práticas mas não é obrigatório
        $data = $request->validate([
            'nome' => 'required',
            'custo' => 'required|decimal:0,2',
            'preco' => 'required|decimal:0,2',
            'quantidade' => 'required|int'
        ]);
        $newProduct = Produto::create($data);
        // return redirect(route('product.index'));
        // Produto::create([
        //     'nome' => $newProduct->nome,
        //     'custo' => $newProduct->custo,
        //     'preco' => $newProduct->preco,
        //     'quantidade' => $newProduct->quantidade,
        // ]);
    }
}
