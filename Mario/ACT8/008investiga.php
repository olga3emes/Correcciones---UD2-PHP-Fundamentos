<?php 

/* La expresión match ramifica la evaluación basada en una comprobación de identidad de un valor. 
De forma similar a una sentencia switch, una expresión match tiene una expresión de sujeto que se compara con múltiples alternativas. 
A diferencia de switch, se evaluará a un valor muy parecido al de las expresiones ternarias. 
A diferencia de switch, la comparación es una comprobación de identidad (===) en lugar de una comprobación de igualdad débil (==). 

Ejemplo: */

$age = 23;

$result = match (true) { //! valida una condición mejor
    $age >= 65 => 'Jubilado',
    $age >= 25 => 'Adulto',
    $age >= 18 => 'Adolescente',
    default => 'Niño',
};

echo $result;

?>