<?php
/*017matematicas.php: A√±ade las siguientes funciones:
digitos(int $num): int ‚ devuelve la cantidad de d√≠gitos de un n√∫mero.
digitoN(int $num, int $pos): int ‚ devuelve el digito que ocupa, 
empezando por la izquierda, la posición $pos.
quitaPorDetras(int $num, int $cant): int ‚ le quita por detrás (derecha) 
$cant digitos.
quitaPorDelante(int $num, int $cant): int ‚le quita por delante (izquierda) 
$cant digitos.
Para probar las funciones, haz uso tanto de paso de argumentos 
posicionales como argumentos con nombre.*/

$numeroPrueba =133456;
$possi = 2;

echo strlen($numeroPrueba)."<br/>";
echo substr($numeroPrueba, 2,-3)."<br/>"; 
echo substr($numeroPrueba,0,-1)."<br/>";
echo substr($numeroPrueba,2)."<br/>";



?>