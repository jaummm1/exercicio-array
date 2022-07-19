<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nomes</title>
</head>
<body>
    <h1>Editar Nomes</h1>

    <form action="/names/update/{{ $name->id }}" method="post">
        @csrf
        <input name="name" value="{{ $name->name }}">
        <button type="submit">Enviar</button>
    </form>

    <form action="/nomes/delete/{{ $name->id }}" method="post">
        @csrf
        <button type="submit">Deletar</button>
    </form>
</body>
</html>
