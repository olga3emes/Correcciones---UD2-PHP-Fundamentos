<?php
    $pregunta= $_POST["pregunta"];
    print("$pregunta <br>");
    $respuestas=["Sí","No","Quizás","Claro que sí","Por supuesto que no","No lo tengo claro","Seguro","Yo diría que sí","Ni de coña"];
    print($respuestas[rand(0, sizeof($respuestas)-1)]);
?>