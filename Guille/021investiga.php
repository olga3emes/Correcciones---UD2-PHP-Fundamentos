<p>La función ucwords() es una función incorporada en PHP y se usa para convertir el primer carácter de cada palabra en una string a mayúsculas.</p>

<?php
$prueba = "<br> buenas tardes";

echo $prueba;
echo ucwords($prueba);
echo "<br>";
?>

<p>La función strrev() se usa para invertir una string. Esta función no realiza ningún cambio en la string original que se le pasó como parámetro.</p>

<?php
$prueba = "Buenos dias";

echo $prueba;
echo "<br>";
echo strrev($prueba);
?>
<br>
<p>str_repeat() es muy sencillo, su función es repetir un string tantas veces como se le indique.</p>

<?php
$prueba = "Buenas noches";

echo $prueba;
echo "<br>";
echo str_repeat($prueba, 3);
?>

<p>md5() es un protocolo que se usa para autenticar mensajes y verificar contenido Se basa en una función hash que verifica que un 
    archivo que ha enviado coincide con el que ha recibido la persona a la que se lo ha enviado.</p>