<!-- 018imprimeTique.php: Tras leer los datos del tique de compra, enumera en 
una tabla los productos, con su precio en euros y pesetas, y finalmente, en 
una última fila, totalizar en ambas monedas. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div>
        <table border>
            <thead>
                <?php
                include_once '018preparaTique.php';
                echo "<tr>";
                foreach ($producto1 as $key => $producto1) {
                    echo "<th>$key</th>";
                }
                echo "</tr>";
                ?>
            </thead>
            <tbody>
                <tr>
                    <?php
                    include '018preparaTique.php';
                    foreach ($producto1 as $key => $producto1) {
                        echo "<td>$producto1</td>";
                    }
                    ?>
                </tr>
            </tbody>
        </table>
        </div>
         <br>           
        <div>
        <table border>
            <thead>
                <?php
                include_once '018preparaTique.php';
                echo "<tr>";
                foreach ($producto2 as $key => $producto2) {
                    echo "<th>$key</th>";
                }
                echo "</tr>";
                ?>
            </thead>
            <tbody>
                <tr>
                    <?php
                    include '018preparaTique.php';
                    foreach ($producto2 as $key => $producto2) {
                        echo "<td>$producto2</td>";
                    }
                    ?>
                </tr>
            </tbody>
        </table>
        </div>

</body>

</html>