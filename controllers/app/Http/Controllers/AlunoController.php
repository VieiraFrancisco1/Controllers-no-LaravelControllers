<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        // Lista simulada para demonstrar o método index de um resource controller.
        $alunos = [
            'Ana',
            'Bruno',
            'Carla',
        ];

        return view('alunos.index', compact('alunos'));
    }

    public function create()
    {
        // View com formulário de cadastro do aluno.
        return view('alunos.create');
    }

    public function store(Request $request)
    {
        // Simulação de persistência: apenas lê o nome enviado e devolve a resposta.
        $nome = $request->input('nome', 'Sem nome');

        return response('Aluno salvo: ' . $nome);
    }

    public function show($id)
    {
        // Demonstra a exibição de um registro individual por ID.
        return response('Aluno selecionado: ID ' . $id);
    }
}
