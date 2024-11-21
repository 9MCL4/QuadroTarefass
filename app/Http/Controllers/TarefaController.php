<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarefa;

class TarefaController extends Controller
{
    public function create(){
        return view('tarefas.create');
    }

    public function index(){
        $tarefas = Tarefa::all();
        return view('tarefas.index',[
            'tarefas' => $tarefas
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|max:100',
            'descricao' => 'nullable|string',
        ]);

        Tarefa::create($request->all());
        return redirect()->route('tarefas.index')->with('success', 'Tarefa criada com sucesso!');
    }

    public function edit($id){
        $tarefa = Tarefa::findOrFail($id);
        return view('tarefas.edit', compact('tarefa'));
    }

    public function show($id){
        $tarefa = Tarefa::findOrFail($id);
        return view('tarefas.show', compact('tarefa'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required|max:100',
            'descricao' => 'nullable|string',
        ]);

        $tarefa = Tarefa::findOrFail($id);
        $tarefa->update($request->all());
        return redirect()->route('tarefas.index')->with('success', 'Tarefa atualizada com sucesso!');
    }

    public function destroy($id) {
        Tarefa::destroy($id);
        return redirect()->route('tarefas.index')->with('success', 'Tarefa excluída com sucesso!');
    }

}
