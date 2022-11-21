<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="nombre-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>018imprimeTique</title>
</head>

<body>
    <?php  include_once("018preparaTique.php"); ?>
    <table border="1px">
        <thead>
            <th>Producto</th>
            <th>Precio/U</th>
            <th>Cantidad</th>
            <th>Total €</th>
            <th>Total Pts</th>
        </thead>
        <tbody>
            <?php
           

            $totalEuro = 0;

            foreach ($productos as $nombre => $valor) {
                $cantidad = $_GET["cant" . $nombre];
                $precio = $valor[0];
                $totalEuro += ($valor[0] * intval($cantidad));
                if ($cantidad > 0) {
                    echo "<tr>";
                    echo "<td>" . $nombre . "</td>";
                    echo "<td>" . $precio . "</td>";
                    echo "<td>" . $cantidad . "</td>";
                    echo "<td>" . ($precio * $cantidad) . "</td>";
                    echo "<td>" . ($precio * $cantidad) * 166.66 . "</td>";
                    echo "</tr>";
                }
            }
            $totalPts = $totalEuro * 166.66;
            echo "<tr><td></td><td></td><td>Total</td><td>$totalEuro €</td><td>$totalPts Pts</td></tr>"
                ?>
        </tbody>
    </table>
</body>

</html>