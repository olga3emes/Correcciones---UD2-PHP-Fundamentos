<?php 

//! Buena solución y bien controlado. Te faltaría ver que si la persona tiene menos de 10 años sale negativo el valor de hace 10 años.

$edad = count($_GET) > 0 ? $_GET['edad'] : 24;
$anio_actual = date("Y");
$edad_10d = $edad + 10;
$anio_10d = $anio_actual + 10;
$edad_10a = $edad - 10;
$anio_10a = $anio_actual - 10;

echo ("La edad de esta persona actualmente es $edad años.<br><br>");
echo ("Dentro de 10 años: <br> Esta persona tendrá $edad_10d años y estaremos en el año $anio_10d. <br><br>");
echo ("Hace de 10 años: <br> Esta persona tenía $edad_10a años y estabamos en el año $anio_10a. <br><br>");

$diferencia_jubi = 67 - $edad;
$anio_jubi = $anio_actual + $diferencia_jubi;

echo ("El año de jubilación de esta persona será en $anio_jubi.");
?>