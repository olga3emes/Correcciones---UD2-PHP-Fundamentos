<?php
$columnas = $_GET["columnas"];
$filas = $_GET["filas"];

print "<table>";
for ($fi = 1; $fi <= $filas; $fi++){
    echo "<tr>";

    for ($i = 1; $i <= $columnas; $i++){
        if ($fi == 1 || $i == 1 || $fi == $filas || $i == $columnas){
            echo "<td>(". $fi. ", ".$i. ")</td>";

        } else {
            echo "<td></td>";
    }
}
echo "</tr></table>";

}
?>