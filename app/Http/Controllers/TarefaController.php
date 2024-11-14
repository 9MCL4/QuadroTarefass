<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarefa;

class TarefaController extends Controller
{
    public function create(){
        return view('create');
    }

    public function index(){
        $tarefas = Tarefa::all();
        return view('tarefas',[
            'tarefas' => $tarefas
        ]);
    }

    public function edit(){
        
    }

    public function delete(){
        
    }

}
