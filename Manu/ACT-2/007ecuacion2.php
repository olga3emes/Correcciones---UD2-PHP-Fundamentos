<?php 
//! por URL
$a = 31;
$b = 2;
$c = 3;
$dis = sqrt(($b**2)-4*$a*$c); // SQRT() REALIZA LA RAÍZ CUADRADA

// LAS DIFERENTES PSOIBILIDADES DE UNA ECUACIÓN DE 2ºGRADO
//! si tienes que repetir el mismo codigo es que haces algo mal. REUTILIZAR!!!
$x1 = (-1*($b)+sqrt(($b**2)-4*$a*$c))/2*$a;
$x2 = (-1*($b)+sqrt(($b**2)-4*$a*$c))/2*$a;
$x1_1 = (-1*($b))/2*$a;
//! mejor un switch con <=>
if($dis > 0){
    echo "La ecuació tiene dos soluciones : <br>  1. ".$x1."<br> 2. ".$x2;
 }else if($dis == 0){
    echo "La ecuació tiene dos soluciones : <br>  1. ".$x1_1;
 }else if(is_nan($dis)){ //IS_NAN() NOS DUVUELVE UN BOOLEANO 
    echo "La ecuación no tiene solución en los números reales";
 }

?>