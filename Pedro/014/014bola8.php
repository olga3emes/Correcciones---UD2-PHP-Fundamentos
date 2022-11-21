<?php

$pregunta = $_GET["pregunta"];

$respuesta = ["sí", "no", "quizás", "claro que sí", "por supuesto que no", "no lo tengo claro", "seguro", "yo diría que sí"];

echo "¿".$pregunta . "?<br>"; //! si los pones ahí debes ponerlos en el HTML cuando pides la pregunta o pueden salir repetidos
echo $respuesta[array_rand($respuesta)];
