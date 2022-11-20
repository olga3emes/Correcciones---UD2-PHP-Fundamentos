<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Prohibidísimo, pero es para ver la tabla más clara -->
    <style>td{ border: 1px solid black; padding: 5px;}</style>

    <table>
        <thead>
            <tr>
                <td>Producto</td>
                <td>Cantidad</td>
                <td>Precio €</td>
                <td>Precio Pts</td>
                <td><strong>Total €</strong></td>
                <td><strong>Total Pts</strong></td>
            </tr>
        </thead>
        <tbody>
            <?php
            include_once "018preparaTique.php";
            foreach ($productos as $clave => $valor) {

                echo "<tr>
            <td>$clave</td>
            <td>" . $valor[0] . "</td>
            <td>" . $valor[1] . "</td>
            <td>" . $valor[1] * 166.386 . "</td>
            <td>" . $valor[1] * $valor[0] . "</td>
            <td>" . ($valor[1] * 166.386) * $valor[0] . "</td>
            </tr>";
            }



            ?>
        </tbody>
    </table>
</body>

</html>