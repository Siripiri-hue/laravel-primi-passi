<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Steps with Laravel</title>
</head>
<body>
    <h1>Hello World!</h1>
    <h2>Benvenuta, {{ $name }}</h2>

    @php 
    $poems = ['L\'infinito', 'Spesso il male di vivere ho incontrato', 'La speranza']
    @endphp

    <h3>Letture</h3>
    <ul>
        @foreach ($poems as $poem)
        <li>{{ $poem }}</li>
        @endforeach
    </ul>
</body>
</html>