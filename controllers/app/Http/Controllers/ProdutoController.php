<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function create()
    {
        // View do formulário no fluxo GET -> POST.
        return view('produtos.create');
    }

    public function store(Request $request)
    {
        // Lê o campo nome enviado pelo formulário.
        $nome = $request->input('nome');

        return response('Produto enviado: ' . $nome);
    }
}
