<?php
$respuesta = ['Si', 'No', 'Puede ser', 'No te importa', 'Hoy no respiro',
'Me he caído por las escaleras', 'En Ilerna', 'Dejame en paz', 'Aprende a escribir'];

$azar = array_rand($respuesta);

echo $respuesta[$azar];
?>