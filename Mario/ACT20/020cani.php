<?php 

$cadena = 'Escribe una funcion que transforme una cadena en cani';

echo letraCani($cadena);

function letraCani ($cadena) {
    
    $dividir_cadena = str_split($cadena);
    $mayuscula = 1;
    $resultado = "";

    for ($i = 0; $i < count($dividir_cadena); $i++) {
        if ($mayuscula == 1 && $dividir_cadena[$i] != " ") {
            $resultado.= strtoupper($dividir_cadena[$i]);
            $mayuscula = 0;
        } else if ($dividir_cadena[$i] != " "){
            $resultado.= strtolower($dividir_cadena[$i]);
            $mayuscula = 1;
        } else {
            $resultado.= " ";
        }

    }

    return $resultado;
} 

?>