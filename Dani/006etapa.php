<?php
    $edad = $_GET["edad"];
 //! Te falta la comprobación de parámetro válido    
    switch ($edad) {
        case $edad >= 67 :
            echo "Eres jubilado";
            break;
        case $edad >= 18 :
            echo "Eres adulto";
            break;
        case $edad >= 13 :
            echo "Eres adolescente";
            break;
        case $edad >= 3 :
            echo "Eres niño";
            break;
        case $edad < 3 && $edad > 0 :
            echo "Eres bebé";
            break;
        default:
            echo "No has nacido";
            break;
    }
    
?>