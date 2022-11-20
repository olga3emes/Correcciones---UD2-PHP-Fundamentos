<?php 

$edad = count($_GET) > 0 ? $_GET['edad'] : 24;
//! Muy bien!  Avisa del parámetro por URL. 
switch ($edad) {
    case ($edad < 0):
        echo "ERROR, esta persona no está ni en el pensamiento"; //! XD jajajaja
        break;
    case ($edad < 3): 
        echo "Esta persona tiene $edad años, es decir, es un bebé.";
        break;
    case ($edad > 3 && $edad <= 12): 
        echo "Esta persona tiene $edad años, es decir, es un niño.";
        break;
    case ($edad > 12 && $edad <= 17): 
        echo "Esta persona tiene $edad años, es decir, es un adolescente.";
        break;
    case ($edad > 17 && $edad <= 66): 
        echo "Esta persona tiene $edad años, es decir, es un adulto.";
        break;
    default:
        echo "Esta persona tiene $edad años, es decir, es un jubilado.";
}
?>