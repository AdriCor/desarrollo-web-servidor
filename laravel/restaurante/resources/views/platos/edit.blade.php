<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>editar Plato</title>
</head>
<body>
    <form method="post" action="{{route('platos.update', ['plato'=>$plato->id])}}">
        @csrf 
        {{method_field('PUT')}}
        <label> Nombre:</label>
        <input type="text" name="nombre" value="{{ $plato->nombre }}"> <br><br>
        <label> Precio:</label>
        <input type="text" name="precio" value="{{ $plato->precio }}"> <br><br>
        <label> Tipo:</label>
        <select name="tipo">
            <option selected hidden value="{{ $plato->tipo }}"></option>
            <option value="Racion">Ración</option>
            <option value="Media Racion">Media Ración</option>
            <option value="Tapa">Tapa</option>
        </select>
        <br><br>
    <input type="submit" value="crear">
    </form>
</body>
</html>