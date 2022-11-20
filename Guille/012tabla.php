<?php
$columnas = $_GET["columnas"];
$filas = $_GET["filas"];

print("<table>");
for($f = 0 ; $f < $filas; $f++){
    print("<tr>");
    for($c = 0 ; $c < $columnas; $c++){
        print("<td>");
        print "($f ,  $c)";
        print("</td>");
    }
    print("</tr>");
}
print("</table>");
?>