<?php

namespace App\Http\Controllers;

use App\Models\Disciplina;
use Illuminate\Http\Request;

class DisciplinaController extends Controller
{
    
    public function index(){
        $disiciplinas=Disciplina::latest()->paginate(6);

        return view('disciplina.show',['disciplinas'=>$disiciplinas]);
    }
    public function create(){
        return view('disciplina.create');
    }

    public function store(Request $request){

        $request->validate([
            'nome'=>'required|min:5|max:100',
            'sigla'=>'required|min:1|max:5' ]);

            $disciplina=new Disciplina([
                'nome'=>$request->post('nome'),
                'sigla'=>$request->post('sigla')
            ]);

            $disciplina->save();
            return redirect(route('disciplina.nova'))->with('sucesso','Disiciplina salva com sucesso');

            

    }
}
