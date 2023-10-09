<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Potencias</title>
    <?php// require '../funciones/FormularioPotencias.php'; ?> <!--asi linqueamos la fyuncion hecha en otra pagina yu demas
a este codigo, seria como un import-->
</head>
<body>
<?php
function Potencia(int|float $base, int $exponente) : int|float{  //base y exponente
    if($exponente>0){
    for($i=0;$i<$exponente;$i++){
        $potencia *= $base;  
    }
    return $potencia;
};
    
}
?>

<form action= "" method="post">
        <label for="base">Base</label>
        <br>
        <input type="text" id="base" name="base">
        <br><br>
        <label>Exponente</label>
        <br>
        <input type= "text" name="exponente">
        <br><br>
        <input type="submit" value="Calcular">
</form>
<?php
if ($_SERVER ["REQUEST_METHOD"]== "POST"){
    echo "<h3> Formulario enviado!</h3>";
    $base= (int)$_POST["base"]; //y se pone la misma etiqueta exactamente igual de la etiqueta nombre
    $exponente= (int)$_POST["exponente"];
    echo Potencia($base, $exponente);
}
?>
    
</body>
</html>