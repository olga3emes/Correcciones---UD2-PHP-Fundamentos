<?php 

    $string = "hola esto es un string";
    // UCWORDS() ES UNA FUNCIÓN QUE CONVIERTE TODAS LAS INICALES DE UNA/S PALABRA/S EN MAYÚSCULAS

    print(strtoupper("Esto es ucwords( ) <br>"));
    echo ucwords($string)."<br><br>";

    // STRREV() DEVUELVE UN STRING INVERTIDO

    print(strtoupper("Esto es strrev( ) <br>"));
    echo strrev($string)."<br><br>";

    //STR_REPEAT() DEVUELVE EL STRING REPETIDO UN NÚMERO DE VECES DETERMINADAS

    print(strtoupper("Esto es str_repeat( ) <br>"));
    echo str_repeat($string."<br>", 2)."<br><br>";

    /*MD5() CALCULA EL HASH MD5 DEL STRING. NORMALMENTE SE USA PARA COMPRABAR EL ESTADO DE ARCHIVOS
    BÁSICAMENTE DEVUELVE UN CÓDIGO QUE REPRESENTA AL VALOR DE LA VARIABLE*/

    print(strtoupper("Esto es md5( ) <br>"));
    echo md5($string."<br>")."<br>";
?>