<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de usuarios - Mike</title>
</head>
<body>
    <h1> {{$title}} </h1>

    <ul>
        @foreach ($users as $user)
            <li>{{ $users }}</li>
        @endforeach
    </ul>
</body>
</html>