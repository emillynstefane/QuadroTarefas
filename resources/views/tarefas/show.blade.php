@extends('layouts.app')

@section('title', 'Detalhes da Tarefa')

@section('content')
    <h1>{{ $tarefa->titulo }}</h1>
    <p>{{ $tarefa->descricao }}</p>
    <a href="{{ route('tarefas.index') }}">Voltar</a>
@endsection
