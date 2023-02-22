<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Primi passi</title>
</head>
<body>
    <h1>Hello World from class {{ $class }}</h1>
    <h3>Setup pc desktop</h3>
    <ul>
        @foreach ($objects as $object)
            <li>{{ $object }}</li>
        @endforeach
    </ul>
</body>
</html>