<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tipos de trenes</title>
</head>
<body>
    <h1>Tipos de trenes</h1>

    <ul>
        @foreach ($tipos_trenes as $tipo_tren)
            <li>{{$tipo_tren->tipos_trenes}}</li>
            <ul>
                @php
                    $platos=$tipo_plato->platos;
                @endphp
                @foreach ($platos as $plato)
                    <li>{{$plato->nombre}}</li>
                @endforeach
            </ul>
        @endforeach
    </ul>
</body>
</html>