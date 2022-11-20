<?php

/* A partir de una edad muestra por pantalla:bebé si tiene menos de 3 años
niño si tiene entre 3 y 12 años
adolescente entre 13 y 17 años
adulto entre 18 y 66
jubilado a partir de 67*/

$edad = $_GET["edad"];
//! Te falta controlar los negativos, mejor con un switch...
if ($edad < 3) {

    echo "El bebe tiene menos de 3 años";
    
}elseif ($edad <=12) {

    echo "Niño si tiene entre 3 y 12 años";

}elseif ($edad <=17) {
    
    echo "Adolescente entre 13 y 17 años";

}elseif ($edad <= 66) {

    echo"Adulto entre 18 y 66";
    
}else {
    echo"Jubilado a partir de 67";
}

?>