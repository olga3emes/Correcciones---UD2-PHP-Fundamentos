<?php
$array = [
    "Sí", "No", "Quizás", "Claro que sí",
    "Por supuesto que no", "No lo tengo claro",
    "Tiene toda la pinta de que no", "Yo diría que si",
    "Ni de coña"
];

echo $array[rand(0, count($array) - 1)];
