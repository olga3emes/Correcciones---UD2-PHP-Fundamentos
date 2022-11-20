<?php

$cadena = "Hola, esto es una cadena";


/*ucwords:
Convierte en mayúsculas el primer caracter de cada palabra de una cadena*/

echo "<strong>ucwords:</strong>  " . ucwords($cadena) .  "</br>";

/*strrev:
Devuelve una cadena invertida*/
echo "<strong>strrev:</strong>  " . strrev($cadena) .  "</br>";


/*str_repeat:
Repite una cadena el número de veces que indiquemos*/
echo "<strong>str_repeat:</strong>  " . str_repeat($cadena, 2) .  "</br>";


/* md5:
Calcula el hash como número hexadecimal de 32 caracteres 
de una cadena utilizando el algoritmo MD5 Message-Digest
de RSA Data Security.
Si se establece el raw_output opcional en true, el resumen md5 será devuelto 
en formato binario sin tratar con una longitud de 16.
NO se recomienda usar para generar contraseñas seguras*/
echo "<strong>md5:</strong>  " . md5($cadena) .  "</br>";
