<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Cidade;


class AlunoController extends Controller
{
    public function index(){
        return view('aluno.show');
    }
    public function create(){
         $cidade= new Cidade;
        return view('aluno.create',['cidades'=>$cidade->cidades()]);
    }
}
