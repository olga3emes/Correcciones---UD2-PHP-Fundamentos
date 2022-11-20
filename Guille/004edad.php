<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Act 4</title>
</head>
<body>

<?php 
$edad = 19; //! No has hecho lo que dice el ejercicio
$ema10a = $edad + 10;
$eme10a = $edad - 10;

$anyo = 2022;
$anyoema = $anyo + 10;
$anyoeme = $anyo - 10;

echo nl2br ("En $anyo tiene $edad años \n En $anyoema tiene $ema10a años \n En $anyoeme tiene $eme10a años");

$jubilacion = 67;
$currando = $jubilacion - $edad;

$fecha = $anyo + $currando
?>
<br>
<?= "Se jubilará en el año $fecha, por lo que le quedan $currando años"?>
    
</body>
</html>