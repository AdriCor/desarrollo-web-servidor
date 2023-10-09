<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio números oprimos</title>
</head>
<body>
<?php

//numeros primos
/*
function PrimosV1(int $p_limite) : array{
    for($i=2; $i<=$p_limite; $i++){
        $primo=true;
        for($j=2;$j<=$i-1 && $primo;$j++){
        if($i % $j==0){
                $primo=false;
        }
    }
    if($primo) 
        echo "$i ";
    
}
}



function PrimosV2(int $p_limite) : array{
    $primos=[];
    for($i=2; $i<=$p_limite; $i++){
        $primo=true;
        for($j=2;$j<=$i-1 && $primo;$j++){
        if($i % $j==0){
                $primo=false;
        }
    }
    if($primo) 
        array_push($primos,$i); 
}
return $primos;
}
$primos=primosV2(75);
foreach ($primos as $primo){
    echo "$primo";

}
*/
function PrimosV3(int $p_limite) : array {
    $primos=[];
    for($i=2; $i<=$p_limite; $i++){
        /*
        $primo=true;
        for($j=2;$j<=$i-1 && $primo;$j++){
            if($i % $j==0){
                $primo=false;
            }
        } Con esto comprobamos que el numero es primo o no */
        if(esPrimo($i)) array_push($primos,$i);
    }
    return $primos;
} 

function esPrimo(int $numero): bool{
    $primo=true;
    for($j=2;$j<=$numero-1 && $primo;$j++){
        if($numero % $j==0){
            $primo=false;
        }
    }
    return $primo;
    //esto es lo mismo que el comentario anterior 
}
$primo = esPrimo(7);
if($primo) echo "<h3>7 es primo</h3>";
else echo "<h3> No es primo</h3>";



?> 
    
</body>
</html>