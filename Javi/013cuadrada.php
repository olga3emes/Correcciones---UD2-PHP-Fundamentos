<?php
    $filas= $_POST["filas"];
    $columnas= $_POST["columnas"];

    print("<table>");
    for($i=0;$i<$filas;$i++){
        print("<tr>");
        for($j=0;$j<$columnas;$j++){
            if($i==0||$i==$filas-1||$j==0||$j==$columnas-1){
                print("<td>($i,$j)</td>");  
            }else{
                print("<td></td>");
            }   
        }       
        print("/<tr>");
    }
    print("/<table>");
?>