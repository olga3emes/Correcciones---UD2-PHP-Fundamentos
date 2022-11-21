<?php
    $filas= $_POST["filas"];
    $columnas= $_POST["columnas"];
  //! controlar los negativos y 0
    print("<table>");
    for($i=0;$i<$filas;$i++){
        print("<tr>");
        for($j=0;$j<$columnas;$j++){
            print("<td>($i,$j)</td>");
        }       
        print("/<tr>");
    }
    print("/<table>");
?>