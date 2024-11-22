@extends('layouts.app')

@section('title', 'Bem-vindo ao Gerenciador de Tarefas')

@section('content')
    <h1>Bem-vindo ao Gerenciador de Tarefas</h1>
    <p>Organize suas tarefas de maneira fácil e prática.</p>
    
    <div style="margin-top: 20px;">
        <a href="{{ route('tarefas.index') }}" class="btn">Acessar Tarefas</a>
        <a href="{{ route('tarefas.create') }}" class="btn">Criar Nova Tarefa</a>
    </div>
@endsection
