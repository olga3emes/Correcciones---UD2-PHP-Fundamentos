<!-- nvestiga las siguientes funciones de cadena (explica para 
qué sirven mediante comentarios, y programa un pequeño ejemplo de cada 
una de ellas): ucwords, strrev, str_repeat y md5. -->

<?php
$texto = "Esto es un texto de prueba";
echo "Texto base: " . $texto . "<br>";
echo "Texto ucwords: " . ucwords($texto) . "<br>"; //Convierte a mayúsculas el primer caracter de cada palabra de una cadena
echo "Texto strrev: " . strrev($texto) . "<br>"; //Invierte una cadena
echo "Texto str_repeat: " . str_repeat($texto, 2) . "<br>"; //Repite una cadena
echo "Texto md5: " . md5($texto); //Calcula el 'hash' md5 de un string
?>