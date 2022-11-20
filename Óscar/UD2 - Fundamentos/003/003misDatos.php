<?php 
$nombre = $_GET["nombre"];
$apellido1 = $_GET["apellido1"];
$apellido2 = $_GET["apellido2"];
$email = $_GET["email"];
$fecha = $_GET["fecha"];
$movil = $_GET["movil"];

echo "Hola " . $nombre . "<br>";
echo "Nombre: " . $nombre . "<br>";
echo "1º apellido: " . $apellido1 . "<br>";
echo "2º apellido: " . $apellido2 . "<br>";
echo "Email: " . $email . "<br>";
echo "Fecha: " . $fecha . "<br>";
echo "Movil: " . $movil . "<br>"; 

//! Y la tabla?? El móvil es un teléfono no un texto y la fecha tendría que ser un año

?>