<?php 

$pregunta = $_GET["ask"];
print ($pregunta."<br>");
$array_respuesta = ["Mamahuevo", "Ni idea","Quizas","Me la suda", "Ere gei?", "La veldadera vuelta beibe", "eldiablo en patines","¿Quién? no que quien te ha preguntado","Y la pregunta?"];
echo $array_respuesta[rand(0,sizeof($array_respuesta)-1)]; // RAND() DEVUELVE UN ENTERO RANDOM ENTRE DOS NÚMEROS

//! pero te parece normal esto? un poco de seriedad ¬¬ 

?>