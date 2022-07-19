<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nomes</title>
</head>
<body>
    <h1>Detalhes do Nome</h1>

    <h3>{{ $name->name }}</h3>

    <a href="/names/edit/{{ $name->id }}">Editar</a>
</body>
</html>
