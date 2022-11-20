<?php

function canificador(string $cadena): string
{
    $cani = "";
    for ($i = 0; $i < strlen($cadena); $i++) {
        if ($i % 2 != 0) {
            $cani[$i] = strtoupper($cadena[$i]);
        } else {
            $cani[$i] = $cadena[$i];
        }
    };
    return $cani;
}

$cadena = "suhprimito dame un sigarro que acabo de salir de la carceh";
echo canificador($cadena);
