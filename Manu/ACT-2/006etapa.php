<?php 

$edad = $_GET["edad"];
$estado = ['Bebé','Niño','Adolescente','Adulto','Jubilado']; 
//! Cuidado con los negativos.
//Avisa del parámetro por URL.
switch ($edad) { //SWITCH SEGÚN UNA EDAD
    case $edad < 3:
        echo "Es un ".$estado[0];
        break;
    case $edad >= 3 && $edad <= 12:
        echo "Es un ".$estado[1];
    break;
    case $edad > 12 && $edad <= 17:
        echo "Es un ".$estado[2];
    break;
    case $edad >= 18 && $edad <= 66:
        echo "Es un ".$estado[3];
    break;
    case $edad >67:
        echo "Es un ".$estado[4];
    break;
}

?>