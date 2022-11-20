<?php 

$num_filas = $_GET["filas"];
$num_colum = $_GET["columnas"];

echo "<table>";
for ($i = 0; $i < $num_filas; $i++) {
    echo "<tr>";
    for ($j = 0; $j < $num_colum; $j++) {
        echo "<td>";
        echo "( $i , $j )";
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>