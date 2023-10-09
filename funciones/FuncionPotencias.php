<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcion Potencias</title>
</head>
<body>
<?php
    //pasar de grados celsius a grados fahrenheit
    function Potencia(int|float $numero, int $elevado) : int|float{  //base y exponente
        $potencia=1;
        if($elevado <0){
            echo "No es posible elevar a un número negativo";
            return -1;
        }else{
        for($i=0;$i<$elevado;$i++){
            $potencia=$potencia*$numero;  //se puede poner *= y asi acorto un poquito codigo
        }
        return $potencia;
    };
        
    }
    $potencia_1=Potencia(2,-3);
    print_r($potencia_1);

    //la fomra correcta de ver esto seria echo "<h3>.potencia(2,3).</h3>";
    ?>
</body>
</html>