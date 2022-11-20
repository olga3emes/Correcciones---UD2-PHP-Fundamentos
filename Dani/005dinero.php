<?php
//! Todo OK: Faltaría el aviso de introducir el parámetro por URL
    $cantidad = $_GET["cantidad"];
    $dineroArray = [500, 200, 100, 50, 20, 10, 5, 2, 1];
    $contadorBilletes = 0;
    for ($i=0 ; $i < count($dineroArray) ; $i++ ) { 
       $contadorBilletes = intdiv($cantidad, $dineroArray[$i]);
       $cantidad %= $dineroArray[$i];
       echo $contadorBilletes . " billetes de " . $dineroArray[$i]. "</br>";
    }


?>