<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

$producto1 = "Manzana";
$producto2 = "Camiseta";
$producto3 = "Colonia";
$coste_manzana = 3;
$coste_camiseta = 36;
$coste_colonia = 15;
$cantidad_manzana = count($_GET) > 0 ? $_GET['cantidad_manzana'] : 1;
$cantidad_camiseta = count($_GET) > 0 ? $_GET['cantidad_camiseta'] : 1;
$cantidad_colonia = count($_GET) > 0 ? $_GET['cantidad_colonia'] : 1;

echo "<table>";
    echo "<thead>";
        echo "<h1>Tienda de Mario</h1>";
    echo "</thead>";
    echo "<tr>";
        echo "<th>Nombre producto</th>";
        echo "<th>Cantidad</th>";
        echo "<th>Precio (€)</th>";
        echo "<th>Precio (Pesetas)</th>";
    echo "</tr>";
    echo "<tr>";
        echo "<td>" .$producto1. "</td>";
        echo "<td>" .$cantidad_manzana. "</td>";
        echo "<td>" .$coste_manzana*$cantidad_manzana. "</td>";
        echo "<td>" .($coste_manzana*$cantidad_manzana)*166.3836. "</td>";
    echo "</tr>";
    echo "<tr>";
        echo "<td>" .$producto2. "</td>";
        echo "<td>" .$cantidad_camiseta. "</td>";
        echo "<td>" .$coste_camiseta*$cantidad_camiseta. "</td>";
        echo "<td>" .($coste_camiseta*$cantidad_camiseta)*166.3836. "</td>";
    echo "</tr>";
    echo "<tr>";
        echo "<td>" .$producto3. "</td>";
        echo "<td>" .$cantidad_colonia. "</td>";
        echo "<td>" .$coste_colonia*$cantidad_colonia. "</td>";
        echo "<td>" .($coste_colonia*$cantidad_colonia)*166.3836. "</td>";
    echo "</tr>";
    echo "<tr>";
        echo "<th>Tu tienda de confianza</th>";
    echo "</tr>";
echo "</table>";

?>
</body>
</html>