<?php
$columnas = $_GET["columnas"];
$filas = $_GET["filas"];

print "<table>";
for($f = 1; $f <= $filas; $f++){
    echo "<tr>";

    for($c = 1; $c <= $columnas; $c++){
        if($f == 1 || $c == 1 || $f == $filas || $c == $columnas){
            echo "<td>(" . $f . " , " . $c . ")</td>";
        }
        else{
            echo "<td></td>";
        }
    }
}
echo "</tr></table>";
?>
