<?php
$a = $_GET["a"];
$b = $_GET["b"];
$c = $_GET["c"];

//ax² + bx + c = 0

//! Se trataba de con una estructura de casos saber qué resultados esperar. Has enfocado mal el ejercicio.

$bMenos = $b * -1; 
$operacion1 = pow($b,2); 
$operacion2 = 4 * $a * $c; 
$resta = $operacion1 - $operacion2; 
$raizCuadrada = pow($resta , (1/2)); 
$multiplicacion = 2 * $a; 

$resultado1 = ($bMenos + $raizCuadrada) / $multiplicacion; 
$resultado2 = ($bMenos - $raizCuadrada) / $multiplicacion; 

echo "1 =" . $resultado1 . "</br>"; 
echo "2 =" . $resultado2; 
?>