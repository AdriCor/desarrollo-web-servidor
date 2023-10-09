<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones IVA</title>
</head>
<body>
<?php
//Añadirle el IVA
function PrecioConIVA(int|float $precioProducto, string $tipoIVA) : float{
        if($tipoIVA=="General"){
            return ($precioProducto*1.21);
        }else if($tipoIVA=="Reducido"){
            return ($precioProducto*1.10);
        }else if($tipoIVA=="Superreducido"){
            return($precioProducto*1.04);
        }else{
            return $precioProducto;
        }

    
    }
    //echo "<h3>". PrecioConIVA(12, "superreducido") ."</h3>";


    /*
    podria definir como constantes los valroes de general, reducido.... para a la 
    hora de tener que cambiar algo si cambia el iva solo tener que tocar una cosas del 
    codigo en vez de tenerlo que buscar y toda la vaina para modificarlo ya que lo tendriamos justo arriba.

    "DEFINE("superreducido",4); <----- ejemplo de definicion de constante 

    hacerlo con match seria:
    $precioConIVA=match ($tipoIVA){
        "general=> $precio*1.21,
        "reducido" => $precioProducto*1,1...
    };
    return $precioConIVA
    */



    function PrecioSinIVA(int|float $precioProducto, string $tipoIVA) : float{
        if($tipoIVA=="general"){
            return ($precioProducto*0.21);
        }else if($tipoIVA=="reducido"){
            return ($precioProducto*0.10);
        }else if($tipoIVA=="superreducido"){
            return($precioProducto*0.04);
        }else{
            return $precioProdcuto;
        }

    
    }
   // echo "<h3>". PrecioSinIVA(12, "superreducido") ."</h3>";


















    ?>
    
</body>
</html>