@extends('layouts.app')

@section('title', 'Nova Tarefa')

@section('content')
    <h1>Nova Tarefa</h1>
    <form action="{{ route('tarefas.store') }}" method="POST">
        @csrf
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required>
        
        <label for="descricao">Descrição:</label>
        <textarea id="descricao" name="descricao" required></textarea>
        
        <button type="submit">Salvar</button>
    </form>
@endsection
