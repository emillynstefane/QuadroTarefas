@extends('layouts.app')

@section('title', 'Editar Tarefa')

@section('content')
    <h1>Editar Tarefa</h1>
    <form action="{{ route('tarefas.update', $tarefa->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" value="{{ $tarefa->titulo }}" required>
        
        <label for="descricao">Descrição:</label>
        <textarea id="descricao" name="descricao" required>{{ $tarefa->descricao }}</textarea>
        
        <button type="submit">Atualizar</button>
    </form>
@endsection
