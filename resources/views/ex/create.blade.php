<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="min-vh-100 d-flex justify-content-center align-items-center">
        <form action="/photo" method="post" class="mw-100" enctype="multipart/form-data">
            @csrf
            <input class="form-control" type="file" name="photo" accept="/image/*">
            <button type="submit" class="btn btn-primary w-100">Enviar</button>
        </form>
</body>
</html>

  

