<?php 

$edad = $_GET['edad'];
$actualYear = date('Y');

if (!isset($edad) or $edad < 0){
    echo "Para ejecutar este ejercicio introduce la clave edad con un valor en la URL</br>";
}

if ($edad - 10 <= 0){
    echo "En ".($actualYear - 10)." la persona no había nacido<br/>";
} else {
    echo "En ".($actualYear - 10)." la persona tenía ".($edad - 10)." años<br/>";
}

echo "En ".($actualYear + 10)." la persona tendrá ".($edad + 10)." años<br/>";

if($edad <= 67){
    $tiempoJubilacion = 67 - $edad;

    echo "La persona se jubilará en ".($actualYear + $tiempoJubilacion);
} else {
    echo "La persona ya está jubilada";
}

