<?php 

$tamaño = 10;

echo generatePassword($tamaño);

function generatePassword(int $length) : string
{
    $clave = "";
    $caracteres = "1234567890abcdefghijklmnopqrstuvwxyz";
    
    $max = strlen($caracteres);
    for($i = 0; $i < $length; $i++){
        $clave .= substr($caracteres, mt_rand(0,$max), 1); //SUBSTR() DEVUELVE PARTE DE UN STRING
        $aux = $clave[$i];
        $clave[$i] = rand() % 2 == 0 ? (strtoupper($aux)) : (strtolower($aux));
    }
  
    return $clave;
}

?>