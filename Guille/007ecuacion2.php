<?php 
$a = 3;
$b = 6;
$c = 4;
$resultado;

echo $a ."x^2 · " .$b. "x · ". $c . " = 0";

//! Se trataba de con una estructura de casos saber qué resultados esperar. Has enfocado mal el ejercicio.


$principio = $b*(-1);
$dentro = $b**2-4 * $a * $c;
$raiz = sqrt($dentro);
$abajo = 2 * $a;

$primer_final = ($principio + $raiz) /$abajo;
$segundo_final = ($principio - $raiz) /$abajo;

if(is_nan($primer_final) && is_nan($segundo_final) ){
    print "<br>No tiene solucion";
}else {
    echo "<br>1. x = " . $primer_final;
    echo "<br>2. x = " . $segundo_final;
}
?>