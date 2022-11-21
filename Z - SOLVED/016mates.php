<?php
$array = [];
for ($i = 0; $i < 33; $i++) {
    $array[$i] = rand(0, 100);
};

echo "El mayor es " . max($array) . "</br>" .
     "El menor es " . min($array) . "</br>" .
     "La media es " . array_sum($array) / count($array);
