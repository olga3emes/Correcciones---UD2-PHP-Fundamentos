<?php
//! Lee el enunciado, pide parámetro por URL. :'(
$edadActual = 20;
$añoActual = date(2022);
$añoJubilacion = 67;
$añoFuturo = $añoActual + 10;
$edadFutura = $edadActual + 10; 

echo "Actualmente Tienes ".$edadActual. "y es el año ".$añoActual;
echo "Dentro de 10 años tendras. ".$edadFutura. "y sera el año ".$añoFuturo;

if ($añoActual < 67){
    $añoJubilacion - $añoActual = $cuantoTeQueda;
    echo "Te queda para jubilarte: ".$cuantoTeQueda;

}
?>