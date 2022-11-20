<?php
$edad = $_GET["edad"];
$anyoActual = date("Y");

    echo "Hace 10 años era " . ($anyoActual  - 10) .  " y tenías " . ($edad - 10) ." años </br> 
    Dentro de 10 años tendrás " . ($edad + 10) . " años y será " . ($anyoActual + 10) . "</br>
    Te jubilarás en el año " . ((67 - $edad) + $anyoActual);

?>