<?php 
$contrasena = "";
$lista = "123456789qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASLKDJFHGZMXNCBV";

    for($i = 0; $i < 6 ; $i++){
        echo $contrasena = substr($lista, rand(0, 61), 2);
    }

    /*no consigo entender el tema de pasar parámetros por las funciones, 
    no entiendo como con distinto nombre pueden entenderse*/
?>

