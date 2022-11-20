<?php

$arrayRandom = [];
$media;

for ($i = 0; $i < 33; $i++) {
    $arrayRandom[$i] = rand(0, 100);
};


echo "El mayor es " . max($arrayRandom) . "</br>" .
    "El menor es " . min($arrayRandom) . "</br>" .
    "La media es " . array_sum($arrayRandom) / count($arrayRandom);
