<!-- FUNCIONES DE CADENA
 ucwords: Convierte a mayúsculas el primer caracter de cada palabra de una cadena.
 strrev: Invierte un string.
 str_repeat: Repite un string el número de veces deseado
 md5: Devuelve el hash md5 de un string como un número hexadecimal de 32 caracteres.
-->
<?php
    function ejUcwords(string $nombre){ 
        return (ucwords($nombre));
    }
    echo("Ejemplo de ucwords: ");
    echo(ejUcwords("benito pérez rubio"));
    echo("<br>");

    function ejStrrev($frase){
        return strrev($frase);
    }
    echo("Ejemplo de strrev: ");
    echo(ejStrrev("Hola buenas tardes"));
    echo("<br>");

    function ejStr_repeat($repiteme,$veces){
        return str_repeat($repiteme,$veces);
    }
    echo("Ejemplo de str_repeat: ");
    echo(ejStr_repeat("-",30));
    echo("<br>");

    function ejMd5($contraseña){
        return md5($contraseña);
    }
    echo("Ejemplo de md5: ");
    echo(ejMd5("Pepito123"));
?>