<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        // Retorno textual simples para fixar a primeira rota de controller.
        return response('Lista de cursos');
    }

    public function create()
    {
        // Abre a view Blade responsável pelo formulário de cadastro.
        return view('cursos.create');
    }

    public function listagem()
    {
        // Lista estática usada para demonstrar passagem de dados para a view.
        $cursos = [
            'Laravel',
            'PHP',
            'Banco de Dados',
        ];

        return view('cursos.listagem', compact('cursos'));
    }

    public function show($id)
    {
        // Exibe o ID recebido pela rota para demonstrar parâmetro dinâmico.
        return response('Curso selecionado: ID ' . $id);
    }

    public function store(Request $request)
    {
        // Recebe o valor enviado pelo formulário HTML.
        $nome = $request->input('nome');

        return response('Curso cadastrado: ' . $nome);
    }
}
