<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
</head>
<body>
    <?php
    function sumaDosV1($num1,$num2){
        //Instrucciones
        return $num1+$num2;
    }
    $resultado=sumaDos(1,3);
    echo "<h3>$resultado</h3>";
    //a la hora de querer meter una funcion en un "echo" hayu que concantenarlo
    echo "<h3>" . sumaDos(3,5) . "</h3>"; 
    //se podria usar la funcion para esto, pero con resultado imprevisible (alome en javascript si va)
    // echo "<h3> Resultado 2: ". sumaDos("a","b")."</h3>";


    function sumaDosV2(int $num1,int $num2){
        //Instrucciones
        return $num1+$num2;
    }


    function sumaDosV3(int|float $num1, int|float $num2){
        //Instrucciones
        return $num1+$num2;
    }
    function sumaDosV3( 1.5, 3);
        echo "<h3> Resultado 1:  $resultado</h3>";
        echo "<h3> Resultado 2: ". sumaDosv1(1.5,3). "</h3>";
        return $num1+$num2;
    
        //Asi hacemos que siempre nos devuelva un float
        //Si marcamos un int en vez de float eliminará losd ecimales, como en java
        function sumaDosV4(int|float $num1, int|float $num2) : float{
            //Instrucciones
            return $num1+$num2;
        }


        foreach ($estudiantes as )
    ?>
    
</body>
</html>