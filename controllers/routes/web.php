<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\DisciplinaController;
use App\Http\Controllers\ProdutoController;

// Exercícios de controller básico e passagem de dados.
Route::get('/cursos', [CursoController::class, 'index']);
Route::get('/cursos/novo', [CursoController::class, 'create']);
Route::get('/cursos/listagem', [CursoController::class, 'listagem']);
Route::get('/cursos/{id}', [CursoController::class, 'show']);
Route::post('/cursos', [CursoController::class, 'store'])->name('cursos.store');

// Resource controller para CRUD de alunos.
Route::resource('alunos', AlunoController::class);

// Exercício de controller com view, parâmetros e envio de dados.
Route::get('/disciplinas', [DisciplinaController::class, 'index']);
Route::get('/disciplinas/novo', [DisciplinaController::class, 'create']);
Route::post('/disciplinas', [DisciplinaController::class, 'store'])->name('disciplinas.store');
Route::get('/disciplinas/{id}', [DisciplinaController::class, 'show']);

// Fluxo create -> store para formulário simples.
Route::get('/produtos/create', [ProdutoController::class, 'create'])->name('produtos.create');
Route::post('/produtos', [ProdutoController::class, 'store'])->name('produtos.store');
