<?php 

    $fila = $_GET["filas"];
    $columna = $_GET["columnas"];
    //!controlar los negativos y 0
    print("<table>");
    for ($i=0; $i < $fila; $i++) {
                
                print("<tr>");


        for ($j=0; $j < $columna; $j++) { 
                print("<td>");

                    echo $j;

                print("</td>");
        }
        print("</tr>");

    }
    print("</table>");
?>