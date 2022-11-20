<!-- Añade las siguientes funciones:
digitos(int $num): int ‚ -> devuelve la cantidad de digitos de un numero.
digitoN(int $num, int $pos): int ‚ -> devuelve el digito que ocupa, 
empezando por la izquierda, la posición $pos.
quitaPorDetras(int $num, int $cant): int ‚ -> le quita por detrás (derecha) 
$cant digitos.
quitaPorDelante(int $num, int $cant): int ‚ -> le quita por delante (izquierda) 
$cant digitos.
Para probar las funciones, haz uso tanto de paso de argumentos 
posicionales como argumentos con nombre. -->

<?php

$num = 1234567;
echo "El numero base es: $num <br>";
digitos($num);
digitoN($num, 4);
quitaPorDetras($num, 2);
quitaPorDelante($num, 2);

function digitos($num)
{
    echo "El numero de digitos es: " . strlen($num) . "<br>";
}
function digitoN($num, $pos)
{
    $arrnum = str_split($num);
    if ($pos <= count($arrnum)) {
        $pos1 = $pos - 1;
        echo "El numero en la posición  $pos digitos es: " . $arrnum[$pos1] . "<br>";
    } else {
        echo "La posición que has elegido no existe";
    }
}
function quitaPorDetras($num, $cant)
{
    $arrnum = str_split($num);
    $numdigitos = count($arrnum) - $cant;
    echo "El numero quitando $cant digitos por detras es: ";
    for ($i = 0; $i < $numdigitos; $i++) {
        echo $arrnum[$i];
    };
}
function quitaPorDelante($num, $cant)
{

    $arrnum = str_split($num);
    echo "<br> El numero quitando $cant digitos por delante es: ";
    for ($i = $cant; $i < count($arrnum); $i++) {
        echo $arrnum[$i];
    }
}
?>