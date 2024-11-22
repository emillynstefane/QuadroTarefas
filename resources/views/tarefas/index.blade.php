@extends('layouts.app')

@section('title', 'Lista de Tarefas')

@section('content')
    <h1>Lista de Tarefas</h1>
    <ul>
        @foreach($tarefas as $tarefa)
            <li>
                {{ $tarefa->titulo }}
                <a href="{{ route('tarefas.show', $tarefa->id) }}">Detalhes</a>
                <a href="{{ route('tarefas.edit', $tarefa->id) }}">Editar</a>
                <form action="{{ route('tarefas.destroy', $tarefa->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Excluir</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
