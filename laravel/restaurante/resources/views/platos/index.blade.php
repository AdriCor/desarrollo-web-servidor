<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Platos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Este es el index de los platos</h1>
    <h2>{{$mensaje}}</h2>
    
    <p>
      <a href="{{route('platos.create')}}">Crear Plato</a>
    </p>
    <table class="table">
  <thead>
    <tr>
      <th >Plato</th>
      <th >Precio</th>
      <th >tipo</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
     @foreach($platos as $plato)
     <tr>
        <td>{{$plato->nombre}}</td>
        <td>{{$plato->precio}}</td>
        <td>{{$plato->tipo_plato['tipo_platos']}}</td>
        <td>
          <form method="get"
            action="{{route('platos.show',['plato'=>$plato->id])}}">
            <input type="submit" value="ver">
          </form>
        </td>
        <td>
          <form method="get"
            action="{{route('Train.edit',['plato'=>$plato->id])}}">
            <input type="submit" value="editar">
            </form>
        </td>
        <td>
          <form method="post"
            action="{{route('platos.destroy',['plato'=>$plato->id])}}">
            @csrf
            {{method_field('DELETE')}}
            {{-- Plato::find($id)->delete(); --}}
            <input type="submit" value="borrar">
            </form>
        </td>
     </tr>
     @endforeach
  </tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>