<?php 

$num = 23746;
//! es más sencillo lo has enreversado mucho
echo "<b>Función 1:</b><br> El número introducido tiene " .digitos($num). " dígitos.";

function digitos ($num) {
    return strlen($num);
}

$pos = 3;
echo "<br><br><b>Función 2:</b><br> El dígito que se encuentra en la posición " .$pos. " del número " .$num. " es el  " .digitoN($num,$pos). ".";
function digitoN ($num, $pos) {
    $dividir_numero = str_split($num);

    if ($pos > strlen($num) || $pos <= 0) {
        return "(ERROR. Has introducido una posición inexistente en el número introducido, vuelva a intentarlo.)";
    } else {
        return "El dígito que se encuentra en la posición " .$pos. " del número " .$num. " es el  " .$dividir_numero[$pos-1]. ".";
    }   
}

$cant = 3;
echo "<br><br><b>Función 3:</b><br> Del número " .$num. ", sí quitamos " .$cant . " dígitos por la derecha nos queda el número " .quitaPorDetras($num,$cant). ".";
function quitaPorDetras ($num, $cant) {

    if ($cant > strlen($num)|| $cant < 0) {
        return "(ERROR. Has introducido una posición inexistente en el número introducido, vuelva a intentarlo.)";
    } else if ($cant == 0) {
        return $num;
    } else {
        return substr(strval($num), 0, -$cant);
    }
}

echo "<br><br><b>Función 4:</b><br> Del número " .$num. ", sí quitamos " .$cant . " dígitos por delante nos queda el número " .quitaPorDelante($num,$cant). ".";
function quitaPorDelante ($num, $cant) {
    $numero_digitos = strlen($num);

    if ($cant > strlen($num)|| $cant < 0) {
        return "(ERROR. Has introducido una posición inexistente en el número introducido, vuelva a intentarlo.)";
    } else if ($cant == 0) {
        return $num;
    } else {
        return substr(strval($num), $cant, $numero_digitos);
    }
}

?>