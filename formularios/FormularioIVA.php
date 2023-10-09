<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario averiguar IVA</title>
    <?php require '..\Funciones\funcionesIva.php'; ?> 
    <?php require '..\Funciones\funcionesIRPF.php'; ?>
</head>
<body>
<h2>Formulario IVA</h2>
<form action= "" method="post">
        <label for="precio">Precio del producto</label>
        <br>
        <input type="text" name="precio" step="0.1">
        <br><br>
        <select name="tipoIVA">
            <option value="General">General</option>
            <option value="Reducido">Reducido</option>
            <option value="Superreducido">Superreducido</option>
        </select>
        <!--meter aquí un desplegable y asi eliminamos la opocion de que 
        un usuario pueda meter lo que le de la gana-->
        <br><br>
        <input type="hidden" name="action" value="tipoIVA">
        <input type="submit" value="Añadir IVA"><br>
</form>
<h2>Formulario IRPF</h2>
<form action= "" method="post">
    <label>Salario: </label>
    <input type="number" step="100" name= "salario"> <br> <br>
    <input type="hidden" name="action" value="irpf">
    <input type="submit" value="calcular salario">

</form>
<?php
if ($_SERVER ["REQUEST_METHOD"]== "POST"){
    /*echo " IVA añadido, el precio sería: ";
    $precioProducto= (int)$_POST["precio"]; /*y se pone la misma etiqueta 
    exactamente igual de la etiqueta nombre 
    $tipoIVA= $_POST["tipoIVA"];
    echo PrecioConIVA($precioProducto, $tipoIVA); */
    if($_POST["action"]=="tipoIVA"){
        $precioProducto=(float) $_POST["precio"];
        $tipoIVA=$_POST["tipoIVA"];
        echo PrecioConIVA($precioProducto, $tipoIVA); 
    }
    if($_POST["action"]=="irpf"){
        $salario=(float) $_POST["salario"];
        echo SalarioIRPF($salario); 
    }
}
?>
    
</body>
</html>