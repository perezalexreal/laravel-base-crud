<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Fumetti Store </h1>
    <a class="nav-link {{ Request::route()->getName() === 'comics.index' ? 'active' : '' }}"
        href="{{ route('comics.index') }}">Vedi tutti i fumetti</a>
</body>
</html>