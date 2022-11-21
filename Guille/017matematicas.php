 <?php
$num = 112301;
$posicion = 3;
$cant = 1;

function digitos(int $numero){

    return strlen($numero);
}

//a partir de aqui no se hacerlo, no entiendo las funciones
function digitoN(int $num, int $pos){  

    $number = strval($num); 
    $posi = strval($pos); 
    $posi = " ";
    $array_num = str_split($number);

    return $array_num(0);

}   

function quitaPorDetras(int $num, int $cant){

    return substr(strval($num), $cant, -1);
}

echo digitos($num);
echo digitoN($num, $pos);
echo quitaPorDetras($num, $cant);
//! te falta una función
?>