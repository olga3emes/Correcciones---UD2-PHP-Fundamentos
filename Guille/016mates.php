<?php
$array = range(1, 33);

foreach ($array as &$v) {
    $v = rand(1, 100);
}
$max = max($array);
$min = min($array);

$suma = array_sum($array);
$media = $suma /33;

echo "El mayor es: " . $max;
echo "<br>El menor es: " . $min;
echo "<br>La media es: " . $media;
?>