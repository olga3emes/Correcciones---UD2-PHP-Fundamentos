<?php
$arrayMF = ["M", "F"];
$arrayFinal = [];
for ($i = 0; $i < 100; $i++) {
    $arrayFinal[$i] = $arrayMF[rand(0, 1)];
};


$arrayAsociativo = array_count_values($arrayFinal);

//! Innecesario -> print_r( del array asociativo);
foreach ($arrayAsociativo as $clave => $nVeces) { //! innecesario
    echo "$clave : $nVeces veces </br>";
};
//! esto
print_r($arrayAsociativo);
