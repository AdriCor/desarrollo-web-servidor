<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Platos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Este es el index de las bebidas</h1>
    <h2>{{$mensaje}}</h2>
    
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Bebida</th>
      <th scope="col">Precio</th>
      <th scope="col">Tipo</th>
    </tr>
  </thead>
  <tbody>
     @foreach($bebidas as $bebida)
     <tr>
        <td>{{$bebida->nombre}}</td>
        <td>{{$bebida->precio}}</td>
        <td>{{$bebida->tipo}}</td>
     </tr>
     @endforeach
  </tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>