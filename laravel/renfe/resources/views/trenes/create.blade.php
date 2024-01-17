<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo Plato</title>
</head>
<body>
    <form method="post" action="{{route('platos.store')}}">
        @csrf 
        <label> Nombre:</label>
        <input type="text" name="name"> <br><br>
        <label> Pasajeros:</label>
        <input type="text" name="passengers"> <br><br>
        <label> Año:</label>
        <input type="text" name="year"> <br><br>
        <label> Año:</label>
        <input type="text" name="year"> <br><br>
        <label> id del tren:</label>
        <input type="text" name="train_type_id"> <br><br>
    <input type="submit" value="crear">
    </form>
</body>
</html>