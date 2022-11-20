<?php

function digitos(int $num): int
{
    return strval(strlen($num));
}

function digitoN(int $num, int $pos): int
{
    return substr(strval($num), $pos, 1);
}

function quitaPorDetras(int $num, int $cant): int
{
    return substr(strval($num), 0, -$cant);
}

function quitaPorDelante(int $num, int $cant): int
{
    return substr(strval($num), $cant);
}

echo digitos(322222) . "</br>";
echo digitoN(1234, 2) . "</br>";
echo quitaPorDetras(12345, 1) . "</br>";
echo quitaPorDelante(12345, 3);