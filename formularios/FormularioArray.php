<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> Crea un array bidimensional. luego un formulario con el que 
        incorporar productos y luego sacar una tabla.
    </h2>
    <?php
    $productos= [
       ["Pacman",40,8],
       ["Fortnite",10,1],
       ["Mario Kart", 60, 20],
       ["Street Fighter",4, 22],
       ["Legend of Zelda",60, 40],
       ["Castlevania",55, 5],
   ];
   ?>

<form action= "" method="post">
    <label for="product">Producto: </label>
        <br>
        <input type="text" name="producto_"> <!--Lo marcamos igual que las variables del foreach, 
            para que no nos volvamos locos-->
        <br><br>
        <label for="precio_">Precio: </label>
        <br>
        <input type= "number" step="0.1" name="precio_">
        <br><br>
        <label for="cantidad_">Cantidad: </label>
        <br>
        <input type= "number" step="1" name="cantidad_">
        <br><br>
        <input type="submit" value="Isertar datos en tabla">
</form>


<?php
    if($_SERVER["REQUEST_METHOD"=="POST"]){
        $producto_ =$_POST["nombre_producto"];
        $precio_= (float)$_POST["precio"];
        $cantidad_= (int)$_POST["cantidad"];
        /*tambien se podria hacer de esta forma*/

        $arrayProductos=[$producto_, $precio_,$cantidaD_];
        array_push($producto, $arrayProductos);
        
    }
?>

   <h2>PRODUCTOS</h2>

   <table>
        <thead>
        <tr>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Precio</th>
        </tr>
        </thead>
        <tbody>
        <?php
        /* esto lo usamos unicamente para organizar
        $producto_=array_column($productos,0);
        $precio_=array_column($productos,1);
        $cantidad_=array_column($productos,2); */

   foreach($productos as $producto){
    list($producto_, $precio_, $cantidad_)=$producto;//para descomponer el array en partes
    echo "<tr>";
    echo "<td>$producto_</td> <td>$precio_</td> <td>$cantidad_</td>";
    echo "</tr>";
}

        ?>
        </tbody>

    </table>
    
</body>
</html>