<?php
//URL: 007ecuacion2.php?a=2&&b=6&&c=4 
echo "Introduzca por URL los parámetros: a, b, c<br><br>";
$a = $_GET["a"];
$b = $_GET["b"];
$c = $_GET["c"];

echo "La ecuación es: $a x^2 + $b x + $c = 0<br>";

$valor_discriminante = $b * $b - (4 * $a * $c);
echo "Discriminante: $valor_discriminante<br><br>";

switch ($valor_discriminante <=> 0) {
    case -1:
        echo "No tiene solución haciendo uso de los números reales.";
        break;
    case 0:
        echo "Tiene una solución:<br>";
        $d = (-$b + sqrt($valor_discriminante)) / (2 * $a);
        echo "El resultado es $d";
        break;
    case 1:
        echo "Tiene dos soluciones:<br>";
        $d = (-$b + sqrt($valor_discriminante)) / (2 * $a);
        $e = (-$b - sqrt($valor_discriminante)) / (2 * $a);
        echo "La solución 1) es: $d <br> La solución 2) es $e";
        break;
}



?>