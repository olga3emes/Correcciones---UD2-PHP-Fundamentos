<?php 

$array[32] = [];//! NOOOOOOOOO X_X

for ($i=0; $i < sizeof($array); $i++) { 
    $array[$i] = rand(0,100);
}

$suma = array_sum($array); //ARRAY_SUM()  SUMA LOS VALORES DE UN ARRAY
$media = $suma/count($array) ; // COUNT() CUENTA LOS VALORES DE UN ARRAY
$mayor = max($array); /* MAX() Y MIN() DEVUELVE EL VALOR MÁXIMO Y MÍNIMO DE UN ARRAY */
$menor = min($array);

echo "La media es ". $media . " <br> El mayor es ". $mayor . " <br>El menor es ". $menor;

?>