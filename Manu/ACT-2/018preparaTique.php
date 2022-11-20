<?php 
 $nombre = "Pantalón";
 $coste = 20;
 $pesetas = $coste * 166.386 ;
 $cantidad = $_GET["cantidad"];

 print("<table>");

 for ($i=0; $i < $cantidad; $i++) { 
    print("<tr>");
    print("<td>");
                print($nombre."<br>");
                print("Euros   ". $coste ."           Pesetas     ". $pesetas);
    print("</td>");   
    print("</tr>");
 }

 print("</table>");

?>