<?php

$tamaño = 8;

function generadorPass(int $tamaño): string
{
    /*He decidido crear bytes aleatorios y pasarlos a cadena hexadecimal
    Esto asegura una cadena cryptográficamente segura, al contrario que las que generan
    los métodos md5 y sha1*/
    $bytes = random_bytes($tamaño);
    $hex = bin2hex($bytes);

    return substr($hex, 0, $tamaño);
};

echo generadorPass($tamaño);

