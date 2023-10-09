<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones IRPF</title>
</head>
<body>

<?php

DEFINE('irpf19',2365.5); //el irpf ya sacado de lo que es 12450
DEFINE('irpf24',1860);//el irpf ya sacado entre 12450 y 20200
DEFINE('irpf30',4500);//el irpf ya sacado entre 20200 y 35200
DEFINE('irpf37',9176);//el irpf ya sacado entre 35200 y 60000
DEFINE('irpf45',108000);//el irpf ya sacado entre 60000 y 300000


function SalarioIRPF(int|float $salario) : float{
        if($salario>0 && $salario<=12450){
            return ($salario*0.19);
        }else if($salario<=20200 && $salario>12450){
            return irpf19 + (($salario-12450)*0.24);
        }else if($salario<=35200 && $salario>20200){
            return (irpf19 + irpf24) +(($salario-20200)*0.30);
        }else if($salario<=60000 && $salario>35200){
            return (irpf19 + irpf24 + irpf30) +(($salario-35200)*0.37);
        }else if($salario<=300000 && $salario>60000){
            return (irpf19 + irpf24 + irpf30 + $iropf37) +
            (($salario-60000)*0.45);
        }else{
            return (irpf19 + irpf24 + irpf30 + iropf3+ irpf45) +
            (($salario-300000)*0.47);
        }
}
   // echo "<h3>". SalarioIRPF(12450) ."</h3>";


    ?>
</body>
</html>