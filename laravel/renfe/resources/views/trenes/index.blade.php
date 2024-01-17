<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trenes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Este es el index de los trenes</h1>
    <h2>{{$mensaje}}</h2>
    
    <p>
      <a href="{{route('platos.create')}}">Crear Tren</a>
    </p>
    <table class="table">
  <thead>
    <tr>
      <th >nombre</th>
      <th >Pasajeros</th>
      <th >año</th>
      <th>tipo de tren</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
     @foreach($trenes as $tren)
     <tr>
        <td>{{$trenes->name}}</td>
        <td>{{$trenes->passengers}}</td>
        <td>{{$trenes->year}}</td>
        <td>{{$trenes->tipo_trenes['train_type_id']}}</td>
        <td>
          <form method="get" 
            action="{{route('trenes.show',['train'=>$tren->id])}}"> {{-- falta el show --}}
            <input type="submit" value="ver">
          </form>
        </td>
        <td>
          <form method="get"
            action="{{route('platos.edit',['plato'=>$plato->id])}}"> {{-- falta el edit --}}
            <input type="submit" value="editar">
            </form>
        </td>
        <td>
          <form method="post"
            action="{{route('platos.destroy',['plato'=>$plato->id])}}"> {{-- falta el destroy --}}
            @csrf
            {{method_field('DELETE')}}
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