<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisciplinaController extends Controller
{
    public function index()
    {
        // Dados enviados para a view usando compact().
        $disciplinas = [
            'Matemática',
            'Português',
            'Programação',
        ];

        return view('disciplinas.index', compact('disciplinas'));
    }

    public function create()
    {
        // Formulário de cadastro da disciplina.
        return view('disciplinas.create');
    }

    public function store(Request $request)
    {
        // Captura o nome informado pelo usuário no formulário.
        $nome = $request->input('nome');

        return response('Disciplina cadastrada: ' . $nome);
    }

    public function show($id)
    {
        // Monta um array simples para demonstrar passagem de dados à view.
        $disciplina = [
            'id' => $id,
            'nome' => 'Disciplina ' . $id,
        ];

        return view('disciplinas.show', compact('disciplina'));
    }
}
