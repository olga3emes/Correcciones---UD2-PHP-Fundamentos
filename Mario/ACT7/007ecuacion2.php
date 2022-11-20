<?php 
//! por url
$a = 3;
$b = 6;
$c = 2;

echo "La ecuación es ax2 + bx + c = 0, donde a = $a , b = $b y c = $c. <br><br>";

$fuera_raiz = -$b;
$parte1 = $b**2;
$parte2 = 4 * $a * $c;
$dentro_raiz = $parte1 - $parte2;
$divisor = $a * 2;
//! mejor un switch con <=>
if ($dentro_raiz < 0) {
    echo "Esta ecuación de segundo grado no tiene solución."; //! en los números reales
} else if ($dentro_raiz == 0) {
    $raiz = sqrt($dentro_raiz);
    $resultado1 = ($fuera_raiz + $raiz) / $divisor;
    echo "Esta ecuación tiene una solución que es $resultado1.";
} else {
    $raiz = sqrt($dentro_raiz);
    $resultado1 = ($fuera_raiz + $raiz) / $divisor;
    $resultado2 = ($fuera_raiz - $raiz) / $divisor;
    echo "Esta ecuación tiene dos soluciones que son $resultado1 y $resultado2.";
}

?>