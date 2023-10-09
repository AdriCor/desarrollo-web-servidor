<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>

<!--Los formularios siempre devuelven un String, por lo que si qyuieres un int o algo de eso
puedes castearlo haciendo $variable=(int) $_GET...-->
    <form action= "" method="post">
        <label>Nombre</label>
        <br>
        <input type="text" name="nombre">
        <br><br>
        <label>Apellidos</label>
        <br>
        <input type= "text" name="apellidos">
        <br><br>
        <input type="submit" value="Enviar">
</form>
<?php
if ($_SERVER ["REQUEST_METHOD"]== "POST"){
    echo "<h3> Formulario enviado!</h3>";
    $nombre= $_POST["nombre"]; //y se pone la misma etiqueta exactamente igual de la etiqueta nombre
    $apellidos=$_POST["apellidos"];
    echo "<h4>$nombre $apellidos</h4>";
}
?>
    
</body>
</html>