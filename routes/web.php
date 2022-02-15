<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DisciplinaController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\ClasseController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',[LoginController::class, 'index']);

//Rota para as disicplinas
Route::get('/disciplinas',[DisciplinaController::class, 'index']);
Route::get('/disciplinas/nova',[DisciplinaController::class, 'create'])->name('disciplina.nova');
Route::post('/disciplinas/nova',[DisciplinaController::class,'store'])->name('disciplina.salvar');

//Rota para alunos
Route::get('/alunos',[AlunoController::class, 'index']);
Route::get('/alunos/novo',[AlunoController::class, 'create'])->name('aluno.novo');
Route::post('/aluno/novo',[AlunoController::class,'store'])->name('aluno.salvar');

