<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio</title>
</head>
<body>
    <p><?php $pregunta ?></p>   
</body>
</html>




<?php
$pregunta = $_POST['pregunta'];

$string_respuestas = ['Hombre claro', 'Esta la cosa mala','Pero mala mala', 'EY', 'Primo', 'Que tal churri', 'Me tiene frito', 'LLevate esta'];

$random = array_rand($string_respuestas);

echo $string_respuestas[$random];

?>