<?php
/*
La expresión match ramifica la evaluación basada en una comprobación de identidad de un valor.
De forma similar a una sentencia switch, una expresión match tiene una expresión de sujeto 
que se compara con múltiples alternativas.
Match puede:
    -Retornar valores.
    -No requiere de una sentencia break.
    -Se puede combinar condiciones.
    -Utiliza comparaciones estrictas (===) evitando el type coersion.
    -Match múltiple.
*/
//EJEMPLO
$comida = 'manzana';

$resultado = match ($comida) {
    'manzana' => 'Esta comida es una manzana',
    'pera' => 'Esta comida es una pera',
    'platano' => 'Esta comida es un platano',
};

echo "$resultado";
?>