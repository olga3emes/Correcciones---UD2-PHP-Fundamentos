<?php
function digitos(int $num): int {
    return strlen($num);
}
function digitoN(int $num, int $pos): int {
    $array = str_split($num);
    if ($pos > 0 && $pos <= count($array)) {
        $pos -= 1;
        return $array[$pos];
    } else {
        return -1;
    }
}
function quitaPorDetras(int $num, int $cant): int{
    return +substr($num, 0, -$cant);
}
function quitaPorDelante(int $num, int $cant): int{
    return +substr($num,$cant);
}
echo "El número '8765' tiene " . digitos(8765) . " dígitos</br>";
echo "La posición '2' del número '67895' contiene el dígito: " . digitoN(pos: 2, num: 67895) . "</br>";
echo "Si le quitamos '3' dígitos por detrás a '12345' nos quedaría: " . quitaPorDetras(12345, 3) . "</br>";
echo "Si le quitamos '3' dígitos por delante a '56789' nos quedaría: " . quitaPorDelante(cant: 3, num: 56789) . "</br>";