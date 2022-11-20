<?php
    $palabra = $_GET["palabra"];

    $resultado = match(true){ //! lo suyo es mostrar una condicion
        strlen($palabra) > 10 => 'Palabra muy larga',
        strlen($palabra) > 5 => 'Palabra estandar',
        strlen($palabra) > 3 => 'Palabra corta',
        strlen($palabra) > 1 => 'Palabra diminuta',
        default => 'No es palabra'     
    };

    echo $resultado;

    /*
        Es un switch mejorado. Permite mismos resultados con menos código,
        no requiere break y se pueden combinar brazos en uno usando coma
    ! Brazos?
    */ 

?>