<?php
/*
ucwords-> Devuelve una cadena con la primera palabra en mayúsculas
*/

$ejemplo1 = 'Hola Mundo';
$ejemplo1 = ucwords($ejemplo1);


/*
strrev-> Devuelve la cadena invertida
*/

echo strrev("Hola mundo");

/*
str_repeat-> Devuelve el input repetido multiples veces.
*/
echo str_repeat("-=", 10);

/*
md5-> Calcula el Hash Str utilizando un algoritmo y duelve este hash 
*/

$str = 'apple';

if (md5($str) === '1f3870be274f6c49b3e31a0c6728957f') {
    echo "Would you like a green or red apple?";
}
?>