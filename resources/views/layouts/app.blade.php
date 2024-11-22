<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Gerenciador de Tarefas')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>
    <nav>
        <a href="{{ route('tarefas.index') }}">Home</a>
        <a href="{{ route('tarefas.create') }}">Nova Tarefa</a>
    </nav>
    <main>
        @yield('content')
    </main>
</body>
</html>
