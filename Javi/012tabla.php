<?php
    $filas= $_POST["filas"];
    $columnas= $_POST["columnas"];

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