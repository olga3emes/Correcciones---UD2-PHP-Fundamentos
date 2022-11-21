<table>
<?php

$maxfilas = $_GET["filas"];
$maxcolumnas = $_GET["columnas"];
//! controlar los negativos y 0-->
for ($fila = 1; $fila <= $maxfilas; $fila++) {

    echo "<tr>";

    //! ves inicias en 1
    for ($columnas = 1; $columnas <= $maxcolumnas; $columnas++) {

        echo "<td> (" . $fila . " , " . $columnas . ") </td>";

    }
}
        echo "</tr>";
?>
</table>