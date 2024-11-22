@extends('layouts.app')

@section('title', 'Editar Tarefa')

@section('content')
    <h1>Reescrever Tarefa</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('tarefas.update', $tarefa->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="titulo" class="form-label">Nome</label>
            <input type="text" name="titulo" id="titulo" class="form-control" value="{{ $tarefa->titulo }}" required>
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label">Informação</label>
            <textarea name="descricao" id="descricao" class="form-control">{{ $tarefa->descricao }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Renovar</button>
        <a href="{{ route('tarefas.index') }}" class="btn btn-secondary">Anterior</a>
    </form>
@endsection