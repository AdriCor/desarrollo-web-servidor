<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo ticket</title>
</head>
<body>
    <form method="post" action="{{route('TrainType.store')}}">
        @csrf 
        <label> fecha:</label>
        <input type="text" name="name"> <br><br>
        <label> Precio:</label>
        <label> id del tren:</label>
        <select name="tipo">
            <option value="Cercanias">1</option>
            <option value="Media distancia">2</option>
            <option value="alta velocidad">3</option>
        </select>
        <label> id del ticket:</label>
        <select name="tipo">
            <option value="Billete sencillo">1</option>
            <option value="Abono mensual">2</option>
            <option value="Abono trimestral">3</option>
        </select>
    <input type="submit" value="crear">
    </form>
</body>
</html>