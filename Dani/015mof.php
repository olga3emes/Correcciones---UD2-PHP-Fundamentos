<?php
$arrayMF = ["M", "F"];
$arrayFinal = [];
for ($i = 0; $i < 100; $i++) {
    $arrayFinal[$i] = $arrayMF[rand(0, 1)];
};


$arrayAsociativo = array_count_values($arrayFinal);

foreach ($arrayAsociativo as $clave => $nVeces) {
    echo "$clave : $nVeces veces </br>";
};
