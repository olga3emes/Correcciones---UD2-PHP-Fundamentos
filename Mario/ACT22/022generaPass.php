<?php 
$tamaño_contraseña = 22;

echo "<b>Contraseña generada:</b><br>" .generarContraseña($tamaño_contraseña);

function generarContraseña ($tamaño_contraseña) {
    $contraseña = "";
    $opciones = "1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $max = strlen($opciones)-1;

    for ($i = 0; $i < $tamaño_contraseña; $i++){
        $contraseña .= substr($opciones, mt_rand(0,$max), 1);
    }

    return $contraseña;
}

?>