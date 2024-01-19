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
        @foreach ($train_types as $train_type)
            <li>{{$train_type->train_types}}</li>
            <ul>
                @php
                    $trains=$train_type->trains;
                @endphp
                @foreach ($trains as $train)
                    <li>{{$train->name}}</li>
                @endforeach
            </ul>
        @endforeach
    </ul>
</body>
</html>