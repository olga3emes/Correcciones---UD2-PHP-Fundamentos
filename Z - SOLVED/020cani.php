<?php 
$cadena = "Una frase en cani.";

echo toCani($cadena);
function toCani($cadena){
    for ($i=0; $i < strlen($cadena); $i++) {
        ($i % 2 == 0) ?
        $cadena[$i] = strtoupper($cadena[$i]) :
        $cadena[$i] = strtolower($cadena[$i]);
    }
    return $cadena;
}