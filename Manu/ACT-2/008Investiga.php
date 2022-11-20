<?php 

/* La expresión match ramifica la evaluación basada en una comprobación de identidad de un valor.
  De forma similar a una sentencia switch, una expresión match tiene una expresión de sujeto que
   se compara con múltiples alternativas.*/


   //Ejemplo 1
   $string = "MATCH";

    $eldiablo = match($string){
         "MATCH()" => "Hay corchetes",
    
         "MATCH" => "No hay corchetes",
    };

    echo $eldiablo; //! de verdad... Manué Manué... Porque está bien que si no...

?>