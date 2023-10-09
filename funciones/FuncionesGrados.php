<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio conversión de grados</title>
</head>
<body>
    <?php
    //pasar de grados celsius a grados fahrenheit
    function celsiusFahrenheit(int|float $temperatura) : int|float{
        return (($temperatura*9)/5)+32;  
    }
    $gradosCF= celsiusFahrenheit(0);
    print_r($gradosCF);
    echo "<br>";
    //pasar de grados fahrenheit a grados celsius
    function fahrenheitCelsius(int|float $temperatura) : int|float{
        return (($temperatura-32)*5)/9;  
    }
    $gradosFC= fahrenheitCelsius(32);
    print_r($gradosFC);
    echo "<br>";
    //pasar de grados celsius a grados kelvin
    function celsiusKelvin(int|float $temperatura) : int|float{
        return $temperatura+273.15; 
    }
    $gradosCK= celsiusKelvin(0);
    print_r($gradosCK);
    echo "<br>";
    //pasar de grados Kelvin a grados celsius
    function kelvinCelsius(int|float $temperatura) : int|float{
        return $temperatura-273.15; 
    }
    $gradosKC= kelvinCelsius(273.15);
    print_r($gradosKC);
    echo "<br>";
    //pasar de grados fahrenheit a grados Kelvin
    function fahrenheitKelvin(int|float $temperatura) : int|float{
        return ($temperatura+459.67)*(5/9); 
    }
    $gradosFK= fahrenheitKelvin(32);
    print_r($gradosFK);
    echo "<br>";
    //pasar de grados Kelvin a grados Fahrenheit
    function kelvinFahrenheit(int|float $temperatura) : int|float{
        return ($temperatura-273.15)*1.8; 
    }
    $gradosKF= kelvinFahrenheit(273.15);
    print_r($gradosKF);
    echo "<br>";

    $array=[[

    ]];

function convertirTemp(int|float $temperatura,
string $unidadI, string $unidadF): float{
    $temperatura_final=match(true){
        $unidadI=="C" && $unidadF=="F"=> celsiusFahrenheit($temperatura)
    };
    return $temperatura_final;
}
echo convertirTemp(25,"C","F");





    ?>
</body>
</html>