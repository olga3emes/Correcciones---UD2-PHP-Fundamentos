<!-- Rellena un array de 100 elementos de manera aleatoria con 
valores M o F (por ejemplo ["M", "M", "F", "M", ...]). Una vez completado, 
vuelve a recorrerlo y calcula cuantos elementos hay de cada uno de los 
valores almacenando el resultado en un array asociativo ['M' => 44, 'F' => 
66] (no utilices variables para contar las M o las F). Finalmente, muestra el 
resultado por pantalla. -->
<?php
$mf = ["M", "F"];
$elementos = [];
$numero_random = rand(0, 1);

for ($i = 0; $i <= 100; $i++) {
    $numero_random = rand(0, 1);
    $elementos[$i] = $mf[$numero_random];
}

$contador = array_count_values($elementos);

print_r($contador);

?>