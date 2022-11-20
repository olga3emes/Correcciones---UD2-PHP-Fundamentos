<?php 

    $fila = $_GET["filas"];
    $columna = $_GET["columnas"];

    print("<table>");
    for ($i=0; $i < $fila; $i++) {

                print("<tr>");

        for ($j=0; $j < $columna; $j++) { 
                
                if($i == 0 || $j == 0 || $j == $columna-1 || $i == $fila -1){
                    print("<td>");
                        echo "(".$i.",".$j.")";
                    print("</td>");
                 }else{
                    print("<td>");
                        echo " ";
                    print("</td>");
                 }
        }
        print("</tr>");

    }
    print("</table>");
?>