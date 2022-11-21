<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>019listaCompra</title>
</head>

<body>
    <?php include '019encabezadoCompra.php' ?>
    <ul>
        <?php
        $productos["Tomate"] = [0.5];
        $productos["Patata"] = [0.8];
        $productos["Hamburguesa"] = [3];
        $productos["Agua"] = [0.7];

        $totalEuro = 0;
        foreach ($productos as $nombre => $valor) {
            $cantidad = $_GET["cant" . $nombre];
            $precio = $valor[0];
            $totalEuro += ($valor[0] * intval($cantidad));
            if ($cantidad > 0) {

                echo "<li>Producto: " . $nombre . "</li>";
                echo "Precio: " . $precio . "</br>";
                echo "Cantidad: " . $cantidad . "</br>";
                echo "Total €: " . ($precio * $cantidad) . "</br>";
                echo "Total Pts: " . ($precio * $cantidad) * 166.66 . "</li>";
            }
        }
        $totalPts = $totalEuro * 166.66;
        echo "<li>Total:
            $totalEuro € ---
           $totalPts Pts</li>"
            ?>
    </ul>
    <?php include '019footerCompra.php' ?>
</body>

</html>