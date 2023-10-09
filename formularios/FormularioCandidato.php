<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio funcion de candidato</title>
</head>
<body>
    <h2> Genera un formulario que al introducir los 3 numeros y darle a submit te diga cual es el mayor o
        qué numero es amyor o si todos son iguales.</h2> 
<?php
function Candidato(int $num1, int $num2, int $num3) : string{  //numeros que va a comparar
   if($num1==$num2 && $num2==$num3){
    return "los tres numeros son identicos."
   }else{
    $mayor=$num1;
    if($num2>$mayor){
        $mayor=$num2
    }else if($num3>$mayor){
        $mayor=$num3
    }
    return 
   }
   
   
   /* if($valor_1>$mayor){
        $mayor=$valor_1;
        }else if($valor_2>$mayor){
            $mayor=$valor_2;
        }else if ($valor_3>$mayor){
            $mayor=$valor_3;
        } else 
return $pmayor;*/
} 
?>
<form action= "" method="post">
        <label for="num1">Valor1</label>
        <br>
        <input type="text" name="valor1">
        <br><br>
        <label for="num2">Valor2</label>
        <br>
        <input type= "text" name="valor2">
        <br><br>
        <label for="num3">Valor3</label>
        <br>
        <input type= "text" name="valor3">
        <br><br>
        <input type="submit" value="Enviar">
</form>
    
</body>
</html>