<?php 
$dinero = [ "Billetes" => [500, 200, 100, 50, 20, 10, 5], "Monedas" => [2, 1, 0.5, 0.2, 0.1] ];
 
$cantidad = 138; //! Por url 
 
foreach($dinero as $medio_fisico => $valores) { //! Esto es muy lento!!
    foreach($valores as $valor) {
        if($cantidad >= $valor) {
            echo "$medio_fisico con valor de \$$valor: ".floor($cantidad/$valor)."<br>";
            $cantidad = $cantidad % $valor; 
            if(!$cantidad) {
                break 2;
            }
        }
    }
}