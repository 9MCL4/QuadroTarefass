@extends('layouts.app')

@section('title', 'Adicionar Tarefa')

@section('content')
    <h1>Criar Nova Tarefa</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('tarefas.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="titulo" class="form-label">Nome</label>
            <input type="text" name="titulo" id="titulo" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label">Informações</label>
            <textarea name="descricao" id="descricao" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Adicionar</button>
        <a href="{{ route('tarefas.index') }}" class="btn btn-secondary">Anterior</a>
    </form>
@endsection