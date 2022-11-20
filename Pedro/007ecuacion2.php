<?php
$a = $_GET["a"];
$b = $_GET["b"];
$c = $_GET["c"];

//! Si tienes tanto código repetido algo estás haciendo mal
$sol1 = (-$b + sqrt(pow($b, 2) - 4 * $a * $c)) / 2;

$sol2 = (-$b - sqrt(pow($b, 2) - 4 * $a * $c)) / 2;
//! mejor un switch con <=> evaluando el discriminante
if ($sol1 == $sol2) {
    echo "La solución es: " . $sol1;
} elseif (is_nan($sol1) && is_nan($sol2)) {
    echo "No hay solución";
} else {
    echo "Primera solución: " . $sol1 . "<br>";
    echo "Segunda solución: " . $sol2 . "<br>";
}
