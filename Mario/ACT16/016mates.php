<?php 

$valores[33] = []; //!NOOOOOOOOO X_X

for ($i = 0 ; $i < sizeof($valores) ; $i++) {
    $valores[$i] = rand(0,100);
    $j = $i + 1;
    echo " Posición $j = $valores[$i] <br>";
}

$num_mayor = max($valores);
$num_menor = min($valores);
echo "<br>";
echo "El mayor número del array es $num_mayor <br>";
echo "El menor número del array es $num_menor <br>";
$media = array_sum($valores) / 33; //! mejor count que 33.
echo "La media de los números del array es $media";

?>