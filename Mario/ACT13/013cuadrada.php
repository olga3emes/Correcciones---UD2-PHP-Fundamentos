<?php 

$num_filas = $_GET["filas"];
$num_colum = $_GET["columnas"];

echo "<table>";
for ($i = 0; $i < $num_filas; $i++) {
    echo "<tr>";
    for ($j = 0; $j < $num_colum; $j++) {
        echo "<td>";
        if ($i == 0 || $i == $num_filas - 1 || $j == 0 || $j == $num_colum - 1) {
            echo "( $i , $j )";
        } else {
            echo "";
        } 
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>