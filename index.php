<?php


/* 

ejercicio 1

$num1 = 4500;
$num2 = 5000;

$suma = $num1 + $num2;
$resta = $num1 - $num2;
$multiplicacion = $num1 * $num2;
$division = $num1 / $num2;


echo("La suma de : ". $num1 ." + ". $num2. " = " .$suma);
echo("<br>");
echo("La resta de : ". $num1 ." + ". $num2. " = " .$resta);
echo("<br>");
echo("La multiplicasion de : ". $num1 ." + ". $num2. " = " .$multiplicacion);
echo("<br>");
echo("La division de : ". $num1 ." + ". $num2. " = " .$division);
*/



/*

ejercicio 2

$peso = 60;
$altura = 1.70;
$IMC = $peso / $altura;

echo("su indice de masa corporal es: ".$IMC);
echo("<br>");

if ($IMC <= 18.4){
    echo(" usted tiene Insuficiencia de peso"); 
}
else if ( $IMC > 18.5 and $IMC <= 24.9){
    echo(" usted tiene peso normal");
}
else if  ( $IMC > 25 and $IMC <= 29.9){
    echo("usted tiene sobrepeso");
}
else if ( $IMC > 30 and $IMC <= 34.9){
    echo("usted tiene obesidad 1");
}
else{
    echo("usted tiene obecidad 2");
}
*/


/*

ejercicio 3


$numzapatos = 6;
$precio = 150000;
$valor_compra = $numzapatos * $precio;
$descuento = 0;


if ($numzapatos == 3){
    $descuento = $valor_compra * 0.10;
}

elseif ($numzapatos >3 && $numzapatos <= 5){
    $descuento = $valor_compra * 0.20;
}

elseif ($numzapatos > 5){
    $descuento = $valor_compra * 0.40;
}

$valor_total = $valor_compra - $descuento;
echo("el total de la compra es: ".$valor_total);
*/




/*

ejercicio 4


$numero_horas = 36;
$sal_semanal = 0;


if ($numero_horas <= 40){
    $sal_semanal = $numero_horas * 20000;
    echo("Su sueldo semanal es ".$sal_semanal);

}
else{
    $sal_semanal = $numero_horas * 25000;
    echo("Su sueldo semanal es ".$sal_semanal);

}
*/



/*

ejercicio 5

$salpicon= array("dulce1"=>"Banano","dulce2"=>"Manzana","dulce3"=>"Durazno","acido1"=>"piña","acido2"=>"naranja","acido3"=>"lulo");
print_r($salpicon);
echo("<br>");
foreach ($salpicon as $clave=>$valor){
    echo($valor. " con la clave: ".$clave);
    echo("<br>");

}
*/


?>