<!--  Crea una función que, a partir de un tamaño, genere 
una contraseña aleatoria compuesta de letras y dígitos de manera aleatoria. -->

<?php

$tamaño = 10;
CrearContraseña($tamaño);
function CrearContraseña($tamaño)
{

    $contraseña = [];

    for ($i = 0; $i < $tamaño; $i++) {
        $numerosRandom = rand(0, 9);
        $DesdeLetra = "a";
        $HastaLetra = "z";
        $letraAleatoria = chr(rand(ord($DesdeLetra), ord($HastaLetra)));
        $numElec = rand(0, 1);
        $generarcontraseña = [$numerosRandom , $letraAleatoria];
        $contraseña[$i] = $generarcontraseña[$numElec];
    }
    
    echo implode("",$contraseña);
}

?>