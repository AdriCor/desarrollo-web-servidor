<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo tren</title>
</head>
<body>
    <form method="post" action="{{route('Train.store')}}">
        @csrf 
        <label> Nombre:</label>
        <input type="text" name="name"> <br><br>
        <label> Pasajeros:</label>
        <input type="number" name="passengers"> <br><br>
        <label> Año:</label>
        <input type="number" name="year"> <br><br>
        <label> id del tren:</label>
        <select name="tipo">
            <option value="Cercanias">1</option>
            <option value="Media distancia">2</option>
            <option value="alta velocidad">3</option>
        </select>
    <input type="submit" value="crear">
    </form>
</body>
</html>