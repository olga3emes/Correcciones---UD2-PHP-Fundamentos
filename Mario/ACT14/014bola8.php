<?php 

$preg = $_GET['pregunta'];

$respuestas = array('Sí', 'No', 'Quizás', 'Claro que sí', 'Por supuesto que no', 'No lo tengo claro', 'Seguro', 'Yo díria que sí', 'Ni de coña');

echo "<b>Pregunta:</b> $preg <br><br>";

$respuesta = $respuestas[mt_rand(0, count($respuestas) - 1)];

echo "<b>Respuesta:</b> $respuesta";

?>