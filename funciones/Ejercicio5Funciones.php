<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <h2>Crear un array de estudiantes y, aleatoriamente, asignarles
una nota del 0 al 10.
Mostrar los estudiantes en una tabla que contenga sus
nombres, la nota que han sacado y la calificación final
(suspenso, aprobado, notable o sobresaliente).
Ordenar los estudiantes por orden alfabético.</h2>

<?php

function obteenerCalificacion(int|float $p_nota) : string{
    //ponerun p_ para marcar como variable de parametro de entrada
$calificacion= match(true){
    $p_nota>= 0&& $p_nota< 5 => "Suspenso",
    $p_nota>= 5&& $p_nota< 7 => "Aprobado",
    $p_nota>= 7&& $p_nota< 9 => "Notable",
    $p_nota>= 0&& $p_nota< 10 => "Sobresaliente",
    default =>"Error"
};
return $calificacion;
}
$estudiantes=[
    ["Alberto", rand(0,10)],
    ["Nacho", rand(0,10)],
    ["Adrian", rand(0,10)],
    ["Rulas", rand(0,10)]
];
print_r($estudiantes); //siempre hacer un print para comprobar que todo este correcto.
?>
<table>
        <thead>
        <tr>
            <th>nombre estudiante</th>
            <th>nota</th>
            <th>calificación</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $nombre=array_column($series,0);
        $nota=array_column($series,1);
        $calificacion=array_column($series,2);

   foreach($estudiantes as $estudiante){
    list($estudiante)=$estudiante;//para descomponer el array en partes
    echo "<tr>";
    echo "<td><center>$nombre</center></td> <td><center>$nota</center></td> <td><center>$calificacion</center></td>";
    echo "</tr>";


    echo "<td>". obtenerCalificacion($l_nota). "</td>";
    }
        ?>
        </tbody>

    </table>


    
</body>
</html>