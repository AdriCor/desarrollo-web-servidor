<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Bebida</title>
</head>
<body>
    <form method="post" action="{{route('platos.update', ['bebida'=>$bebida->id])}}">
        @csrf 
        {{method_field('PUT')}}
        <label> Nombre:</label>
        <input type="text" name="nombre"> <br><br>
        <label> Precio:</label>
        <input type="text" name="precio"> <br><br>
        <label> Tipo:</label>
        <select name="tipo">
            <option value="Con gas">Con gas</option>
            <option value="Sin gas">Sin gas</option>
        </select>
        <br><br>
    <input type="submit" value="crear">
    </form>
</body>
</html>