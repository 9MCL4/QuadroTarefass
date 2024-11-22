@extends('layouts.app')

@section('title', 'Lista de Tarefas')

@section('content')
    <h1>Posições das Tarefas</h1>
    <a href="{{ route('tarefas.create') }}" class="btn btn-primary mb-3">Gerar Tarefas</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Informações</th>
                <th>Execução</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($tarefas as $tarefa)
                <tr>
                    <td>{{ $tarefa->titulo }}</td>
                    <td>{{ $tarefa->descricao }}</td>
                    <td>
                        <a href="{{ route('tarefas.edit', $tarefa->id) }}" class="btn btn-warning">Reescrever</a>
                        <a href="{{ route('tarefas.show', $tarefa->id) }}" class="btn btn-warning">Visualização</a>
                        <form action="{{ route('tarefas.destroy', $tarefa->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Apagar</button>
                        </form>         
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">Tarefa Não encontrada</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection