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

    include '018preparaTique.php';

    echo "<br><br>";

    echo "<table>";
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
            echo "<th>TOTAL</th>";
            echo "<td></td>";
            echo "<td>" .($coste_manzana*$cantidad_manzana)+($coste_camiseta*$cantidad_camiseta)+($coste_colonia*$cantidad_colonia). "</td>";
            echo "<td>" .(($coste_manzana*$cantidad_manzana)*166.3836)+(($coste_camiseta*$cantidad_camiseta)*166.3836)+(($coste_colonia*$cantidad_colonia)*166.3836). "</td>";
        echo "</tr>";
    echo "</table>";

    ?>
</body>
</html>